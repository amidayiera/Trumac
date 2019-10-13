@extends('layouts.app')

@section('content')
<div class="container mt-lg-5 m">
<a href="/posts" class="btn btn-primary mb-lg-3">Go Back</a><br>

<img style="width:100%" src="{{ asset('storage/images/' . $post->image) }}">
<br><br>
<h1>{{$post->name}}</h1>
      <h5>Purchase Price:
       {{$post->purchase_price}} Ksh
       <h5>Refill Price:
        {{$post->refill_price}} Ksh<br>
     {{$post->description}}</h5>  
<br>
 <small>Written on {{$post->created_at}}</small> <br><br>
<a href="/posts/{{$post->id}}/edit" class="btn btn-outline-success">Edit Product</a> 

{!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'float-right'])!!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
{!!Form::close()!!}
<div>
@endsection