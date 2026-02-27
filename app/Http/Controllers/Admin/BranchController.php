<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function create()
    {
        $states = State::latest()->get();
        $cities = City::latest()->get();
        return view("admin.branch.create", compact('states', 'cities'));
    }
}
