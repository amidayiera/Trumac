<html>
<head>
  <title> </title>
  <link href="{{ asset('css/app.css')}}" rel="stylesheet">
</head>
 <body> 
 <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
 <!-- Brand -->
     <a class="navbar-brand" href="#">Logo</a>

 <!-- Links -->
           <ul class="navbar-nav">
               <li class="nav-item">
                 <a class="nav-link" href="#">Link x1</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">Link 2</a>
               </li>

             <!-- Dropdown -->
               <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"> Dropdown link</a>
               <div class="dropdown-menu">
                 <a class="dropdown-item" href="#">Hey</a>
                 <a class="dropdown-item" href="#">Link 2</a>
                 <a class="dropdown-item" href="#">Link 3</a>
               </div>
             </li>
           </ul>
 </nav>
 <body>
   @foreach($details as $detail)
      
  
       <div class="row">
           <div class="col-md-3">
               <img src="{{asset($detail->image)}}" width="450px" height="450px">
           </div>
           <div class="col-md-9" text-align="center">
                   <br><br><br><br>
           <h1 text-align="center">{{ $detail->name }}</H1>
                       <br><br><br>
             <h3 text-align="center">KSH/ {{ $detail->purchase_price }}</h3>
             <br><br><br>
             <button type="button" class="btn btn-outline-danger">Add To Cart</button>
             <button type="button" class="btn btn-outline-Success" >Buy  Now</button>
             
             
           </div>
       </div>
       
           <div class="jumbotron" text-align="center">
               <h1> Description:</h1>
               <h4>refill price :{{ $detail->refill_price }}</h4>
           
       </div>
    @endforeach
 </body>
</html> 