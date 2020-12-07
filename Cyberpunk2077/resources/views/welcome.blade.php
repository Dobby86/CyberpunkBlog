@extends('layouts.mainLayout')

@section('principale')

<div class="row ">

  <div class="col-xs-4 col-lg-2">

    <div class="divLogo">
      <img class="logo" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fhyperpix.net%2Fwp-content%2Fuploads%2F2019%2F08%2Fcyberpunk-2077-logo-font-download.jpg&f=1&nofb=1" alt="">
    </div>
  </div>

@if (Route::has('login'))
<div class="col-xs-12 col-md-6 col-offset-lg-2 col-lg-9">
  <div class="headerSistemato">
        <ul class="listaWelcomePrincipale">          
            <li>
              @auth
                    <a href="{{route('maps')}}">Maps</a>
                </li>
                <li>              
                  <a href="{{route('character')}}">Character</a>
                </li>
                <li>
                  <a href="{{route('history')}}">History</a>
                </li>
                
           
              @endauth
            </li>     
        </ul>
      @endif
       <!-- Right Side Of Navbar -->
       <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
            <li class="nav-item">
                <a id="login" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a id="register" class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
              <img src="{{ asset(auth()->user()->profile_image) }}" style="width: 40px; height: 40px; border-radius: 50%;">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>
                

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a id="tastoLogout" class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                  <a id="tastoProfileedit" href="{{ Route('scegli') }}">
                  {{ Auth::user()->name }} <span class="caret"></span>
                  
                </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
    </div>  
  </div>
</div>

@endsection


@section('jambo')
<div class="mezzo">
  <div class="row">
      <div class="col-xs-12">
        <img id="scritta" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcdn.dribbble.com%2Fusers%2F4499783%2Fscreenshots%2F9083407%2Fmedia%2F99a43f25dda53dac91a5536ed66d7f8c.gif&f=1&nofb=1" alt="">

      </div>
  </div>
 
</div>
  
  
@endsection

