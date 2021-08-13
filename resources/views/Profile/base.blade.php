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
                        <h1 class="text-dark">Подборы |</h1>
                    </a>
                </div>
                <div class="col-6 animate__animated animate__fadeInRightBig">
                    <a href="{{ route('profile.gifts') }}">
                        <h1 class="text-black-50">Подарки</h1>
                    </a>
                </div>
            </div>
        </div>
        <div class="container col-11 col-md-8 col-lg-6 col-xl-5">
            @if(filled($interviews))
                <hr/>
                @foreach($interviews as $interview)
                    <div class="row">
                        <div class="col">
                            <h4 class="mt-2">
                                {{ $loop->iteration }}. {{ $interview->name }}
                            </h4>
                        </div>
                        <div class="col">
                            <h6 class="mt-3">
                                {{ substr_replace($interview->updated_at, '', 10, 20) }}
                            </h6>
                        </div>
                        <div class="col-2">
                            <form action="{{ route('profile.base') }}" method="get">
                                <input type="submit" class="btn btn-success" value="✔">
                            </form>
                        </div>
                        <div class="col-2">
                            <form action="{{ route('select.destroy', $interview) }}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger" value="✖">
                            </form>
                        </div>
                    </div>
                    <hr/>
                @endforeach
            @else
                <h2 class="text-center mt-4">У тебя нет ни одного подбора!</h2>
            @endif
        </div>
    </div>
@endsection
