<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>{{config('app.name', 'Trumac Waters')}}</title>
</head>
<body>
    {{-- <div class="container"> --}}
        @include('includes.navbar')
        @yield('content')
    {{-- </div> --}}
    
    {{-- @include('inc.navbar')
    <br>
    <br>
<div class='container'>
  @include('inc.messages')
    @yield('content') --}}
</body> 
</html>
