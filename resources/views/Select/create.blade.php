@extends('layouts.carcass')

@section('title', 'Подбор')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <form method="post" action="{{ route('select.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="container col-11 col-md-8 col-lg-6 col-xl-4 mt-4 text-center">
                    <h2 class="animate__animated animate__pulse">Приступим к подбору!</h2>
                    <div class="row">
                        <div class="col-5 col-sm-4 mx-auto">
                            <img src="/icons/genie0.svg" class="cardsImg card-img-top" alt="Подаркин" min-width="100" min-height="100">
                        </div>
                    </div>
                    <h4 class="mt-3 animate__animated animate__pulse">Напиши имя человека, которому хочешь сделать подарок:</h4>
                    <input class="form-control form-control-lg mt-3" type="text" id="name" name="name"
                           placeholder="Имя получателя подарка">
                </div>
                    @error('name')
                    <p class="text-danger container col-11 col-md-8 col-lg-6 col-xl-4">Без имени никак!</p>
                    @enderror
                <div>
                    <div class="container col-11 col-md-8 col-lg-6 col-xl-4 blocks text-center animate__animated animate__fadeInLeftBig">
                        <input class="container-fluid btn1 blocks" type="submit" value="ДАЛЕЕ >>">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
