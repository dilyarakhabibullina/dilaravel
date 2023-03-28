<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">

<a href="<?=route('admin.index')?>">Главная страница Админки</a>
<a href="<?=route('admin.test1')?>">Скачать изображение</a>
<a href="<?=route('admin.test2')?>">Скачать текст</a>
<a href="<?=route('admin.create')?>">Создать новость</a>

@if(Auth::user())
<a href="<?=route('admin.profile')?>">Редактировать профиль</a>
@endif
<!-- Right Side Of Navbar -->
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
                                </div>
                            </li>
                        @endguest
                    </ul>
</nav>
</div>

