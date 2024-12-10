@extends('layouts.app')

@section('content')
    <section class="inner-banner-wrap">
        <div class="inner-baner-container" style="background-image: url(assets/images/inner-banner.jpg)">
            <div class="container">
                <div class="inner-banner-content">
                    <h1 class="inner-title">Package Detail</h1>
                </div>
            </div>
        </div>
        <div class="inner-shape"></div>
    </section>
    <!-- Inner Banner html end-->
    <div class="single-tour-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-tour-inner">
                        <h2>{{ $package->name }}</h2>
                        <figure class="feature-image">
                            <img src="/assets/images/img27.jpg" alt="" />
                            <div class="package-meta text-center">
                                <ul>
                                    <li>
                                        <i class="far fa-clock"></i>
                                        {{ $package->days }} days / {{ $package->nights }} night
                                    </li>
                                    <li>
                                        <i class="fas fa-user-friends"></i>
                                        People: {{ $package->latestBatch->quota }}
                                    </li>
                                </ul>
                            </div>
                        </figure>
                        <div class="tab-container">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview"
                                        role="tab" aria-controls="overview" aria-selected="true">DESCRIPTION</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="batch-tab" data-toggle="tab" href="#batch" role="tab"
                                        aria-controls="batch" aria-selected="false">BATCH</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="overview" role="tabpanel"
                                    aria-labelledby="overview-tab">
                                    <div class="overview-content">
                                        <p>
                                            {{ $package->description }}
                                        </p>
                                    </div>
                                </div>
                                <div class="tab-pane" id="batch" role="tabpanel" aria-labelledby="batch-tab">
                                    <div class="itinerary-content">
                                        <h3>Batch</h3>
                                        <p>
                                            Here will display a list of available batches
                                            according to date.
                                        </p>
                                        <!-- accordion descending -->
                                        <div class="accordion" id="accordionExample">
                                            @foreach ($package->batches as $batch)
                                                <div class="card">
                                                    <div class="card-header" id="heading-{{ $loop->iteration }}">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link" type="button"
                                                                data-toggle="collapse"
                                                                data-target="#collapse-{{ $loop->iteration }}"
                                                                aria-expanded="true"
                                                                aria-controls="collapse-{{ $loop->iteration }}">
                                                                Batch {{ $loop->count - $loop->iteration + 1 }} |
                                                                {{ $batch->start_date->format('d M Y') }} -
                                                                {{ $batch->end_date->format('d M Y') }}
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapse-{{ $loop->iteration }}"
                                                        class="collapse {{ $loop->first ? 'show' : '' }}"
                                                        aria-labelledby="headingOne" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            <p>
                                                                Price: Rp{{ number_format($batch->price, 0, ',', '.') }}
                                                            </p>
                                                            <p>
                                                                Available Quota:
                                                                {{ $batch->quota - $batch->available }}/{{ $batch->quota }}
                                                                people
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="package-price">
                            <h5 class="price">
                                <span>Rp{{ number_format($package->latestBatch->price, 0, ',', '.') }}</span> / per person
                            </h5>
                        </div>
                        <div class="widget-bg booking-form-wrap">
                            <h4 class="bg-title">Booking</h4>
                            <form class="booking-form" action="{{ route('booking.store') }}" method="POST">
                                @csrf
                                <div class="row">

                                    <div class="col-sm-12">
                                        @if (session('error'))
                                            <div class="alert alert-danger">
                                                {{ session('error') }}
                                            </div>
                                        @endif
                                        @if (session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input name="name" type="text" placeholder="Full Name" />
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input name="email" type="text" placeholder="Email" />
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="number" name="pax" id="" placeholder="Pax" />
                                            @error('pax')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <select name="batch_id" id="">
                                                @foreach ($package->batches as $batch)
                                                    <option value="{{ $batch->id }}">
                                                        Batch {{ $loop->count - $loop->iteration + 1 }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('batch_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group submit-btn">
                                            <button type="submit" class="button-primary">Booking</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="widget-bg information-content text-center">
                            <h5>TRAVEL TIPS</h5>
                            <h3>NEED TRAVEL RELATED TIPS & INFORMATION</h3>
                            <p>
                                Mollit voluptatem perspiciatis convallis elementum
                                corporis quo veritatis aliquid blandit, blandit torquent,
                                odit placeat.
                            </p>
                            <a href="#" class="button-primary">GET A QUOTE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
