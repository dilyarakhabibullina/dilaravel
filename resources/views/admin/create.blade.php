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
                <div class="card-header"><h3>{{ __('Добавление новости') }}</h3></div>
                <div class="card-body">
                    
                <form action ="{{ route('admin.create')}}" method='post'>
@csrf




<div class="form-group">
<label for="newsCategory">Категория новости</label>
<select name="category" id="newsCategory" class="form-control" >
    @forelse($cats as $item)
    <option @if ($item['id'] == old('category')) selected
    @endif value="{{ $item['id']}}" >{{ $item['category'] }}</option>
    @empty
    <option value="0" selected>Нет категории</option>
    @endforelse
</select>
<br>
</div>

<div class="form-group">
<label for="newsTitle">Название новости</label>
<input type="text" name="title" id="newsTitle" class="form-control" value="{{ old('title') }}">
<br>
</div>

<div class="form-group">
<label for="newsText">Текст новости</label>
<textarea name="text" id="newsText" class="form-control">{{ old('text') }}</textarea><br>
</div>

<div class="form-check">
    <input @if(old('isPrivate') == "1") checked @endif id="newsPrivate" name="isPrivate" type="checkbox" value="1" class="form-check-input">
    <label for="newsPrivate">Приватная</label>
    <br>
</div>

<br>
<div class="form-group">
<input type="submit" class="btn btn-outline-primary" value="Добавить новость">
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
