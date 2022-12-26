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
        </div>
    </div>
</div>
@endsection

@section('footer')
    @include('footer')
@endsection
