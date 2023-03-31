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

        $Res = $karte;
        if ($Res) {
            $messageKey = 'successMessage';
            $flashMessage = '保存しました。';
        } else {
            $messageKey = 'errorMessage';
            $flashMessage = '保存に失敗しました。';
        }
        session()->flash($messageKey,$flashMessage);

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
        $karte = Karte::find($id);
        // $clinical = Clinical::find($id);
        // dd($clinical);
        return view('kartes.edit', compact('karte'));
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
        // $clinical = Clinical::find($request->clinical_id);
        
        // $clinical = $request->clinical_id;
        // dd($request);
        $karte -> karte_body = $request -> karte_body;
        $karte -> save();

        $Res = $karte;
        if ($Res) {
            $messageKey = 'successMessage';
            $flashMessage = '更新しました。';
        } else {
            $messageKey = 'errorMessage';
            $flashMessage = '更新に失敗しました。';
        }
        return redirect()->route('clinicals.index')->with($messageKey,$flashMessage);
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
