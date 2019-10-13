@extends('layouts.app')

@section('content')
   @foreach($details as $detail)
       <div class="row container mx-auto mt-lg-5">
           <div class="col-md-3">
               <img src="{{asset($detail->image)}}" width="450px" height="450px">
           </div>
           <div style="text-align:center; padding-left: 250px;">
                   <br><br><br><br>
           <h1 text-align="center">{{$detail->name }}</H1>
             <br><br><br>
             <button type="button" class="btn btn-outline-danger">Add To Cart</button>
             <button type="button" class="btn btn-outline-success" >Buy Now</button>
             
             
           </div>
       </div>
       
           <div class=" container" style="background-color: #e3f2fd; padding:20px; margin-top:25px; text-align:center;">
               <h1 style="text-transform: uppercase; text-decoration:underline; font-size:24px;"> Description</h1>
               <h4>Purchase price : {{$detail->purchase_price}} ksh</h4>
               <h4>Refill price :{{ $detail->refill_price }} ksh</h4>
           
       </div>
    @endforeach
@endsection