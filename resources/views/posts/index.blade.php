@extends('layouts.app')

@section('content')
<br>
<h1>Water products</h1>
@if(count($posts)>0)
   @foreach($posts as $post) 
   <div class="card card body bg-light ">
       <div class="row">
           <div class="col-md-4 col-sm-4">
               <img style="width:100%"  scr="/storage/images/{{$post->image}}">
           </div>
           <div class="col-md-8 col-sm-8">
        <h3><a href="/trumacwaters/public/posts/{{$post->id}}">{{$post->name}}</a></h3>
        <small>Written on {{$post->created_at}}</small>
           </div>
       </div>
    </div><br>
   @endforeach
   {{$posts->links()}}
@else
    <p>No posts found</p>
@endif
@endsection