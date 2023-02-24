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
<a href="{{ route('admin.edit', $item) }}" class="btn btn-success">EDIT</a>
<a href="{{ route('admin.destroy', $item) }}" class="btn btn-danger">DELETE</a>

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