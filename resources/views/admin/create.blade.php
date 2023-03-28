@extends('layouts.app')
@section('header')
@include ('admin.menuAdmin')
@endsection

@dump(old())

@section('content')


<div class="container">
    
    <div class="row justify-content-center">
   
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                @if ($news->id)
                    Изменить новость
                @else
                <h3>Добавление новости
            @endif </h3>
           </div>
                <div class="card-body">
                    
                <form action ="@if (!$news->id){{ route('admin.create')}}@else {{route('admin.update', $news)}}@endif" method='post'>
                
@csrf




<div class="form-group">
<label for="newsCategory">Категория новости</label>
@foreach($errors->get('categories_id') as $error)<div class="alert alert-danger" role="alert">
    {{$error}}</div>
    @endforeach
<select name="categories_id" id="newsCategory" class="form-control" >
    @forelse($cats as $item)
    
    <option @if ($item['id'] == old('categories_id')) selected
                                                @endif value="{{ (int)$item['id']}}">{{ $item['categories'] }}</option>
    @empty
    <option value="0" selected>Нет категории</option>
    @endforelse
</select>
<br>
</div>

<div class="form-group">
<label for="newsTitle">Название новости</label>

    @foreach($errors->get('title') as $error)<div class="alert alert-danger" role="alert">
    {{$error}}</div>
    @endforeach

<input type="text" name="title" id="newsTitle" class="form-control" value="{{$news->title ?? old('title') }}">
<br>
</div>

<div class="form-group">
<label for="newsText">Текст новости</label>

@foreach($errors->get('inform') as $error)<div class="alert alert-danger" role="alert">
    {{$error}}</div>
    @endforeach


<textarea name="inform" id="newsText" class="form-control">{{ $news->inform ?? old('inform') }}</textarea><br>
</div>




<div class="form-check">
@foreach($errors->get('isPrivate') as $error)<div class="alert alert-danger" role="alert">
    {{$error}}</div>
    @endforeach
    <input @if($news->isPrivate ==1 || old('isPrivate') == 1) checked @endif id="newsPrivate" name="isPrivate" type="checkbox" value="1" class="form-check-input">
    <label for="newsPrivate">Приватная</label>
    <br>
</div>

<br>
<div class="form-group">
<input type="submit" class="btn btn-outline-primary" value="@if(!$news->id)Добавить новость@elseИзменить новость@endif">
</div>
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
