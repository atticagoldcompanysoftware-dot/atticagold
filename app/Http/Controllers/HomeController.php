<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $branches = Branch::query()
            ->with(['state:id,name', 'city:id,name'])
            ->latest('id')
            ->get()
            ->map(function (Branch $branch) {
                return [
                    'name' => (string) ($branch->name ?? ''),
                    'addr' => (string) ($branch->address ?? ''),
                    'area' => (string) ($branch->area ?? ''),
                    'city' => (string) optional($branch->city)->name,
                    'state' => (string) optional($branch->state)->name,
                ];
            })
            ->values();

        return view('welcome', compact('branches'));
    }
}
