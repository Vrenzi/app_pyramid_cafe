@extends('layouts.pyramid')

@section('container')
<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(images/hero_1.jpeg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="display-t js-fullheight">
                    <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
                        <h1>See <em>Our</em> Menu</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div id="fh5co-featured-menu" class="fh5co-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 fh5co-heading animate-box">
                <h2>Our Delicious Menu</h2>
                <div class="row">
                    <div class="col-md-6">
                        <p>Kalau hati sudah bertaut, cintapun tak akan pergi menjauh. Kalau perut sudah kriuk kriuk, ya mampirlah sini makan jangan cuma ngiler sambil ngeliatin iklan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br>
<div class="container">
    <div class="row">
        <section id="food" class="col-md-4">
            <div class="col-md-12 fh5co-heading text-center animate-box">
                <h1>Makanan</h1>
            </div>
            <div class="row">
                @foreach ($foods as $item)
                <section class="col-md-6 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap">
                    <div class="fh5co-item animate-box">
                        <img style="cursor: pointer" src="{{ asset('storage/images/' . $item->picture) }}" class="img-responsive" alt="{{ $item->name }}">
                        <h3>{{ $item->name }}</h3>
                        <span class="fh5co-price">{{ $item->price }}</span>
                    </div>
                </section>
                @endforeach
            </div>
        </section>
    </div>
</div>
<br><br><br>       
<div class="container">
     <div class="row">
        <section id="drink" class="col-md-4">
            <div class="col-md-12 fh5co-heading text-center animate-box">
                <h1>Minuman</h1>
            </div>
            <div class="row">
                @foreach ($drinks as $item)
                <section class="col-md-6 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap">
                    <div class="fh5co-item animate-box">
                        <img style="cursor: pointer" src="{{ asset('storage/images/' . $item->picture) }}" class="img-responsive" alt="{{ $item->name }}">
                        <h3>{{ $item->name }}</h3>
                        <span class="fh5co-price">{{ $item->price }}</span>
                    </div>
                </section>
                @endforeach
            </div>
        </section>
     </div>
</div>
<br><br><br>
<div class="container">
    <div class="row">
        <section id="dessert" class="col-md-4">
            <div class="col-md-12 fh5co-heading text-center animate-box">
                <h1>Dessert</h1>
            </div>
            <br>
            <div class="row">
                @foreach ($desserts as $item)
                <div class="col-md-6 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap">
                    <div class="fh5co-item animate-box">
                        <img style="cursor: pointer" src="{{ asset('storage/images/' . $item->picture) }}" class="img-responsive" alt="{{ $item->name }}">
                        <h3>{{ $item->name }}</h3>
                        <span class="fh5co-price">{{ $item->price }}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </div>
</div>
@endsection
