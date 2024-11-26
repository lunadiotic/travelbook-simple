<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function show($id)
    {
        $package = Package::findOrFail($id)->load([
            'batches' => function ($query) {
                $query->orderBy('start_date', 'desc');
            }
        ]);
        // return $package = Package::findOrFail($id)->load([
        //     'batches' => function ($query) {
        //         $query->with(['bookings' => function ($bookingQuery) {
        //             $bookingQuery->selectRaw('batch_id, SUM(pax) as total_pax')->where('status', 'confirmed')->groupBy('batch_id');
        //         }]);
        //     }
        // ]);
        return view('package', ['package' => $package]);
    }
}