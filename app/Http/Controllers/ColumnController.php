<?php

namespace App\Http\Controllers;

use App\Models\column;
use App\Http\Requests\StorecolumnRequest;
use App\Http\Requests\UpdatecolumnRequest;

class ColumnController extends Controller
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
     * @param  \App\Http\Requests\StorecolumnRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecolumnRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\column  $column
     * @return \Illuminate\Http\Response
     */
    public function show(column $column)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\column  $column
     * @return \Illuminate\Http\Response
     */
    public function edit(column $column)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecolumnRequest  $request
     * @param  \App\Models\column  $column
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecolumnRequest $request, column $column)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\column  $column
     * @return \Illuminate\Http\Response
     */
    public function destroy(column $column)
    {
        //
    }
}
