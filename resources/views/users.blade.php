@extends('layouts.admin')
@section('content')
{{-- {{$pulses}} --}}
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
   /* body{
        background:url(/images/water.jpg);
        background-size: cover;
      } */
      h4{
          margin-left:70%;
      }
    </style>
</head>
<body>
    <div class="container">
        <br><br><br><br><br>
        <h1>Graph of The Trumac Customers</h1>
        <div class="row">
            <div class="col-12">
                <div class="card rounded">
                    <div class="card-body py-3 px-3">
                        {!! $usersChart->container() !!}
               
                    </div>
                    
                </div>
            </div>
           <h4> <a href="devices">VIEW DETAILS</a></h4>
        </div>
     
</body>
</html>
