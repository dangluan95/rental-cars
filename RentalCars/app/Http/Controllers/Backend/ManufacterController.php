<?php

namespace App\Http\Controllers\Backend;

use App\Models\Manufacter;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManufacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manufacters = Manufacter::all();
        return view('admin.manufacter.index',compact('manufacters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.manufacter.create');
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
            'name' => 'required|unique:manufacters',
        ]);

        $slug = str_slug($request->name);

        $manufacter = new Manufacter();
        $manufacter->name = $request->name;
        $manufacter->slug = $slug;
        $manufacter->save();
        Toastr::success('Manufacter Successfully Created' ,'Success');
        return redirect()->route('admin.manufacter.index');
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
        $manufacter = Manufacter::find($id);
        return view('admin.manufacter.edit',compact('manufacter'));
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
            'name' => 'required|unique:manufacters'
        ]);
        $manufacter = Manufacter::find($id);
        $manufacter->name = $request->name;
        $manufacter->slug = str_slug($request->name);
        $manufacter->save();
        Toastr::success('Manufacter Successfully Updated','Success');
        return redirect()->route('admin.manufacter.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $manufacter = Manufacter::find($id);
        $manufacter->delete();
        return redirect()->back();
    }
}
