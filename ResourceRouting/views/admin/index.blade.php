@extends('layouts.app')

@section('header')
@include ('admin.menuAdmin');
@endsection

@section('content')

    
      <div class="container">
    
    <div class="row justify-content-center">
   
        <div class="col-md-8">
            <div class="card">
                    

      
      
                <div class="card-header"><h1>Точка входа для администратора CRUD NEWS</h1></div>
<a href="/">На главную</a>
                <div class="card-body">
@forelse($news as $item)
<h4>
      {{$item->title}}

      
</h4>
<a href="{{ route('news.edit', $item) }}" class="btn btn-success">EDIT</a>


<form action ="{{ route('news.destroy', $item) }}" method='POST'>
<input type="hidden" name="_method" value="DELETE">  
@csrf
<!-- <form method="post">
    <input type="hidden" name="_method" value="DELETE"> -->

    <input type="submit" class="btn btn-outline-primary" value="Удалить новость">
</form>
@empty
No news
@endforelse

{{$news->links()}}
                 
            </div>
         
</div>




                </div>
            </div>
        </div>
    </div>
</div>


@endsection 
@section('footer')
@include ('footer');
@endsection