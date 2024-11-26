@extends('app')

@section('content')
<x-banner :title="'Booking List'" />
<div class="checkout-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="checkout-field-wrap">
                    <h3>Your booking list</h3>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Booking ID</th>
                                        <th scope="col">Package</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bookings as $booking)
                                    <tr>
                                        <td scope="row">{{ $loop->iteration }}</td>
                                        <td>{{ $booking->id }}</td>
                                        <td>{{ $booking->batch->package->name }}</td>
                                        <td>
                                            {{ $booking->batch->start_date->format('d M Y') }} - {{
                                            $booking->batch->end_date->format('d M Y') }}
                                        </td>
                                        <td>
                                            <span class="badge badge-pill badge-success">
                                                {{ $booking->status }}
                                            </span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@overwrite