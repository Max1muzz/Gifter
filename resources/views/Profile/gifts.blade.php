@extends('layouts.carcass')
@section('title','Профиль')
@section('content')
    <div class="container-fluid">
        <div class="container col-11 col-md-8 col-lg-6 col-xl-5 btn1 blocks text-white text-center">
            <div class="row align-items-center blocks">
                <div class="col-8">
                    <h1>{{ $user->name }}</h1>
                </div>
                <div class="col">
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                            {{ __('Выход') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
        <div class="container col-11 col-md-8 col-lg-6 col-xl-5 mt-3">
            <div class="row align-items-end">
                <div class="col-6 text-end animate__animated animate__fadeInLeftBig">
                    <a href="{{ route('profile.base') }}">
                        <h1 class="text-black-50">Подборы</h1>
                    </a>
                </div>
                <div class="col-6 animate__animated animate__fadeInRightBig">
                    <a href="{{ route('profile.gifts') }}">
                        <h1 class="text-dark">| Подарки</h1>
                    </a>
                </div>
            </div>
        </div>
        <div class="container col-11 col-md-8 col-lg-6 col-xl-5">
            <h2 class="text-center mt-4">У тебя нет заказанных подарков!</h2>
        </div>
    </div>
@endsection
