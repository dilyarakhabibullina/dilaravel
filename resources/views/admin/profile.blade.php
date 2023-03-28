@extends('layouts.app')

@section('header')
@include ('admin.menuAdmin');
@endsection

@section('content')

<h1>Изменение учетных данных</h1>

<!-- @if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong>.
 {{ session('success')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif -->



@if(Session('MSG'))
<div class="alert alert-success">
{{ Session('MSG')}}
</div>

@endif


<form action="{{route('admin.profile')}}" method="post">
@csrf



<input class="form-control" name="name" placeholder ="Name" value="{{$user->name}}"><br>
<input class="form-control" name="email" placeholder ="E-mail" value="{{$user->email}}"><br>

@if($errors->has('password'))
<div class="alert alert-danger">
@foreach($errors->get('password') as $error)


{{ $error }}


@endforeach
</div>
@endif
<input class="form-control" name="password" type="password" placeholder ="Текущий пароль"><br>



<input class="form-control" name="newPassword" type="newPassword" placeholder ="Новый пароль"><br>
<button class="form-control" type="submit">Изменить</button>


</form>
@endsection 
@section('footer')
@include ('footer');
@endsection