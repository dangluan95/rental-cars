<?php

namespace App\Http\Controllers\Backend;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\Controller;
use App\Models\Manufacter;
use App\Models\Seat;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        return view('admin.car.index',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $manufacters = Manufacter::all();
        $number_of_seats = Seat::all();
        return view('admin.car.create',compact('manufacters','number_of_seats'));
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
            'manufacter' => 'required',
            'name' => 'required',
            'seat' => 'required',
            'price' => 'required',
            'image' => 'required',
            'description' => 'required'
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->name);
        if(isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imageName  = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            
            if(!Storage::disk('public')->exists('car'))
            {
                Storage::disk('public')->makeDirectory('car');
            }
            
            $carImage = Image::make($image)->resize(400,238)->save('my-image.jpg', 90);
            Storage::disk('public')->put('car/'.$imageName,$carImage);
            
        } else {
            $imageName = "default.png";
        }
        $car = new Car();
        $car->manufacter_id = $request->manufacter;
        $car->number_of_seat_id = $request->seat;
        $car->name = $request->name;
        $car->price = $request->price;
        $car->slug = $slug;
        $car->image = $imageName;
        $car->description = $request->description;
        $car->save();
        
        Toastr::success('Car Successfully Created','Success');
        return redirect()->route('admin.car.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        $manufacters = Manufacter::all();
        $number_of_seats = Seat::all();
        return view('admin.car.edit',compact('car','manufacters','number_of_seats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        $this->validate($request,[
            'manufacter' => 'required',
            'name' => 'required',
            'seat' => 'required',
            'price' => 'required',
            'image' => 'image',
            'description' => 'required'
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->name);
        if(isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imageName  = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('car'))
            {
                Storage::disk('public')->makeDirectory('car');
            }

            if(Storage::disk('public')->exists('car/'.$car->image))
            {
                Storage::disk('public')->delete('car/'.$car->image);
            }
            $carImage = Image::make($image)->resize(400,238)->save('my-image.jpg', 90);
            Storage::disk('public')->put('car/'.$imageName,$carImage);

        } else {
            $imageName = $car->image;
        }

        $car->manufacter_id = $request->manufacter;
        $car->number_of_seat_id = $request->seat;
        $car->name = $request->name;
        $car->price = $request->price;
        $car->slug = $slug;
        $car->image = $imageName;
        $car->description = $request->description;
        $car->save();

        Toastr::success('Car Successfully Updated','Success');
        return redirect()->route('admin.car.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        if (Storage::disk('public')->exists('car/'.$car->image))
        {
            Storage::disk('public')->delete('car/'.$car->image);
        }
        $car->delete();
        return redirect()->back();
    }
}
