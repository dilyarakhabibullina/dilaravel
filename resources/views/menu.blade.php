
@section('title')
@parent | Главная
@endsection





<!-- <a href="/auth">Авторизоваться</a></br> -->

<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                    <a href="/">Главная страница</a>
                    </ul>
                    <ul class="navbar-nav me-auto">
                    <a href="/about">О проекте</a>
                    </ul>
                    <ul class="navbar-nav me-auto">
                    <a href="/categories">Категории</a>
                    </ul>
                    <ul class="navbar-nav me-auto">
                    <a href="/news">Новости</a>
                    </ul>
                    <ul class="navbar-nav me-auto">
                    <a href="/myRequest">Заказать выгрузку</a>
                    </ul>                  
                    @if (!empty(Auth::user()))
                  @if(Auth::user()->is_admin == 1){
            <ul class="navbar-nav me-auto">
                    <a href="/admin">Админка</a>
                    </ul>
                    }
                    @endif
                    @endif
    
                    
                  

                   
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <div style="margin-right:30px"> {{ Auth::user()->name }}
                                <!-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   
                                </a> -->

                                <!-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown"> -->
</div>
<div>
                                <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
</div>  

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    {{ csrf_field() }}
                                    </form>
                                <!-- </div> -->
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>