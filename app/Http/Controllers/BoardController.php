<?php

namespace App\Http\Controllers;

use App\Models\board;
use App\Models\column;
use App\Models\card;
use App\Http\Requests\StoreboardRequest;
use App\Http\Requests\UpdateboardRequest;
use Inertia\Inertia;
use Illuminate\Support\Facades\Log;

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\board  $board
     * @return \Illuminate\Http\Response
     */
    public function show($boardId)
    {
        Log::info($boardId);
        $board = Board::findOrFail($boardId);
        $columns = Column::all()->where(('column_board_id'), $board->board_id);
        $cards = array();
        foreach($columns as $column)
        {
            $cards = array_merge($cards, Card::all()->where(('card_column_id'), $column->column_id)->toArray());
        }

        return Inertia::render('Board', [
            'boardItem' => $board,
            'columns' => $columns,
            'cards' => $cards
        ]);
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
