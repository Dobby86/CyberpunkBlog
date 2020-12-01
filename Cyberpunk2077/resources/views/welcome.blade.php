@extends('layouts.mainLayout')

@section('principale')


    <div class="menu">

      <ul class="listaWelcome"> 
         
          <li>
              <a href="{{route('maps')}}">Maps</a>
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
    </div>


   
@endsection

@section('jambo')
<div class="mezzo">
  <div class="row">
      <div class="col-xs-12">
        <img id="scritta" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fhdqwalls.com%2Fdownload%2F1%2F4k-cyberpunk-2077-game-v7-2560x1440.jpg&f=1&nofb=1" alt="">

      </div>
  </div>
 
</div>
  
  
@endsection

