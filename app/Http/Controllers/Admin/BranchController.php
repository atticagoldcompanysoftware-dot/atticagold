<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BranchController extends Controller
{
    public function create()
    {
        $states = State::latest()->get();
        $cities = City::latest()->get();
        return view("admin.branch.create", compact('states', 'cities'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'area' => 'required',
            'state_id' => 'required',
            'city_id' => 'required',
            'pincode' => 'required',
            'map' => 'required',
            'time' => 'required',
            'day' => 'required',
        ], [
            'name.required' => 'Branch Name is Required',
            'address.required' => 'Branch Address is Required',
            'area.required' => 'Branch Area is Required',
            'state_id.required' => 'Please Select State',
            'city_id.required' => 'Please Select City',
            'pincode.required' => 'Branch Pincode is Required',
            'map.required' => 'Branch Map is Required',
            'time.required' => 'Branch Time is Required',
            'day.required' => 'Branch Day is Required',
        ]);

        Branch::insert([
            'name' => $request->name,
            'slug' => strtolower(str_replace(' ', '-', $request->name)),
            'address' => $request->address,
            'area' => $request->area,
            'state_id' => $request->state_id,
            'city_id' => $request->city_id,
            'pincode' => $request->pincode,
            'map' => $request->map,
            'time' => $request->time,
            'day' => $request->day,
            'created_at' => Carbon::now(),
        ]);

        $notification = [
            'message' => 'Branch Inserted Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('admin-branch-index')->with($notification);
    }

    public function index()
    {
        $datas = Branch::latest()->get();
        return view('admin.branch.index', compact('datas'));
    }



    public function edit($id)
    {
        $states = State::latest()->get();
        $cities = City::latest()->get();
        $data = Branch::findOrFail($id);
        return view('admin.branch.edit', compact('data', 'states', 'cities'));
    }



    public function update(Request $request)
    {
        $id = $request->id;

        Branch::findOrFail($id)->update([
            'name' => $request->name,
            'address' => $request->address,
            'area' => $request->area,
            'state_id' => $request->state_id,
            'city_id' => $request->city_id,
            'pincode' => $request->pincode,
            'map' => $request->map,
            'time' => $request->time,
            'day' => $request->day,
            'title' => $request->title,
            'keyword' => $request->keyword,
            'description' => $request->description,
            'updated_at' => Carbon::now()
        ]);


        $notification = [
            'message' => 'Branch Updated Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('admin-branch-index')->with($notification);
    }
}
