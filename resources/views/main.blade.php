@extends('layouts.carcass')

@section('title', 'Подаркин')

@section('content')
    <div class="container-fluid mt-3">
        <h1 class="text-center mt-1 animate__animated animate__pulse">
            Привет! Я Подаркин.
        </h1>
        <div class="row">
            <div class="col-6 col-sm-4 col-lg-3 col-xl-2 mx-auto">
                <img src="icons/genie0.svg" class="cardsImg card-img-top" alt="Подаркин" min-width="100" min-height="100">
            </div>
        </div>
        <h4 class="container col-11 col-md-8 col-lg-6 col-xl-4 mt-3 text-center animate__animated animate__pulse">
            Ты хочешь удивить своих близких классным креативным подарком? 🎁 В этом деле я профи. Приступим?
        </h4>
    </div>
    <div class="container col-11 col-md-8 col-lg-6 col-xl-4 btn1 blocks text-center animate__animated animate__bounceInLeft">
        <a href="{{route('select.base')}}" class="row align-items-center blocks">
            <div class="col-8">
                ПРИСТУПИТЬ К ПОДБОРУ
            </div>
        </a>
    </div>
    <div class="container col-11 col-md-8 col-lg-6 col-xl-4 btn2 blocks text-center animate__animated animate__bounceInRight">
        <a href="{{route('select.base')}}" class="row align-items-center blocks">
            <div class="col-8">
                РАНДОМНЫЙ ПОДАРОК
            </div>
        </a>
    </div>
@endsection

