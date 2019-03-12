<?php

namespace App\Http\Controllers\Backend;

use App\Models\Seat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class SeatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seats = Seat::all();
        return view('admin.seat.index',compact('seats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.seat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'number_of_seats' => 'required|unique:seats',
        ]);

        $seat = new Seat();
        $seat->number_of_seats = $request->number_of_seats;
        $seat->save();
        Toastr::success('Number Of Seats Successfully Created' ,'Success');
        return redirect()->route('admin.seat.index');
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
        $seat = Seat::find($id);
        return view('admin.seat.edit',compact('seat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'number_of_seats' => 'required|unique:seats'
        ]);
        $seat = Seat::find($id);
        $seat->number_of_seats = $request->number_of_seats;
        $seat->save();
        Toastr::success('Number Of Seats Successfully Updated','Success');
        return redirect()->route('admin.seat.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $seat = Seat::find($id);
        $seat->delete();
        return redirect()->back();
    }
}
