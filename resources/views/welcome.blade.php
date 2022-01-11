<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Relaciones DB Eloquent</title>
        <link rel="stylesheet" href=" {{ asset('css/app.css') }}">
    
    </head>
    <body>
        <div class="container">
            <h1 class="text-danger">Relaciones DB Eloquent</h1>

            <div>
                @foreach($users as $user)
                 <a href="#">{{$users->name}}</a>
                @endforeach                
            </div>
           
        </div>
    </body>
    <script src="{{ asset('js/app.js') }}"></script>
</html>
