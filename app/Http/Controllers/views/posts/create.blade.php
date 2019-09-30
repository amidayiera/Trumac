@extends('layouts.app')

@section('content')
<hr>
<h1>Insert Product Detail</h1>
{!! Form::open(['action' => 'PostsController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
      {{Form::label('name','Name')}}
      {{Form::text('name','',['class' => 'form-control','placeholder'=>'Name'])}}
         </div>

         <div class="form-group">
            {{Form::label('purchase_price','Purchase Price')}}
            {{Form::number('purchase_price','',['class' => 'form-control','placeholder'=>'Purchase Price'])}}
               </div>

               <div class="form-group">
                  {{Form::label('refill_price','Refill Price')}}
                  {{Form::number('refill_price','',['class' => 'form-control','placeholder'=>'Refill Price'])}}
                     </div>

                     <div class="form-group">
                        {{Form::label('image','Select image to upload')}}<br>
                        {{Form::file('image')}}
                           </div>

         <div class="form-group">
                {{Form::label('comments','Comments')}}
                {{Form::textarea('comments','',['class' => 'form-control','placeholder'=>'Comment Text'])}}
                   </div>
                   {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection