<!-- Home search field html start -->
<div class="trip-search-section shape-search-section">
    <div class="slider-shape"></div>
    <div class="container">
        <form action="{{ route('package.search') }}" method="POST">
            @csrf
            <div class="trip-search-inner white-bg d-flex justify-content-center">
                <div class="input-group">
                    <label> Pax Number* </label>
                    <input type="text" name="pax" placeholder="No.of People" value="1" />
                </div>
                <div class="input-group">
                    <label> Checkin Date* </label>
                    <input type="date" name="start_date" placeholder="DD / MM / YY" autocomplete="off"
                        value="{{ date('Y-m-d') }}" />
                </div>
                <div class="input-group">
                    <label> Checkout Date* </label>
                    <input type="date" name="end_date" placeholder="DD / MM / YY" autocomplete="off"
                        value="{{ date('Y-m-d') }}" />
                </div>
                <div class="input-group">
                    <label class="screen-reader-text"> Search </label>
                    <input type="submit" name="travel-search" value="SEARCH" />
                </div>
                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-danger">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </form>
    </div>
</div>
<!-- search search field html end -->
