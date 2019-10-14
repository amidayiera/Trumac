@extends('layouts.app')

@section('content')
    <div class="home">
        <img src="../images/water1.jpg" alt="">
        <div class="callToAction" style="display:inline-block;">
            <h2 class="slogan">Get your water refills<br> and replacements <br>at the click of a button!</h2>
        <a href="/products" class="btn btn-primary" style="text-transform: uppercase; font-size:20px;">order now</a>
            <h3 class="contacts">Telephone: 0724678912
                <br>
                Location: Nairobi west.
            </h3>
        </div>
    </div>
    {{-- <div class="parallax"></div>    --}}
@endsection
