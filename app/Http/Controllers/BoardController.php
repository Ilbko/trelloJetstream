<?php

namespace App\Http\Controllers;

use App\Models\workspace;
use App\Models\board;
use App\Models\column;
use App\Models\card;
use App\Http\Requests\StoreboardRequest;
use App\Http\Requests\UpdateboardRequest;
use Inertia\Inertia;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreboardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreboardRequest $request)
    {
        $request->validate([
            'boardName' => ['required', 'max:64']
        ]);
        $newBoard = new Board;
        $newBoard->board_name = $request->input('boardName');
        $newBoard->workspace()->associate(Workspace::find($request->input('workspaceId')));
        $newBoard->save();

        return Redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\board  $board
     * @return \Illuminate\Http\Response
     */
    public function show($boardId)
    {
        $board = Board::findOrFail($boardId);
        if (auth()->user()->can('view', $board))
        {
            $columns = Column::all()->where(('column_board_id'), $board->board_id)->where(('column_is_archived'), 0);
            $cards = array();
            foreach($columns as $column)
            {
                $cards = array_merge($cards, Card::all()->where(('card_column_id'), $column->column_id)
                ->where(('card_is_archived'), 0)->toArray());
            }

            return Inertia::render('Board', [
                'boardItem' => $board,
                'columns' => $columns,
                'cards' => $cards
            ]);
        }
        else
            abort(403, 'Unauthorized action.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\board  $board
     * @return \Illuminate\Http\Response
     */
    public function edit(board $board)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateboardRequest  $request
     * @param  \App\Models\board  $board
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateboardRequest $request, board $board)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\board  $board
     * @return \Illuminate\Http\Response
     */
    public function destroy(board $board)
    {
        //
    }
}
