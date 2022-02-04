<?php

namespace App\Http\Controllers;

use App\Models\workspace;
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
        return Inertia::render('Dashboard', [
            'workspaces' => Workspace::all()->where('workspace_user_id', auth()->user()->id)
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
        //
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
