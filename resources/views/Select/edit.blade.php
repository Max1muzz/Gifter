@extends('layouts.carcass')

@section('title', 'Подбор')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-5 col-sm-4 col-lg-3 col-xl-2 mx-auto mt-2">
                <img src="/icons/genie0.svg" class="cardsImg card-img-top" alt="Подаркин" min-width="100" min-height="100">
            </div>
        </div>
        <h4 class="container col-11 col-md-8 col-lg-6 col-xl-4 text-center animate__animated animate__pulse mt-2">
            @if($page->id == 1)
                {{ $name }}
            @endif
            {{ $page->head }}
            @if($page->id == 2)
                {{ $name }}
            @endif
        </h4>
    </div>
    <div class="container col-11 col-md-8 col-lg-6 col-xl-4 btn1 blocks text-center animate__animated animate__fadeInLeftBig">
        <a href="{{ route('select.update', $page->link_1) }}" class="row align-items-center blocks">
            <div class="col-8">
                {{ $page->button_1 }}
            </div>
        </a>
    </div>
    @if($page->button_2 !== null)
        <div class="container col-11 col-md-8 col-lg-6 col-xl-4 btn2 blocks text-center animate__animated animate__fadeInRightBig">
            <a href="{{ route('select.update', $page->link_2) }}" class="row align-items-center blocks">
                <div class="col-8">
                    {{ $page->button_2 }}
                </div>
            </a>
        </div>
    @endif
    @if($page->button_3 !== null)
        <div class="container col-11 col-md-8 col-lg-6 col-xl-4 btn3 blocks text-center animate__animated animate__fadeInLeftBig">
            <a href="{{ route('select.update', $page->link_3) }}" class="row align-items-center blocks">
                <div class="col-8">
                    {{ $page->button_3 }}
                </div>
            </a>
        </div>
    @endif
    @if($page->button_4 !== null)
        <div class="container col-11 col-md-8 col-lg-6 col-xl-4 btn4 blocks text-center animate__animated animate__fadeInRightBig">
            <a href="{{ route('select.update', $page->link_4) }}" class="row align-items-center blocks">
                <div class="col-8">
                    {{ $page->button_4 }}
                </div>
            </a>
        </div>
    @endif
    @if($page->button_5 !== null)
        <div class="container col-11 col-md-8 col-lg-6 col-xl-4 btn5 blocks text-center animate__animated animate__fadeInLeftBig">
            <a href="{{ route('select.update', $page->link_5) }}" class="row align-items-center blocks">
                <div class="col-8">
                    {{ $page->button_5 }}
                </div>
            </a>
        </div>
    @endif
    @if($page->button_6 !== null)
        <div class="container col-11 col-md-8 col-lg-6 col-xl-4 btn6 blocks text-center animate__animated animate__fadeInRightBig">
            <a href="{{ route('select.update', $page->link_6) }}" class="row align-items-center blocks">
                <div class="col-8">
                    {{ $page->button_6 }}
                </div>
            </a>
        </div>
    @endif
@endsection


