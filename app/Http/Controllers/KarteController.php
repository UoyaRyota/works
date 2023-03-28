<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\KarteRequest;
use App\Models\Karte;
use App\Models\Clinical;
use Auth;

class KarteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kartes.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KarteRequest $request)
    {
        // dd($request);
        $clinical = Clinical::find($request->clinical_id);
        $karte = new Karte;
        $karte -> karte_body = $request -> karte_body;
        $karte -> user_id = Auth::id();
        $karte -> clinical_id = $request -> clinical_id;
        $karte -> save();
        return view('clinicals.show', compact('clinical')); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        dd($id);
        $karte = Karte::find($id);
        $clinical = Clinical::find($id);
        return view('kartes.edit', compact('karte','clinical'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(KarteRequest $request, $id)
    {

        $karte = Karte::find($id);
        $clinical = Clinical::find($request->clinical_id);
        
        // $clinical = $request->clinical_id;
        dd($request);
        $karte -> karte_body = $request -> karte_body;
        $karte -> save();
        return redirect()->route('clinicals.show',[$clinical]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
