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
</div>
</body> 
</html>
