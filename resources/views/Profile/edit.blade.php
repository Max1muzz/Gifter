@extends('layouts.carcass')

@section('title', $arr['name'])

@section('content')
    <div class="container-fluid">
        <div class="row">
            <form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="container col-11 col-md-8 col-lg-6 col-xl-4 mt-4 text-center">
                    <h2 class="animate__animated animate__pulse">Отлично {{ $arr['name'] }}!</h2>
                    <div class="row">
                        <div class="col-5 col-sm-4 mx-auto">
                            <img src="/icons/genie0.svg" class="cardsImg card-img-top" alt="Подаркин" min-width="100" min-height="100">
                        </div>
                    </div>
                    <h4 class="animate__animated animate__pulse mt-3">Для начала я хотел бы узнать о тебе следующее:</h4>
                    <select class="form-select mt-4" name="sex">
                        <option selected disabled>Твой пол</option>
                        <option {{ old('sex') == 'Мужской' ? 'selected' : '' }} value="Мужской">Мужской</option>
                        <option {{ old('sex') == 'Женский' ? 'selected' : '' }} value="Женский">Женский</option>
                    </select>
                    @error('sex')
                    <p class="text-danger text-start">Выбери пол</p>
                    @enderror
                    <select class="form-select mt-4" name="country">
                        <option selected disabled>Страна проживания</option>
                        <option {{ old('country') == 'Беларусь' ? 'selected' : '' }} value="Беларусь">Беларусь</option>
                        <option {{ old('country') == 'Россия' ? 'selected' : '' }} value="Россия">Россия</option>
                        <option {{ old('country') == 'Украина' ? 'selected' : '' }} value="Украина">Украина</option>
                        <option {{ old('country') == 'Другая' ? 'selected' : '' }} value="Другая">Другая</option>
                    </select>
                    @error('country')
                    <p class="text-danger text-start">Выбери страну</p>
                    @enderror
                    <select class="form-select mt-4" name="age">
                        <option selected disabled>Год рождения</option>
                        @for ($i = $arr['year']-14; $i > $arr['year']-80; $i--)
                            <option {{ old('age') == $i ? 'selected' : '' }} value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                    @error('age')
                    <p class="text-danger text-start">Выбери год</p>
                    @enderror
                </div>
                <div>
                    <div class="container col-11 col-md-8 col-lg-6 col-xl-4 blocks text-center animate__animated animate__fadeInLeftBig">
                        <input class="container-fluid btn1 blocks" type="submit" value="ДАЛЕЕ >>">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
