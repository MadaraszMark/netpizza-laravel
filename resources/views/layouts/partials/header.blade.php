<!DOCTYPE html>
<html lang="hu">
  <head>
    <title>NetPizza</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">

    {{-- CSS assets --}}
    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
      .nav-item.dropdown {
        position: relative;
      }

      .nav-item.dropdown .dropdown-menu {
        display: none;
        position: absolute;
        right: 0;
        top: 100%;
        background-color: #222;
        border: none;
        padding: 0;
        margin-top: 0;
        opacity: 0;
        transition: opacity 0.2s ease-in-out;
      }

      .nav-item.dropdown:hover .dropdown-menu {
        display: block;
        opacity: 1;
      }

      .dropdown-item {
        color: #fff !important;
        padding: 10px 20px;
      }

      .dropdown-item:hover {
        background-color: #444 !important;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
          <span class="flaticon-pizza-1 mr-1"></span>NetPizza<br><small>Isteni Finom</small>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menü
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
  <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
    <a href="{{ url('/') }}" class="nav-link">Kezdőlap</a>
  </li>
  <li class="nav-item {{ request()->is('menu') ? 'active' : '' }}">
    <a href="{{ url('menu') }}" class="nav-link">Menü</a>
  </li>
  <li class="nav-item {{ request()->is('services') ? 'active' : '' }}">
    <a href="{{ url('services') }}" class="nav-link">Szolgáltatások</a>
  </li>
  <li class="nav-item {{ request()->is('about') ? 'active' : '' }}">
    <a href="{{ url('about') }}" class="nav-link">Rólunk</a>
  </li>
  <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}">
    <a href="{{ url('contact') }}" class="nav-link">Kapcsolat</a>
  </li>
  <li class="nav-item {{ request()->is('chart') ? 'active' : '' }}">
  <a href="{{ route('chart') }}" class="nav-link">Diagram</a>
</li>

  {{-- Üzenetek menüpont - csak bejelentkezett felhasználónak --}}
  @auth
    @if(auth()->user()->role === 'registered' || auth()->user()->role === 'admin')
      <li class="nav-item {{ request()->is('messages') ? 'active' : '' }}">
        <a href="{{ route('messages') }}" class="nav-link">Üzenetek</a>
      </li>
    @endif
  @endauth

  {{-- AUTH links --}}
  @guest
    <li class="nav-item {{ request()->is('login') ? 'active' : '' }}">
      <a href="{{ route('login') }}" class="nav-link">Bejelentkezés</a>
    </li>
    <li class="nav-item {{ request()->is('register') ? 'active' : '' }}">
      <a href="{{ route('register') }}" class="nav-link">Regisztráció</a>
    </li>
  @else
    @if(auth()->user()->role === 'admin')
  <li class="nav-item {{ request()->is('admin') ? 'active' : '' }}">
    <a href="{{ route('admin') }}" class="nav-link">Admin</a>
  </li>

  <li class="nav-item {{ request()->is('admin/pizzas') ? 'active' : '' }}">
    <a href="{{ route('pizzas.index') }}" class="nav-link">Pizzák</a>
  </li>
@endif

    {{-- Dropdown név + kijelentkezés --}}
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button">
        {{ auth()->user()->name }}
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <form method="POST" action="{{ route('logout') }}" class="m-0">
          @csrf
          <button type="submit" class="dropdown-item">Kijelentkezés</button>
        </form>
      </div>
    </li>
  @endguest
</ul>

        </div>
      </div>
    </nav>
