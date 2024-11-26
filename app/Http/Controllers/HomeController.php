<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $packages = Package::inRandomOrder()->with('latestBatch')->limit(6)->get();
        return view('home', ['packages' => $packages]);
    }

    public function availablePackages(Request $request)
    {
        $request->validate([
            'pax' => 'required|integer|min:1',
            'start_date' => 'required|date|after_or_equal:today', // Validasi start_date tidak lebih lampau dari hari ini
            'end_date' => 'required|date|after_or_equal:start_date',
        ], [
            'start_date.after_or_equal' => 'The start date must be today or later.',
            'end_date.after_or_equal' => 'The end date must be the same as or later than the start date.',
        ]);

        $pax = $request->input('pax');
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        $request->all();

        // Query untuk mendapatkan data package berdasarkan batches
        $packages = Package::whereHas('batches', function ($query) use ($pax, $startDate, $endDate) {
            $query->where('available', '>=', $pax) // Kuota cukup
                ->where('start_date', '>=', $startDate) // Mulai setelah atau sama dengan start_date
                ->where('end_date', '<=', $endDate); // Berakhir sebelum atau sama dengan end_date
        })
            ->with(['batches' => function ($query) use ($pax, $startDate, $endDate) {
                $query->where('available', '>=', $pax)
                    ->where('start_date', '>=', $startDate)
                    ->where('end_date', '<=', $endDate);
            }])
            ->get();

        return view('packages', compact('packages'));
    }
}
