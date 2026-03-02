<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\State;
use App\Models\City;
use Carbon\Carbon;

class CityController extends Controller
{
    public function create()
    {
        $states = State::latest()->get();
        return view("admin.city.create", compact('states'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'state_id' => 'required',
            'name' => 'required',
        ], [
            'state_id.required' => 'Please Select State',
            'name.required' => 'City Name is Required',
        ]);

        City::insert([

            'name' => $request->name,
            'state_id' => $request->state_id,
            'created_at' => Carbon::now(),
        ]);

        $notification = [
            'message' => 'City Inserted Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('admin-city-create')->with($notification);
    }
}
