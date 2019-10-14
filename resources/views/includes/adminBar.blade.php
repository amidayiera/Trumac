<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Trumac Waters</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
      .dropbtn {
        background-color:	#F0FFFF;
        color: grey;
        padding: 6px;
        font-size: 28px;
        border: none;
      }
      
      .dropdown {
        position: relative;
        display: inline-block;
      }
      
      .dropdown-content {
        display: none;
        font-size:15px;
        border:none;
        padding: 10px;
        position: absolute;
        background-color:#ffff;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
      }
      
      .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
      }
      
      .dropdown-content a:hover {background-color:#e3f2fd;}
      
      .dropdown:hover .dropdown-content {display: block;}
      
      .dropdown:hover .dropbtn {background-color: #F0FFFF;}
      </style>
</head>
<body>
  <nav class="navbar navbar-expand-md navbar fixed-top navbar navbar-light" style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="/">TRUMAC WATERS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse " id="navbarsExampleDefault">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          {{-- <a class="nav-link" href="/posts">Products</a> --}}
          <div class="dropdown">
            <button class="dropbtn">PRODUCTS</button>
            <div class="dropdown-content">
              <a class="nav-link" href="/posts">view Products</a>
              <a class="nav-link" href="/posts/create">Create new Product</a>
            
            </div>
          </div>
          
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/devices">Customers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/orders">Orders</a>
          </li>
          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @if (Route::has('register'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
          @endif
      @else
          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle text-success href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>
            
              <div class="dropdown-content dropdown-menu-right text-success" aria-labelledby="navbarDropdown">
                <li> 
                <a class="dropdown-item text-success" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                      {{ __('Logout') }} 
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                </li>
              </div>
              <div class="dropdown-content">
                  <a class="nav-link" href="/admin/posts">Posts</a>
                  <a class="nav-link" href="/admin/posts/create">Add posts</a>
                
                </div>
          </li>
      @endguest
        
      </ul>
      <form class="form-inline my-2 my-lg-0">
        
      </form>
    </div>
  </nav>
    </body>
    </html>
    