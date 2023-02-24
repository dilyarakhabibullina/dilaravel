@extends('layouts.app')
@section('title')
@parent | Новости
@endsection

@section('header')
    @include('menu')
@endsection

@section('content')
  <div class="container">
    
    <div class="row justify-content-center">
   
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>{{ __('Новости') }}</h1></div>

                <div class="card-body">
                @forelse ($news as $item)
                <a href="{{route('showId', $item->id) }}">{{ $item->title }}</a><br>

                @empty
   
<p>No news</p>
@endforelse
                </div>
                {{ $news->links() }}
            </div>
        </div>
    </div>
</div>

                
@endsection  
@section('footer')
    @include('footer')
@endsection


