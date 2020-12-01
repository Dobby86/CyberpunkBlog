@extends('layouts.mainLayout')

@section('principale')


    <div class="menu">

      <ul class="listaWelcome "> 
        
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
          <li>
            <button id="login">Register</button>
          </li>
        
    
      </ul>
    </div>
    


   
@endsection

@section('jambo')
<div class="mezzo">
  <div class="row">
      <div class="col-xs-12">
        <img id="scritta" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.actugaming.net%2Fwp-content%2Fuploads%2F2018%2F02%2Fcyberpunk-2077.jpg&f=1&nofb=1" alt="">

      </div>
  </div>
 
</div>
  
  
@endsection

