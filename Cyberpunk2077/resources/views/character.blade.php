@extends('layouts.mainLayout')

@section('headerLink')
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
    <li>
      <button id="login">Login</button>
    </li>
    <li>
      <button id="login">Register</button>
    </li>
       

</ul>

@endsection


@section('personaggi')


  <div class="row">

    
      <div class="col-lg-12">

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
      <a href="{{ route('createx') }}">Create New</a>
      
      </h2>   
      <br>

      @foreach ($mappeGenerate as $item)
      <li>
    
              <a href="{{ route('show', $item['id']) }}">
                  {{$item['titolo']}}
              </a>
      </li>
              
      @endforeach
    </ul>
   </div>
  </div>
</div>
@endsection