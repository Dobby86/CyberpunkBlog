@extends('layouts.mainLayout')

@section('headerLink3')
<div class="row ">

  <div class="col-lg-2">

    <div class="divLogo">
        <img class="logo" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fhyperpix.net%2Fwp-content%2Fuploads%2F2019%2F08%2Fcyberpunk-2077-logo-font-download.jpg&f=1&nofb=1" alt="">
      </div>
  </div>
  <div class="col-offset-lg-2 col-lg-8">

      <div class="headerSistemato">

        <ul class="listaWelcome"> 
        
            
            <li>
                <a href="{{route('/')}}">Home</a>
            </li>
            
            <li>
              <a href="{{route('character')}}">Maps</a>
            </li>
            
            <li>
              <a href="{{route('history')}}">History</a>
            </li>
            
        </ul>
    </div>
  </div>
</div>
@endsection

@section('mappe')

<div class="visualeMappa">

  <img id="mappa" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fmycyberpunk2077.com%2Fwp-content%2Fuploads%2F2020%2F06%2Fnight_city_map_2077-2048x1894.jpg&f=1&nofb=1" alt="">
    

</div>

@endsection