@extends('layouts.admin')
@section('content')
{{-- {{$pulses}} --}}
<div class="container">
    <h1>Graph indicating number of users of the app</h1>
    <div class="row">
        <div class="col-6">
            <div class="card rounded">
                <div class="card-body py-3 px-3">
                    {!! $usersChart->container() !!}
           
                </div>
                
            </div>
        </div>
        <a href="devices">VIEW DETAILS3</a>
    </div>
{{--    
    <table>
        <tr>
            <td>id</td>
            <td>name</td>
            <td>email</td>
            <td>emailed_verified_at</td>
            <td>Password</td>
            <td>created_at</td>
            <td>updated_at</td>

        </tr>
        @foreach($users as $value)
       <tr>
        <td>{{ $value->id}}</td>
        <td>{{ $value->name}}</td>
        <td>{{$value->emailed_verified_at}}</td>
        <td>{{$value->password}}</td>
        <td>{{$value->created_at}}</td>
        <td>{{$value->updated_at}}</td>
        <td><a href=""><button></a>&nbsp;<a href=""><button></a></td>
       </tr>
        @endforeach
    </table>


@endsection
 --}}
