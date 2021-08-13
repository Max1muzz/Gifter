@extends('layouts.carcass')
@section('title','Инфо')
@section('content')

    <div class="container col-11 col-md-8 col-lg-6 col-xl-5 btn1 blocks">
        <h1 class="col align-self-center text-center blocks text-white pt-4">Информация обо мне:</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-4 col-lg-3 col-xl-2 mx-auto">
                <img src="icons/genie0.svg" class="cardsImg card-img-top" alt="Подаркин" min-width="100" min-height="100">
            </div>
        </div>
        <div class="row">
            <div class="col-11 col-md-9 col-lg-7 col-xl-6 mx-auto">
                <p class="text-center mt-2">Приветствую! Меня зовут Подаркин.
                    Я помогу тебе подобрать прикольные подарки для родных и близких.
                    Это не сложно. Нужно всего лишь ответить на несколько простых вопросов о человеке, которому ты хочешь сделать подарок.
                    Затем, исходя из ответов, я выдам несколько вариантов, а тебе лишь останется выбрать любой из них!
                </p>
            </div>
        </div>
    </div>
@endsection
