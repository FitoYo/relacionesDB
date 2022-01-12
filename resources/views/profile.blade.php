<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> {{$user->name}} </title>
        <link rel="stylesheet" href=" {{ asset('css/app.css') }}">
    
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <hr>
                    <h1 class="text-primary">{{$user->name}}</h1>
                    <h3 class="text-secondary">{{$user->email}}</h3>
                    <h4 class="text-danger">ID: {{$user->id}}</h4>
                    <hr>
                    <strong>Instagram</strong>: {{$user->profile->instagram}} |
                    <strong>Github</strong>: {{$user->profile->github}} |
                    <strong>Web</strong>: {{$user->profile->web}}
                    <hr>
                </div>       
            </div>
        </div>
    </body>
    <script src="{{ asset('js/app.js') }}"></script>
</html>
