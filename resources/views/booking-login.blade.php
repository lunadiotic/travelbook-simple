@extends('app')

@section('content')
<x-banner :title="'login'" />
<div class="checkout-section">
    <div class="container">
        <div class="row">
            <div class="mx-auto col-md-6">
                <div class="checkout-field-wrap">
                    <h3>Put your email to check your booking</h3>
                    <form action="{{ route('booking.check') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" />
                                </div>
                            </div>
                            <!-- create login button on the right -->

                            <div class="text-right col-sm-12">
                                <button type="submit" class="button-primary">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@overwrite