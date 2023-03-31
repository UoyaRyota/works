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

        $Res = $input;
        if ($Res) {
            $messageKey = 'successMessage';
            $flashMessage = '保存しました。';
        } else {
            $messageKey = 'errorMessage';
            $flashMessage = '保存に失敗しました。';
        }

        return redirect()->route('reservations.index')->with($messageKey,$flashMessage);
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

        $Res = $reservation;
        if ($Res) {
            $messageKey = 'successMessage';
            $flashMessage = '更新しました。';
        } else {
            $messageKey = 'errorMessage';
            $flashMessage = '更新に失敗しました。';
        }
        session()->flash($messageKey,$flashMessage);
        
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

        $Res = $reservation;
        if ($Res) {
            $messageKey = 'successMessage';
            $flashMessage = '削除しました。';
        } else {
            $messageKey = 'errorMessage';
            $flashMessage = '削除に失敗しました。';
        }

        return redirect()->route('reservations.index')->with($messageKey,$flashMessage);
    }

    public function search(Request $request) {
        $reservations = Reservation::where('user_name', 'like', "%{$request->search}%")->paginate(5);

        return view('reservations.index', compact('reservations'));

    }
}
