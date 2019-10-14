@include('includes.adminBar')
<!DOCTYPE html>
<html>
<head>
   <style>
      /* body{
        background:url(/images/water.jpg);
        background-size: cover;
      } */
   table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 10px;
}

tr:nth-child(even){background-color: #f2f2f2}
tr:nth-child(odd){background-color: white}

th {
  background-color:	#e3f2fd;
  color: #7e8681;
  font-size:20px;
  font-weight:500;
  text-transform: uppercase;
}
Table{
    /* width:20%; */
    margin-left: 10%;
    width:80%;

}
h1{
    margin-left: 20%;
    width:20%;
    background-color:white;
    
}
head{
  width:80%;
}
   </style>
</head>
<body>
 <br> <br> <br>
 <br><br>
<h1>Trumac Customers</h1>
<div class="Table">
<table >
        <tr style="padding: 20px">

            <th>id</th>
            <th>name</th>
            <th>email</th>
          
            {{-- <th>Password</th> --}}
            <th>created at</th>
            <th>updated at</th>

        </tr>
        @foreach($users as $value)
       <tr>
        <td>{{ $value->id}}</td>
        <td>{{ $value->name}}</td>
        <td>{{ $value->email}}</td>
        
        {{-- <td>{{$value->password}}</td> --}}
        <td>{{$value->created_at}}</td>
        <td>{{$value->updated_at}}</td>
        {{-- <tr>
            {{-- <input type="button" value="Delete"
            onclick="document.getElementById('myTable').deleteRow(0)"> --}}
            {{-- </p><a href=""><button>DELETE</a>&nbsp;<a href=""><button>EDIT</a></td> 
       </tr> --}}
        @endforeach
    </table>
</div>
{{-- <h4> <a href="users">VIEW GRAPH</a></h4> --}}
</body>