@extends('layouts.mainLayout')

@section('headerLink')



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
              <a href="{{route('maps')}}">Maps</a>
            </li>
            
            <li>
              <a href="{{route('history')}}">History</a>
            </li>
            
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection


@section('personaggi')


  <div class="row">

    
      <div class="col-xs-12 col-lg-12">

        <div class="personaggi">
          
          @if (session("success"))
              <h2>{{ session('success') }}</h2>
          @endif
     
      @foreach ($mappeGenerate as $item)

          <h1 class="titolo">
    
              {{$item["titolo"]}}
            
          </h1>
            
            <a href="{{ route('show', $item['id']) }}">
              <img id="fotina" src="{{$item['src']}}" alt="">
            </a>
        
      @endforeach
         
        </div>
 
    </div>
    
    
@endsection

    @section('boo')
    <div class="col-lg-12">

      <div class="personaggi">
                    
    <ul>
      <h2>
        ITEMS
        <br>
      <a id="create" href="{{ route('createx') }}">Create New</a>
      
      </h2>   
      <br>

      @foreach ($mappeGenerate as $item)
      <li>
    
              <a id="creati" href="{{ route('show', $item['id']) }}">
                  {{$item['titolo']}}
              </a>
      </li>
              
      @endforeach
    </ul>
   </div>
  </div>
</div>
@endsection