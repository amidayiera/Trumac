@extends('layouts.app')

@section('content')
<div class="container mt-lg-5">
<hr>
<a href="/posts" class="btn btn-primary">Go Back</a>
<h1>{{$post->name}}</h1>
<img style="width:100%"  scr="/storage/images/{{$post->image}}">
<br><br>
      <h5>Purchase Price:
       {{$post->purchase_price}} Ksh
       <h5>Refill Price:
        {{$post->refill_price}} Ksh<br>
    {{-- {{$post->comments}}</h5>  --}}
</div>
<br>
{{-- <small>Written on {{$post->created_at}}</small> --}}
{{-- <a href="/posts{{$post->id}}/edit" class="btn btn-outline-secondary">Edit Produtc</a> --}}

{!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'float-right'])!!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
{!!Form::close()!!}
</div>
@endsection