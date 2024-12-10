@extends('layouts.app')


@section('content')
    <!-- Inner Banner html start-->
    <section class="inner-banner-wrap">
        <div class="inner-baner-container" style="background-image: url(assets/images/inner-banner.jpg)">
            <div class="container">
                <div class="inner-banner-content">
                    <h1 class="inner-title">Login</h1>
                </div>
            </div>
        </div>
        <div class="inner-shape"></div>
    </section>
    <!-- Inner Banner html end-->
    <div class="checkout-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="checkout-field-wrap">
                        <h3>Put your email to check your booking</h3>
                        <form action="{{ route('booking.check') }}" method="POST">
                            <div class="row">
                                @csrf
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" />
                                    </div>
                                </div>
                                <!-- create login button on the right -->

                                <div class="col-sm-12 text-right">
                                    <button class="button-primary" type="submit">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
