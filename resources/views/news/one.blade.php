@extends('layouts.main')
@section('title')
@parent | Новость
@endsection

@section('content')
@if($news)
@if(!$news['isPrivate'])
<h1>Новость номер {{$news['id']}} </h1>
<hr>
{{$news['inform']}}
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
       