@extends('layouts.app')

@section('content')
    <!-- Inner Banner html start-->
    <section class="inner-banner-wrap">
        <div class="inner-baner-container" style="background-image: url(assets/images/inner-banner.jpg)">
            <div class="container">
                <div class="inner-banner-content">
                    <h1 class="inner-title">Packages</h1>
                </div>
            </div>
        </div>
        <div class="inner-shape"></div>
    </section>
    <!-- Inner Banner html end-->
    <div class="package-section">
        <div class="container">
            <div class="package-inner">
                <div class="row">
                    @foreach ($packages as $package)
                        <div class="col-lg-4 col-md-6">
                            <div class="package-wrap">
                                <figure class="feature-image">
                                    <a href="{{ route('package.show', $package->id) }}">
                                        <img src="/assets/images/img5.jpg" alt="" />
                                    </a>
                                </figure>
                                <div class="package-price">
                                    <h6><span>Rp{{ number_format($package->latestBatch->price, 0, ',', '.') }} </span> /
                                        per person</h6>
                                </div>
                                <div class="package-content-wrap">
                                    <div class="package-meta text-center">
                                        <ul>
                                            <li>
                                                <i class="far fa-clock"></i>
                                                {{ $package->days }}D/{{ $package->nights }}N
                                            </li>
                                            <li>
                                                <i class="fas fa-user-friends"></i>
                                                People: {{ $package->latestBatch->quota }}
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="package-content">
                                        <h3>
                                            <a href="#">{{ $package->name }}</a>
                                        </h3>
                                        <p>
                                            {{ $package->description }}
                                        </p>
                                        <div class="btn-wrap">
                                            <a href="{{ route('package.show', $package->id) }}"
                                                class="button-text width-6">Book
                                                Now<i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
