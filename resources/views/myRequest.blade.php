@extends('layouts.app')

@section('header')
    @include('menu')
@endsection

@section('content')
<div class="container">
    
    <div class="row justify-content-center">
   
                <form action="{{ route('myRequest') }}" method="post">
@csrf
            <div class="card">
                <div class="card-header"><h3>{{ __('Это форма запроса выгрузки') }}</h3></div>

                <div class="card-body"><h6>                

                    {{ __('Здесь вы можете получить выгрузку данных из какого-нибудь источника') }}</h6><br>
<div class="form-group">
<label for="queryPersonName">Ваше имя?</label>
<input type="text" name="personName" id="queryPersonName" class="form-control" value="{{ old('personName') }}">
<br>
</div>

<div class="form-group">
<label for="queryTelNo">Ваш телефон?</label>
<input type="tel" name="telNo" id="queryTelNo" class="form-control" value="{{ old('telNo') }}"
pattern="+7*********">
<br>
</div>



<div class="form-group">
<label for="mail">Ваша электронная почта?</label>
<input type="email" name="mail" id="mail" class="form-control" value="{{ old('mail') }}">
<br>
</div>

<div class="form-group">
<label for="query">Что Вы хотите получить?</label>
<textarea type="text" name="query" id="query" class="form-control">
{{ old('query') }}</textarea >   
</div>


<input type="submit" class="btn btn-outline-primary"value="Отправить отзыв">
<br>
</form>
</div>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
    @include('footer')
@endsection
