<?php

namespace App\Http\Controllers;

use App\Models\user_workspace;
use App\Http\Requests\Storeuser_workspaceRequest;
use App\Http\Requests\Updateuser_workspaceRequest;

class UserWorkspaceController extends Controller
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
     * @param  \App\Http\Requests\Storeuser_workspaceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeuser_workspaceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user_workspace  $user_workspace
     * @return \Illuminate\Http\Response
     */
    public function show(user_workspace $user_workspace)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user_workspace  $user_workspace
     * @return \Illuminate\Http\Response
     */
    public function edit(user_workspace $user_workspace)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateuser_workspaceRequest  $request
     * @param  \App\Models\user_workspace  $user_workspace
     * @return \Illuminate\Http\Response
     */
    public function update(Updateuser_workspaceRequest $request, user_workspace $user_workspace)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user_workspace  $user_workspace
     * @return \Illuminate\Http\Response
     */
    public function destroy(user_workspace $user_workspace)
    {
        //
    }
}
