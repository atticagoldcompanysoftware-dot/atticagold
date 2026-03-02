<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\State;
use Illuminate\Http\Request;
use Carbon\Carbon;

class StateController extends Controller
{
    public function create()
    {
        return view("admin.state.create");
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ], [
            'name.required' => 'State Name is Required',
        ]);

        State::insert([
            'name' => $request->name,
            'created_at' => Carbon::now(),
        ]);

        $notification = [
            'message' => 'State Inserted Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('admin-state-create')->with($notification);
    }
}
