<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ReservationRequest;
use Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::all();
        return view('reservations.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clinicals = DB::select('select * from clinicals');
        $data = ['title' => 'メンバーリスト', 'clinicals' => $clinicals];
        return view('reservations.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReservationRequest $request)
    {
        $input = $request->all();
        $input['user_id'] = Auth::id();
        Reservation::create($input);

        return redirect()->route('reservations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reservation = Reservation::find($id);
        return view('reservations.show', compact('reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $reservation = Reservation::find($id);
        $clinicals = DB::select('select * from clinicals');
        // dd($clinicals);

        return view('reservations.edit', compact('reservation','clinicals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReservationRequest $request, $id)
    {
        $reservation = Reservation::find($id);
        $reservation->update($request->all());
        
        return view('reservations.show', compact('reservation'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservation = Reservation::find($id);

        if(Auth::id() !== $reservation->user_id){
            return abort(404);
        }

        $reservation -> delete();
        return redirect()->route('reservations.index');
    }

    public function search(Request $request) {
        $reservations = Reservation::where('user_name', 'like', "%{$request->search}%")->paginate(5);

        return view('reservations.index', compact('reservations'));

    }
}
