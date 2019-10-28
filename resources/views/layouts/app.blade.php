<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <title>{{config('app.name', 'Trumac Waters')}}</title>
</head>
<body>
     @include('includes.navbar')
    <br>
    <br>
{{-- <div class='container'> --}}
  @include('includes.messages')
    @yield('content') 
    @yield('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</div>
</body> 
</html>
