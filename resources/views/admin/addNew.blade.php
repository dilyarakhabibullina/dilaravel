@extends('layouts.app')
@section('header')
@include ('admin.menuAdmin')
@endsection

@section('content')

<div class="container">
    
    <div class="row justify-content-center">
   
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>{{ __('Добавление новости') }}</h3></div>
                <div class="card-body">
                    
                <form>
<input placeholder="Категория новости"><br><br>
<input placeholder="Название новости"><br><br>
<textarea placeholder="Текст новости"></textarea><br><br><br>
<button type="submit">Добавить новость</button>
</form>


                </div>
            </div>
        </div>
    </div>
</div>




@endsection

@section('footer')
@include ('footer');
@endsection
