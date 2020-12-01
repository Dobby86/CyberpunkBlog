
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
                <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script> --}}
        <title>Cyberpunk 2077</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <script src="js/app.js"></script>
        <link rel="stylesheet" href="css/app.css">

    </head>
    <body>
    <section class="compilazioneNew">
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
              
            <form action="{{ route('store') }}" method="post">
            
               @csrf
               @method('POST')

                <h2>Inserisci qui i dati da caricare</h2>
        
               <label for="src">Url/img</label>
               <input type="text" name="src" value="" required>
                <br>
               <label for="titolo">Titolo</label>
               <input type="text" name="titolo" value="" required>
                <br>
               <label for="tipo">Tipo</label>
               <input type="text" name="tipo" value="" required>
                <br>
               <label for="descrizione">Descrizione</label>
               <input type="text" name="descrizione" value="" required>
        
               <input type="submit" name="submit" value="CREATE">
        
           </form>
          
        </div>
        
    </section>

     
          
        <footer>
           
                     @yield('footerLink')
                       
                    @include('components.footer')                     
        </footer>
    </body>
</html>
