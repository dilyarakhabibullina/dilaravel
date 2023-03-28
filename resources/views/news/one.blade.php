@extends('layouts.app')

@section('title')
@parent | Новость
@endsection

@section('header')
    @include('menu')
@endsection

@section('content')
  @if($news)
@if(!$news->isPrivate)
<h1>Новость номер {{$news->id}} </h1>
<h2>{{$news->title}}</h2>
<hr>

<div><img src={{asset($news->images)}}></div>
{{$news->inform}}
@else
LOG IN to USE CONTENT 
@endif
@else
no news with this id
@endif
<br/>
<br/>
<br/>
<a href="/news"><button>Назад к списку новостей</button></a> 

@endsection  
@section('footer')
    @include('footer')
@endsection


