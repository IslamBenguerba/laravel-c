@php
    $comics = config('comics');
@endphp

@extends('welcome')

@section('cont')
    {{-- jumbo --}}
    <div class="container-jumbo">
        <img src="{{ asset('images/jumbotron.jpg') }}" alt="">
    </div>
    <div class="container d-flex flex-column" style="position: relative">
        <div class="current-siries">
            <a href="">CURRENT SERIES</a>
        </div>
        @dump($comics)
        <div class="series-box">
            @foreach ($comics as $fumetto)
                <div class="card" {{-- style="width: 18rem;" --}}>
                    <img class="card-img-top" src={{ $fumetto['thumb'] }} alt="">
                    <div class="card-title">
                        {{ $fumetto['series'] }}
                    </div>
                </div>
            @endforeach
        </div>
        <button class="btn-load align-self-center">Load morore</button>
    </div>
    <div class="container-fluid section-info">
        <div class="container d-flex"style="column-gap: 70px">
            <div class="card-info">
                <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="">
                <h4>DIGITAL COMICS</h4>
            </div>
            <div class="card-info">
                <img src="{{ asset('images/buy-comics-merchandise.png') }}" alt="">
                <h4>DIGITAL COMICS</h4>
            </div>
            <div class="card-info">
                <img src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="">
                <h4>DIGITAL COMICS</h4>
            </div>
            <div class="card-info">
                <img src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="">
                <h4>DIGITAL COMICS</h4>
            </div>
            <div class="card-info">
                <img src="{{ asset('images/buy-dc-power-visa.svg') }}" alt="">
                <h4>DIGITAL COMICS</h4>
            </div>
        </div>

    </div>

    <footer>
        <div class="container contact-footer">
            <div class="mega-card-contact-footer d-flex">
                <div class="card-contact d-flex flex-column">
                    <ul class="d-flex flex-column">
                        <li>
                            <h4 style="color: white">DC COMICS</h4>
                        </li>
                        <li><a class="link-footer" href="">Characters</a></li>
                        <li><a class="link-footer" href="">Comics</a></li>
                        <li><a class="link-footer" href="">Movies</a></li>
                        <li><a class="link-footer" href="">TV</a></li>
                        <li><a class="link-footer" href="">Games</a></li>
                        <li><a class="link-footer" href="">Videos</a></li>
                        <li><a class="link-footer" href="">News</a></li>
                    </ul>
                    <ul class="d-flex flex-column">
                        <li>
                            <h4 style="color: white">SHOP</h4>
                        </li>
                        <li><a class="link-footer" href="">Characters</a></li>
                        <li><a class="link-footer" href="">Comics</a></li>
                    </ul>
                </div>
                <div class="card-contact d-flex flex-column">
                    <ul class="d-flex flex-column">
                        <li>
                            <h4 style="color: white">DC</h4>
                        </li>
                        <li><a class="link-footer" href="">Terms Of Use</a></li>
                        <li><a class="link-footer" href="">Privacy policy new </a></li>
                        <li><a class="link-footer" href="">Movies Ad Choices</a></li>
                        <li><a class="link-footer" href="">Advertising</a></li>
                        <li><a class="link-footer" href="">Jobs</a></li>
                        <li><a class="link-footer" href="">Subscriptions</a></li>
                        <li><a class="link-footer" href="">Talent Workshops</a></li>
                        <li><a class="link-footer" href="">CPSC Certificates</a></li>
                        <li><a class="link-footer" href="">Ratings</a></li>
                        <li><a class="link-footer" href="">Shop Help</a></li>
                        <li><a class="link-footer" href="">Contact Us</a></li>
                    </ul>
                </div>
                <div class="card-contact d-flex flex-column">
                    <ul class="d-flex flex-column">
                        <li>
                            <h4 style="color: white">SITES</h4>
                        </li>
                        <li><a class="link-footer" href="">DC</a></li>
                        <li><a class="link-footer" href="">MAD Magazine</a></li>
                        <li><a class="link-footer" href="">DC Kids</a></li>
                        <li><a class="link-footer" href="">DC Universe</a></li>
                        <li><a class="link-footer" href="">DC Powwer Visa</a></li>
                    </ul>
                </div>
            </div>
            <p>All Site Content TM and 2020 DC Entertainment, unless otherwise noted here. All rights reserved.
                <br>
                Cookies Settings
            </p>
        </div>
        <section class="over-footer">
            <div class="container d-flex">
                <div class="btn-over-footer">
                    <a href="">SING UP NOW!</a>
                </div>
                <div class="social-footer">
                    <div class="card-social follow">
                        <h4><a href="">FOLLOW US </a></h4>
                    </div>
                    <div class="card-social">
                        <img src="{{ asset('images/footer-facebook.png') }}" alt="">
                    </div>
                    <div class="card-social">
                        <img src="{{ asset('images/footer-twitter.png') }}" alt="">
                    </div>
                    <div class="card-social">
                        <img src="{{ asset('images/footer-youtube.png') }}" alt="">
                    </div>
                    <div class="card-social">
                        <img src="{{ asset('images/footer-pinterest.png') }}" alt="">
                    </div>
                    <div class="card-social">
                        <img src="{{ asset('images/footer-periscope.png') }}" alt="">
                    </div>
                </div>
            </div>
        </section>
    </footer>
@endsection
