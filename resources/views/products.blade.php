@extends('layouts.app');

@section('content')
  <div class="container mt-lg-5">
   @foreach($bottles as $bott) 
  
      <div text-align="center">
          <div class="row"> 
            <div class="col-sm-3">
            <a href="{{ url('prodMaster', $bott->id) }}"><img class="img-thumbnail"src = "{{ asset('storage/images/' .$bott->image) }}" width="250px" height="400px"></a> 
            </div>  
            <div class="col-sm-9">
{{-- <<<<<<< HEAD
              <h1 text-align="center">{{ $bott->name }}</H1>
              <h3 text-align="center">KSH/={{ $bott->purchase_price }}</h3>
              <a href="{{ url('add-to-cart/'.$bott->id) }}"><button type="button" class="btn btn-outline-danger">Add To Cart</button>
              <a href="{{ url('prodMaster', $bott->id) }}"><button type="button" class="btn btn-outline-Success" >Buy  Now</button></a>
              <button class="btn btn-outline-info">Request Refill</button>
              <br><br>
              <h4>{{$bott->refill_price}}</h4>
            </div> --}}
              <br>
              <div style="padding-left:60px">
              <h1 text-align="center" color="#00078a">{{ $bott->name }}</H1>
                <h3 text-align="center">Purchase Price : Ksh{{ $bott->purchase_price }}</h3>
                <h4>Refill Price : Ksh {{$bott->refill_price}}</h4>
                <a href="{{ url('add-to-cart/'.$bott->id)  }}"><button type="button" class="btn btn-outline-success">Add To Cart</button></a>
              {{-- <a href="{{ url('prodMaster', $bott->id) }}"><button type="button" class="btn btn-outline-Success" >Buy  Now</button></a> --}}
                
                  {{-- <button type="button" class="btn btn-outline-Success" >Buy  Now</button>
                <button class="btn btn-outline-info">Request Refill</button> --}}
              </div>
          </div>
        </div>
      </div>
      <br><br>
  @endforeach
  </div> 
@endsection