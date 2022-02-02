<?php

namespace App\Http\Controllers;

use App\Models\user_board;
use App\Http\Requests\Storeuser_boardRequest;
use App\Http\Requests\Updateuser_boardRequest;

class UserBoardController extends Controller
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
     * @param  \App\Http\Requests\Storeuser_boardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeuser_boardRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user_board  $user_board
     * @return \Illuminate\Http\Response
     */
    public function show(user_board $user_board)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user_board  $user_board
     * @return \Illuminate\Http\Response
     */
    public function edit(user_board $user_board)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateuser_boardRequest  $request
     * @param  \App\Models\user_board  $user_board
     * @return \Illuminate\Http\Response
     */
    public function update(Updateuser_boardRequest $request, user_board $user_board)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user_board  $user_board
     * @return \Illuminate\Http\Response
     */
    public function destroy(user_board $user_board)
    {
        //
    }
}
