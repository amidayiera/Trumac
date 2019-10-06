@extends('layouts.app')

@section('content')
<hr>
<h1>Edit Product Detail</h1>
{!! Form::open(['action' => ['PostsController@update',$post->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
      {{Form::label('name','Name')}}
      {{Form::text('name',$post->name,['class' => 'form-control','placeholder'=>'Name'])}}
         </div>

         <div class="form-group">
            {{Form::label('purchase_price','Purchase Price')}}
            {{Form::number('purchase_price',$post->purchase_price,['class' => 'form-control','placeholder'=>'Purchase Price'])}}
               </div>

               <div class="form-group">
                  {{Form::label('refill_price','Refill Price')}}
                  {{Form::number('refill_price',$post->refill_price,['class' => 'form-control','placeholder'=>'Refill Price'])}}
                     </div>

                     <div class="form-group">
                        {{Form::label('image','Select image to upload')}}<br>
                        {{Form::file('image')}}
                            </div>

         <div class="form-group">
                {{Form::label('comments','Comments')}}
                {{Form::textarea('comments',$post->comments,['class' => 'form-control','placeholder'=>'Comment Text'])}}
                   </div>
                   {{Form::hidden('_method','PUT')}}
                   {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection