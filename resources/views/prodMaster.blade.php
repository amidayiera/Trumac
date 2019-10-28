@extends('layouts.app')

@section('content')
<div class="container">
   @foreach($details as $detail)
   <div class="row">
            <div class="col-md-3">
                <img src="{{asset('storage/images/'.$detail->image)}}" width="450px" height="450px">
            </div>
            <div class="col-md-9" text-align="center">
                    <br><br><br><br>
            <h1 text-align="center">{{ $detail->name }}</H1>
                        <br><br><br>
              <h3 text-align="center">Ksh {{ $detail->purchase_price }}</h3>
              <br><br><br>
              <a href="{{ url('add-to-cart/'.$detail->id) }}"><button type="button" class="btn btn-outline-danger">Add To Cart</button></a>
              <button type="button" class="btn btn-outline-Success" >Buy  Now</button>
              
              
            </div>
        </div>
               
           {{-- <div class=" container" style="background-color: #e3f2fd; padding:20px; margin-top:25px; text-align:center;">
               <h1 style="text-transform: uppercase; text-decoration:underline; font-size:24px;"> Description</h1>
               <h4>Purchase price : {{$detail->purchase_price}} ksh</h4>
               <h4>Refill price :{{ $detail->refill_price }} ksh</h4> --}}
           
       </div>

    @endforeach
    </div>
@endsection
