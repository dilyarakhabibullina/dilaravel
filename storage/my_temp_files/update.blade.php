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
                <div class="card-header"><h3>{{ __('Изменение новости') }}</h3></div>
                <div class="card-body">
                    
                <form action ="{{ route('admin.update', $news)}}" method='post'>
                <!-- <input type="hidden" name="_method" value="PATCH">    -->
@csrf

<input type="text" name="id" id="newsId" class="form-control" value="{{ $news->id ?? old('id') }}">

<div class="form-group">
<label for="newsCategory">Категория новости</label>
<select name="categories_id" id="newsCategory" class="form-control" >
  
      <!-- <option {{ old('categories_id') }} selected>{{ $news->categories_id ?? old('categories_id') }}  </option> -->
      <!-- <option {{ old('categories_id') }} selected>{{ $item['categories'] ?? old('categories_id') }}  </option> -->

@forelse($cats as $item)


<!-- <option value="{{ $item['id'] }}">{{ $item['categories'] }}</option> -->
<option value="{{ $item['id'] }}" {{$news->categories_id == $item['id'] ? 'selected' : ''}}>{{ $item['categories'] }}</option>    <!-- <option {{ $news->categories_id }} 
    value="{{ $item['id'] }}" >{{ $item['categories'] }}</option> -->
    @empty
    <option value="0" selected>Нет категории</option>
    @endforelse
</select>
<br>
</div>

<div class="form-group">
<label for="newsTitle">Название новости</label>
<input type="text" name="title" id="newsTitle" class="form-control" value="{{ $news->title ?? old('title') }}">
<br>
</div>

<div class="form-group">
<label for="newsText">Текст новости</label>
<textarea name="inform" id="newsText" class="form-control">{{ $news->inform ?? old('inform') }}</textarea><br>
</div>

<div class="form-check">
    <input @if($news->isPrivate ==1 || old('isPrivate') == 1) checked @endif id="newsPrivate" name="isPrivate" type="checkbox" value="1" class="form-check-input">
    <label for="newsPrivate">Приватная</label>
    <br>
</div>

<br>
<div class="form-group">
<input type="submit" class="btn btn-outline-primary" value="Сохранить новость">

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
