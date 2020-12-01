@extends('layouts.mainLayout')

@section('edit')
<div class="schema">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
          
        <form action="{{ route('update', $item['id']) }}" method="post">
            
               @csrf
               @method('POST')
        
               <label for="src">src</label>
               <input type="text" name="src" value="{{$item['src']}}">
                <br>
               <label for="titolo">Titolo</label>
               <input type="text" name="titolo" value="{{$item['titolo']}}">
                <br>
               <label for="tipo">Tipo</label>
               <input type="text" name="tipo" value="{{$item['tipo']}}">
                <br>
               <label for="descrizione">Descrizione</label>
               <input type="text" name="descrizione" value="{{$item['descrizione']}}">
                <br>
               <input id="submit" type="submit" name="submit" value="Update">
        
           </form>
        </div>        
   
    @endsection 

