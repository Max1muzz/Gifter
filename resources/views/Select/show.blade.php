@extends('layouts.carcass')

@section('title', 'Подбор')

@section('content')
    <div class="container-fluid">
        <div class="container col-11 col-md-8 col-lg-6 col-xl-4 mt-4 text-center">
            <h1>{{ $interview->name }} останется без подарка, если не закончить подбор! </h1>
            <div class="row">
                <div class="col-5 col-sm-4 mx-auto">
                    <img src="/icons/genie0.svg" class="cardsImg card-img-top" alt="Подаркин" min-width="100"
                         min-height="100">
                </div>
            </div>
            <h2 class="mt-3">Что будешь делать?</h2>
        </div>
        <div class="container col-11 col-md-8 col-lg-6 col-xl-4 btn1 blocks text-center animate__animated animate__bounceInLeft">
            <a href="{{ route('select.edit') }}" class="row align-items-center blocks">
                <div class="col-8">
                    ПРОДОЛЖУ
                </div>
            </a>
        </div>
        <div class="container col-11 col-md-8 col-lg-6 col-xl-4 btn2 blocks text-center animate__animated animate__bounceInRight">
            <div class="row align-items-center blocks">
                <form class="col-8" action="{{ route('select.destroy', $interview) }}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="УДАЛЯЕМ">
                </form>
            </div>
        </div>
    </div>
@endsection
