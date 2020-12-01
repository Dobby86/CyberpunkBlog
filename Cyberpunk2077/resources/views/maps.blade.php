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

</ul>

    
@endsection

@section('mappe')

<div class="visualeMappa">

  <img id="mappa" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimages.everyeye.it%2Fimg-screenshot%2Fcyberpunk-2077-v1-644414.jpg&f=1&nofb=1" alt="">
    

</div>

@endsection