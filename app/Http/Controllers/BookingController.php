<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'pax' => 'required|numeric',
            'batch_id' => 'required|exists:batches,id'
        ]);

        $batch = Batch::findOrFail($request->batch_id);

        $data = [
            'code' => Str::uuid(),
            'name' => $request->name,
            'email' => $request->email,
            'pax' => $request->pax,
            'batch_id' => $batch->id,
            'total_price' => $batch->price * $request->pax,
            'status' => 'pending'
        ];

        // check if selected batch start date is not less than today
        $batchStartDate = new \DateTime($batch->start_date);
        if ($batchStartDate < new \DateTime()) {
            return redirect()->back()->with('error', 'Selected batch start date is not valid.');
        }

        // check if selected batch is full
        if ($request->pax > $batch->available) {
            return redirect()->back()->with('error', 'Selected batch is full.');
        }

        Booking::create($data);

        $batch->decrement('available', $request->pax);
        $batch->save();

        return redirect()->back()->with('success', 'Booking successful.');
    }

    public function check(Request $request)
    {
        $bookings = Booking::where('email', $request->email)->get();
        return view('booking.check', ['bookings' => $bookings]);
    }
}
