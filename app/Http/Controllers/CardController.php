<?php

namespace App\Http\Controllers;

use App\Models\card;
use App\Models\column;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\StorecardRequest;
use App\Http\Requests\UpdatecardRequest;
use Illuminate\Support\Facades\Log;

class CardController extends Controller
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
     * @param  \App\Http\Requests\StorecardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCardRequest $request)
    {
        $newCard = new Card;
        $newCard->card_name = $request->input('cardName');
        $newCard->column()->associate(Column::find($request->input('columnId')));
        // $newCard->card_name = Request::get('cardName');
        // $newCard->column()->associate(Column::find(Request::get('columnId')));
        $newCard->save();

        return Redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\card  $card
     * @return \Illuminate\Http\Response
     */
    public function show(card $card)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\card  $card
     * @return \Illuminate\Http\Response
     */
    public function edit(card $card)
    {
        
    }

    public function archive(UpdatecardRequest $request, card $card)
    {
        Card::where('card_id', $card->card_id)->update(['card_is_archived' => 1]);

        return Redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecardRequest  $request
     * @param  \App\Models\card  $card
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecardRequest $request, card $card)
    {
        $card->update(['card_name' => $request->input('cardName'),
         'card_description' => $request->input('cardDescription')]);

        return Redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\card  $card
     * @return \Illuminate\Http\Response
     */
    public function destroy(card $card)
    {
        //
    }
}
