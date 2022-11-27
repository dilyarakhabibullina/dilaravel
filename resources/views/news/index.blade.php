@extends('layouts.app')
@extends('menu')
@section('title')
@parent | Новости
@endsection

@section('content')


<div class="container">
    
    <div class="row justify-content-center">
   
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>{{ __('Новости') }}</h1></div>

                <div class="card-body">
                @forelse ($news as $item)
    <!-- <a href="/news/<?=$item['id']?>">Новость номер <?=$item['id']?></a> -->
    <!-- <a href="{{route('showId', [$item['categories_id'], $item['id']])}}">{{$item['title']}}</a><br> -->
    <a href="{{route('showId', $item['id'])}}">{{$item['title']}}</a><br>
@empty
<p>No news</p>
@endforelse
                </div>
            </div>
        </div>
    </div>
</div>

@endsection