<?php

namespace App\Http\Controllers;

use App\Models\Achieve;
use App\Http\Requests\StoreAchieveRequest;
use App\Http\Requests\UpdateAchieveRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AchieveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $type = $request->input('voice1_btn_input');
        if(!$type){
            $achieve = Achieve::all();
        } else{
            $achieve = Achieve::where('type', $type)->get();
            // dd($achieve);
        }
        return view('pages.clients_voice1', compact('achieve'));
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
     * @param  \App\Http\Requests\StoreAchieveRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAchieveRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Achieve  $achieve
     * @return \Illuminate\Http\Response
     */
    public function show(Achieve $achieve)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Achieve  $achieve
     * @return \Illuminate\Http\Response
     */
    public function edit(Achieve $achieve)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAchieveRequest  $request
     * @param  \App\Models\Achieve  $achieve
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAchieveRequest $request, Achieve $achieve)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Achieve  $achieve
     * @return \Illuminate\Http\Response
     */
    public function destroy(Achieve $achieve)
    {
        //
    }
}
