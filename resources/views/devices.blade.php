<!DOCTYPE html>
<html>
<head>
   <style>
   table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
   </style>
</head>
<body>
 
<h1>All Information About   Users</h1>
<table style="border:1px solid black">
        <tr style="padding:15px">

            <th>id</th>
            <th>name</th>
            <th>email</th>
          
            <th>Password</th>
            <th>created_at</th>
            <th>updated_at</th>

        </tr>
        @foreach($users as $value)
       <tr>
        <td>{{ $value->id}}</td>
        <td>{{ $value->name}}</td>
        <td>{{ $value->email}}</td>
        
        <td>{{$value->password}}</td>
        <td>{{$value->created_at}}</td>
        <td>{{$value->updated_at}}</td>
        <td><p>
            <input type="button" value="Delete"
            onclick="document.getElementById('myTable').deleteRow(0)">
            {{-- </p><a href=""><button>DELETE</a>&nbsp;<a href=""><button>EDIT</a></td> --}}
       </tr>
        @endforeach
    </table>
    
</body>