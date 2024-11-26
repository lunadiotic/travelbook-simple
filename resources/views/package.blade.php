@extends('app')

@section('content')
<x-banner />
<div class="single-tour-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="single-tour-inner">
                    <h2>{{ $package->name }}</h2>
                    <figure class="feature-image">
                        <img src="{{ asset('assets/images/img27.jpg') }}" alt="" />
                        <div class="text-center package-meta">
                            <ul>
                                <li>
                                    <i class="far fa-clock"></i>
                                    {{ $package->days }} days / {{ $package->nights }} night
                                </li>
                                <li>
                                    <i class="fas fa-user-friends"></i>
                                    People: {{ $package->max_people }}
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
                                        {!! $package->description !!}
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
                                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse-{{ $loop->iteration }}"
                                                        aria-expanded="false"
                                                        aria-controls="collapse-{{ $loop->iteration }}">
                                                        Batch {{ $loop->count - $loop->iteration + 1 }} | {{
                                                        $batch->start_date->format('d M Y') }} - {{
                                                        $batch->end_date->format('d M Y') }}
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapse-{{ $loop->iteration }}"
                                                class="collapse {{ $loop->first ? 'show' : '' }}"
                                                aria-labelledby="heading-{{ $loop->iteration }}"
                                                data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <p>
                                                        Available Quota: {{ ( $package->max_people -
                                                        $batch->quota_available) }}/{{ $package->max_people }} people
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
                            <span>Rp{{ number_format($package->price, 0, ',', '.') }}</span> / person
                        </h5>
                    </div>
                    <div class="widget-bg booking-form-wrap">
                        <h4 class="bg-title">Booking</h4>
                        <form class="booking-form" method="POST" action="{{ route('booking.store') }}">
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
                                        <input type="text" name="full_name" placeholder="Full Name" />
                                        @error('full_name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email" />
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="number" name="pax" id="" placeholder="Pax" value="1" />
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
                                                Batch {{ $loop->count - $loop->iteration +1 }}
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
                    <div class="text-center widget-bg information-content">
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
@overwrite