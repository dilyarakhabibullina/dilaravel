@extends('layouts.app')
@extends('menu')

@section('content')
<h2> Добавление новости </h2>

<form>
<input placeholder="Категория новости"><br><br>
<input placeholder="Название новости"><br><br>
<textarea placeholder="Текст новости"></textarea><br><br><br>
<button type="submit">Добавить новость</button>
</form>
@stop
