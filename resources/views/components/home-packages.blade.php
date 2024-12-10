<!-- Home packages section html start -->
<section class="package-section">
    <div class="container">
        <div class="section-heading text-center">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h5 class="dash-style">EXPLORE GREAT PLACES</h5>
                    <h2>POPULAR PACKAGES</h2>
                    <p>
                        Mollit voluptatem perspiciatis convallis elementum corporis
                        quo veritatis aliquid blandit, blandit torquent, odit
                        placeat. Adipiscing repudiandae eius cursus? Nostrum magnis
                        maxime curae placeat.
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
                                <a href="#">
                                    <img src="assets/images/img5.jpg" alt="" />
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
                                        <a href="#" class="button-text width-6">Book Now<i
                                                class="fas fa-arrow-right"></i></a>
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
<!-- packages html end -->
