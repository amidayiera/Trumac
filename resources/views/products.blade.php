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
                  <a class="nav-link" href="#">Link 1</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="#">Link 2</a>
                </li>

              <!-- Dropdown -->
                <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"> Dropdown link</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Link 1</a>
                  <a class="dropdown-item" href="#">Link 2</a>
                  <a class="dropdown-item" href="#">Link 3</a>
                </div>
              </li>
            </ul>
  </nav>
  <h1 text-align="center" class="jumbotron">Our Products</h1> 
  <div class="container">
   @foreach($bottles as $bott) 
  
      <div text-align="center">
          <div class="row"> 
            <div class="col-sm-3">
            <a href="{{ url('prodMaster', $bott->id) }}"><img class="img-thumbnail"src = "{{ asset($bott->image) }}" width="300px" height="400px"></a> 
            </div>  
            <div class="col-sm-9">
              <h1 text-align="center">{{ $bott->name }}</H1>
              <h3 text-align="center">KSH/={{ $bott->purchase_price }}</h3>
              <a href="cart.php"><button type="button" class="btn btn-outline-danger">Add To Cart</button>
              <a href="{{ url('prodMaster', $bott->id) }}"><button type="button" class="btn btn-outline-Success" >Buy  Now</button></a>
              <button class="btn btn-outline-info">Request Refill</button>
              <br><br>
              <h4>{{$bott->refill_price}}</h4>
            </div>
          </div>

      </div>
      <br><br>
  @endforeach
  </div> 
  </body>
</html> 