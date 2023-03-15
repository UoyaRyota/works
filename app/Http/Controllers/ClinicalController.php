<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClinicalRequest;
use App\Models\Clinical;
use Auth;
class ClinicalController extends Controller
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

    public function index()
    {
        $clinicals = Clinical::all();
        $clinicals->load('user');
        return view('clinicals.index', compact('clinicals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clinicals.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClinicalRequest $request)
    {
        $input = $request->all();
        $input['user_id'] = Auth::id();
        Clinical::create($input);

        return redirect()->route('clinicals.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clinical = Clinical::find($id);
        $clinical->load('user', 'kartes'); 
        return view('clinicals.show', compact('clinical'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clinical = Clinical::find($id);
        return view('clinicals.edit', compact('clinical'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClinicalRequest $request, $id)
    {
        $clinical = Clinical::find($id);
        $clinical->update($request->all());
        return view('clinicals.show', compact('clinical'));
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
