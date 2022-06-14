@extends('layouts.main')

@section('title')
Home
@endsection

@section('content')
<div class="container-fluid bg-1 nopad mx-auto m-5 w-95">
    <div class="row bg-primary nopad noreap text-center img-fluid "style="background-image: url('{{ URL::asset('imgs/paarden/billy/Billy2.jpeg') }}');">
        <div class="col-12 text-center transbg text-2 p-5 ">
            <h1 class="fw-light text-shadow">
              catchphrases are cool
            </h1>
        </div>
    </div>
    <div class="row p-3">
        <div class="col-12 text-center text-3 ">
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco<br> laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<br> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
        </div>
    </div>
    <div class="row bg-primary nopad noreap text-center img-fluid"style="background-image: url('{{ URL::asset('imgs/paarden/nescio/Nescio2.png') }}');">
        <div class="col-12 text-center transbg text-2 p-5">
            <h1 class="fw-light text-shadow">
              catchphrases are cool
            </h1>
        </div>
    </div>
    <div class="row p-3">
        <div class="col-sm-6 text-center text-3">
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco<br> laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<br> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
        </div>
        <div class="col-sm-6 text-center text-3">
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco<br> laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<br> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
        </div>
    </div>
    <div class="row bg-primary nopad noreap text-center img-fluid"style="background-image: url('{{ URL::asset('imgs/paarden/nescio/BillyenNescio.png') }}');">
        <div class="col-12 text-center transbg text-2 p-5">
            <h1 class="fw-light text-shadow">
                catchphrases are cool
            </h1>
        </div>
    </div>
</div>
@endsection