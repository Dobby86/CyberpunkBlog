@extends('layouts.mainLayout')

@section('headerLink3')

<ul class="listaWelcome"> 
     
    <li>
        <a href="{{route('/')}}">Home</a>
    </li>
    <li>
      <a href="{{route('character')}}">Character</a>
    </li>
    <li>
      <a href="{{route('history')}}">History</a>
    </li>
    <li>
      <button id="login">Login</button>
    </li>
    <li>
      <button id="login">Register</button>
    </li>

</ul>

    
@endsection

@section('mappe')

<div class="visualeMappa">

  <img id="mappa" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fmycyberpunk2077.com%2Fwp-content%2Fuploads%2F2020%2F06%2Fnight_city_map_2077-2048x1894.jpg&f=1&nofb=1" alt="">
    

</div>

@endsection