<section class="package-section">
    <div class="container">
        <div class="text-center section-heading">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h5 class="dash-style">EXPLORE GREAT PLACES</h5>
                    <h2>POPULAR PACKAGES</h2>
                    <p>
                        Uncover the beauty of the world one destination at a time! With Explore Great
                        Places, every journey becomes an unforgettable adventure. From breathtaking
                        landscapes to hidden gems, let your wanderlust guide you to experiences that
                        inspire, excite, and leave you in awe. The world is calling—are you ready to answer?
                    </p>
                </div>
            </div>
        </div>
        <div class="package-inner">
            <div class="row">
                @foreach ($packages as $package)
                <div class="col-lg-4 col-md-6">
                    <div class="package-wrap">
                        <figure class="feature-image">
                            <a href="{{ route('packages.show', $package->id) }}">
                                <img src="{{ asset('assets/images/img5.jpg') }}" alt="" />
                            </a>
                        </figure>
                        <div class="package-price">
                            <h6><span>Rp{{ number_format($package->price, 0, ',', '.') }} </span> / per
                                person</h6>
                        </div>
                        <div class="package-content-wrap">
                            <div class="text-center package-meta">
                                <ul>
                                    <li>
                                        <i class="far fa-clock"></i>
                                        {{ $package->days }}D/{{ $package->nights }}N
                                    </li>
                                    <li>
                                        <i class="fas fa-user-friends"></i>
                                        People: {{ $package->max_people }}
                                    </li>
                                </ul>
                            </div>
                            <div class="package-content">
                                <h3>
                                    <a href="{{ route('packages.show', $package->id) }}">{{ $package->name }}</a>
                                </h3>
                                <p>{{ $package->description }}</p>
                                <div class="btn-wrap">
                                    <a href="{{ route('packages.show', $package->id) }}"
                                        class="button-text width-6">Book Now<i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>