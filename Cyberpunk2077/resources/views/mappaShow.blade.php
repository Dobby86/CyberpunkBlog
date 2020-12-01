@extends('layouts.mainLayout')
    
   @section('caos')

      <div class="caos">
         <ul class="listaDatiIns">

        
            <li id="immagineUpload"><img id="fotina" src="{{$item['src']}}" alt=""></li>
               <br>
               <li> Titolo: {{$item['titolo']}}</li>
               <br>
               <li> Tipo: {{$item['tipo']}}</li>
               <br>
               <li>  Descrizione: {{$item['descrizione']}}</li>
              <br>
            <li> <a href="{{ route('destroy', $item['id']) }}">Delete me</a></li>
            <li> <a href="{{ route('edit', $item['id']) }}">Edit Me</a></li>
         </ul>
              
        
      </div>


   @endsection 


