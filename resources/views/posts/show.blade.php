@extends('layouts.app')

@section('content')
<hr>
<a href="/trumacwaters/public/posts/" class="btn btn btn-outline-secondary">Go Back</a>
<h1>{{$post->title}}</h1>
<img style="width:100%"  scr="/storage/images/{{$post->image}}">
<br><br>
      <h5>Purchase Price:
       {{$post->purchase_price}}
       <h5>Refill Price:
        {{$post->refill_price}}<br>
    {{$post->comments}}</h5>
</div>
<br>
<small>Written on {{$post->created_at}}</small>
<hr>
<a href="/trumacwaters/public/posts/{{$post->id}}/edit" class="btn btn-outline-secondary">Edit</a>

{!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'float-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger'])}}

{!!Form::close()!!}
@endsection