<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container px-5">
        <a class="navbar-brand" href="{{route('index')}}">美甲預約</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('reserve')}}">預約紀錄</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('staffs.index')}}">美甲老師介紹</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('classes.index')}}">課程介紹</a></li>
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li class="nav-item"><a class="nav-link" href="{{ url('/login') }}">登入</a></li>
                    <li class="nav-item"><a  class="nav-link"href="{{ url('/register') }}">註冊</a></li>
                @else
                    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                        <li class="nav-item dropdown">
                            <a href="#" class=" nav-link dropdown-toggle" id="navbarDropdown" data-bs-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li>
                                    <form method="POST" action="{{route(('logout'))}}">
                                        @csrf
                                    <button  class="dropdown-item" type="submit">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                @endif
                <!--
                <li class="nav-item"><a class="nav-link" href="{{ url('/login') }}">登入</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/register') }}">註冊</a></li>
                -->
            </ul>
        </div>
    </div>
</nav>
