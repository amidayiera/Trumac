@extends('layouts.app')

@section('content')
<div class="container mt-lg-5">
<hr>
   <h1>Edit Product Detail</h1>
   {!! Form::open(['action' => ['PostsController@update',$post->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
   <div class="form-group">
      {{Form::label('name','Quantity (in litres or ml)')}}
      {{Form::text('name',$post->name,['class' => 'form-control','placeholder'=>'Name'])}}
   </div>

   <div class="form-group">
      {{Form::label('purchase_price','Purchase Price (in ksh)')}}
      {{Form::number('purchase_price',$post->purchase_price,['class' => 'form-control','placeholder'=>'Purchase Price'])}}
   </div>

   <div class="form-group">
      {{Form::label('refill_price','Refill Price (in ksh)')}}
      {{Form::number('refill_price',$post->refill_price,['class' => 'form-control','placeholder'=>'Refill Price'])}}
   </div>

   <div class="form-group">
      {{Form::label('image','Select image to upload')}}<br>
      {{Form::file('image')}}
   </div>

<div class="form-group">
         {{Form::label('description','Description')}}
         {{Form::textarea('description',$post->description,['class' => 'form-control','placeholder'=>'Description Text'])}}
   </div> 
   {{Form::hidden('_method','PUT')}}
   {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
</div>
@endsection