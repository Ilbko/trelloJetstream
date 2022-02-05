<?php

namespace App\Http\Controllers;

use App\Models\workspace;
use App\Models\board;
use App\Http\Requests\StoreworkspaceRequest;
use App\Http\Requests\UpdateworkspaceRequest;
use Inertia\Inertia;

class WorkspaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workspaces = Workspace::all()->where(('workspace_user_id'), auth()->user()->id);
        $boards = array();
        foreach($workspaces as $workspace)
        {
            $boards = array_merge($boards, Board::all()->where(('board_workspace_id'), $workspace->workspace_id)->toArray());
        }

        return Inertia::render('Dashboard', [
            'workspaces' => $workspaces,
            'boards' => $boards 
        ]);
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
     * @param  \App\Http\Requests\StoreworkspaceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreworkspaceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\workspace  $workspace
     * @return \Illuminate\Http\Response
     */
    public function show(workspace $workspace)
    {
        return Inertia::render('Workspace', [

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\workspace  $workspace
     * @return \Illuminate\Http\Response
     */
    public function edit(workspace $workspace)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateworkspaceRequest  $request
     * @param  \App\Models\workspace  $workspace
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateworkspaceRequest $request, workspace $workspace)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\workspace  $workspace
     * @return \Illuminate\Http\Response
     */
    public function destroy(workspace $workspace)
    {
        //
    }
}
