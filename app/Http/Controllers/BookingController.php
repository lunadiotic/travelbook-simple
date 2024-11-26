<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Booking;
use App\Models\Package;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'pax' => 'required',
            'batch_id' => 'required',
        ]);

        $batch = Batch::findOrFail($request->batch_id);

        $data = [
            'email' => $request->email,
            'batch_id' => $request->batch_id,
            'pax' => $request->pax,
            'total_price' => $request->pax * $batch->package->price,
            'status' => 'pending',
        ];

        // check if selected batch start date is not less than today
        $batchStartDate = new \DateTime($batch->start_date);
        if ($batchStartDate < new \DateTime()) {
            return redirect()->back()->with('error', 'Selected batch start date is not valid.');
        }

        // check if selected batch is full
        if ($request->pax > $batch->quota_available) {
            return redirect()->back()->with('error', 'Selected batch is full.');
        }

        Booking::create($data);

        $batch->decrement('quota_available', $request->pax);
        $batch->save();

        return redirect()->back()->with('success', 'Booking successful.');
    }
}
