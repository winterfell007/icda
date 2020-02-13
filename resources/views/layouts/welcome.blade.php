<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
     <!-- Custom styles for this layout -->
     <link href="{{asset('css/nav.css')}}" rel="stylesheet">

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>{{config('app.name', 'ICDA')}}</title>
  
        <style>

            body{
                background-image: url('../images/1.jpg');
                background-size: cover;
            }
            h6, h2{
                font-weight: lighter;
            }
            .jumbotron-custom{
                background: rgba(255, 255, 255, 0.4);
                box-shadow: 1px 1px 15px grey;
                max-width: 70%; 
                margin: auto;
                color: darkslategrey;
            }
            
        </style>
<script src="https://kit.fontawesome.com/c98b43ede1.js" crossorigin="anonymous"></script>
</head>
<body class="body">
    @yield('content')

<script src="{{ asset('js/app.js') }}" type="text/js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    </body>
</body>
</html>