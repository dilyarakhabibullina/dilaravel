@extends('layouts.app')

@section('header')
    @include('menu')
@endsection

@section('content')
<div class="container">
    
    <div class="row justify-content-center">
   
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>{{ __('Это моя самая главная страничка с новостями') }}</h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>


            <form action="{{ route('home') }}" method="post">
@csrf
            <div class="card">
                <div class="card-header"><h3>{{ __('Это форма обратной связи') }}</h3></div>

                <div class="card-body"><h6>                

                    {{ __('Здесь вы можете написать все, что обо мне думаете') }}</h6><br>
                    <div class="form-group">
<label for="feedbackPersonName">Ваше имя?</label>
<input type="text" name="personName" id="feedbackPersonName" class="form-control" value="{{ old('personName') }}">
<br>
</div>

<div class="form-group">
<label for="feedback">Ваш отзыв</label>
<textarea type="text" name="feedback" id="feedback" class="form-control">{{ old('feedback') }}</textarea>
<br>
</div>
<label for="feedbackPersonName"></label><br><br>
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
