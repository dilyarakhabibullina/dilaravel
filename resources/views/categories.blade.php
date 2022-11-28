@extends('layouts.app')


@section('title')
@parent | Главнвя
@endsection
@section('menu')
@include('menu')

@endsection
@section('content')

<h1>Категории</h1>

@forelse($categories as $category)
<h2>{{$category['category']}}</h2>

<a href="news/categories/{{$category['id']}}">Категория по ggggid категории {{$category['id']}} под названием {{$category['category']}}</a><br>
<a href="news/category/{{$category['slug']}}">Категория по слагу {{$category['slug']}} под названием {{$category['category']}}</a><br>
@empty
Нет категорий
@endforelse
@endsection



