<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
                    'slug' => (string) ($branch->slug ?: Str::slug((string) ($branch->name ?? ''))),
                    'addr' => (string) ($branch->address ?? ''),
                    'area' => (string) ($branch->area ?? ''),
                    'city' => (string) optional($branch->city)->name,
                    'state' => (string) optional($branch->state)->name,
                ];
            })
            ->values();

        return view('welcome', compact('branches'));
    }

    public function branchDetail($slug)
    {
        $branch = Branch::query()
            ->with(['state:id,name', 'city:id,name'])
            ->where('slug', $slug)
            ->first();

        if (!$branch) {
            $branch = Branch::query()
                ->with(['state:id,name', 'city:id,name'])
                ->get()
                ->first(function (Branch $branch) use ($slug) {
                    return Str::slug((string) ($branch->name ?? '')) === $slug;
                });
        }

        abort_if(!$branch, 404);

        return view('branch-detail', compact('branch'));
    }
}
