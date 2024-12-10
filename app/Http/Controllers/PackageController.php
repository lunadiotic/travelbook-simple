<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function show($package)
    {
        $package = Package::findOrFail($package)->load([
            'batches' => function ($query) {
                $query->orderBy('start_date', 'desc');
            }
        ]);
        return view('package.show', ['package' => $package]);
    }

    public function search(Request $request)
    {

        $request->validate([
            'pax' => 'required|integer|min:1',
            'start_date' => 'required|date|after_or_equal:today',
            'end_date' => 'required|date|after_or_equal:start_date',
        ], [
            'start_date.after_or_equal' => 'The start date must be today or later.',
            'end_date.after_or_equal' => 'The end date must be the same as or later than the start date.',
        ]);

        $pax = $request->input('pax');
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        $packages = Package::whereHas('batches', function ($query) use ($startDate, $endDate, $pax) {
            $query->where('available', '>=', $pax)
                ->where('start_date', '>=', $startDate)
                ->where('end_date', '<=', $endDate);
        })->with(['batches' => function ($query) use ($startDate, $endDate, $pax) {
            $query->where('available', '>=', $pax)
                ->where('start_date', '>=', $startDate)
                ->where('end_date', '<=', $endDate);
        }])->get();

        return view('package.index', ['packages' => $packages]);
    }
}
