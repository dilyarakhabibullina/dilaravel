@extends('layouts.app')

@section('header')
@include ('admin.menuAdmin');
@endsection

      <h1>Точка входа для администратора</h1>

      Какой-нибудь текст
      <a href="/">На главную</a>
      
@section('footer')
@include ('footer');
@endsection