<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('style.css')}}">
    @livewireStyles
    <title>E Commerce</title>
    <style>
      sup{
        color: white;
        background-color: red;
        padding: 2px 6px;
    border-radius: 50px;
      }
    </style>
</head>
<body>
    
    <div class="log_in">
        <div class="container">
            <div class="row">
              <div class="col-sm">
                
              </div>
              <div class="col-sm">
                
              </div>
              <div class="col-sm">
                
              </div>
              <div class="col-sm">
                
                @if(Route::has('login'))
                    @auth
                    @if(Auth::user()->utype === 'ADM')
                    <div class="dropdown">
                          <a class="dropdown-toggle log_in_link" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                              My Account({{Auth::user()->name}})
                          </a>

                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li><a class="dropdown-item" href="{{ route('admin.category') }}">Categories</a></li>
                            <li><a class="dropdown-item" href="{{ route('admin.products') }}">Products</a></li>
                            <li><a class="dropdown-item" href="{{ route('admin.slider') }}">Slider</a></li>
                            <li><a class="dropdown-item" href="{{ route('admin.order') }}">Order</a></li>
                            <li>
                              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log Out</a>
                              <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                @csrf
                              </form>
                            </li>
          
                          </ul>
                        </div>
                    @else
                        
                        <div class="dropdown">
                          <a class="dropdown-toggle log_in_link" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                              My Account({{Auth::user()->name}})
                          </a>

                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('user.dashboard') }}">Dashboard</a></li>
                            <li>
                              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log Out</a>
                              <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                @csrf
                              </form>
                            </li>
          
                          </ul>
                        </div>

                    @endif
                    @else
                        <a class="log_in_link" href="{{route('login')}}">Log In</a>
                        <a class="log_in_link" href="{{route('register')}}">Register</a>
                    @endif
                @endif
              </div>
            </div>
          </div>
        
    </div>
<nav class="navbar navbar-expand-lg navbar-blue bg-white">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"><span class="lo_go" >TOKO_QU</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">Sign up</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Order</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('product.cart')}}">Cart <i class="fas fa-shopping-cart"></i><sup>{{Cart::count()}}</sup></a>
        </li>
        
      </ul>
      <form action="{{route('search.product')}}" class="d-flex" method="GET">
        <input name="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button name="submit" class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>



<div class="clear">

</div>
{{$slot}}

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <h4 class="footer_head">Sosial Media</h4>
          <div>
            <i class="fab fa-whatsapp">   +6281 234 567 890</i><br>
            <i class="fab fa-facebook"></i> tokoqu <br>
            <i class="fab fa-twitter"></i> @tokoqu<br>
            <i class="fab fa-instagram-square"> @toko_qu007</i><br>
          </div>
        </div>
        <div class="col-sm">
          <h4 class="footer_head">Tentang Kami</h4>
          <div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dolor nulla, egestas sed porttitor a, fringilla ac quam.Mauris non justo vitae erat ornare venenatis. Mauris eu erat eget massa finibus auctor.</p>
          </div>
        </div>
       
        <div class="col-sm">
          <h4 class="footer_head">Kontak Kami</h4>
          <div>
            <a class="footer_link" href=""><i class="fas fa-globe-americas"></i><span class="footer_con">Singaraja,Bali</span></a>
            <a class="footer_link" href=""><i class="fas fa-phone-alt"></i><span class="footer_con">+6281 234 567 890</span></a>
            <a class="footer_link" href=""><i class="fas fa-envelope"></i><span class="footer_con">wawan.arimbawa@undiksha.ac.id</span></a>
          </div>
        </div>
        
        
      </div>
    </div>
  </footer>
  <div>
    <p class="last_content">Projek UAS Teknologi WEB &copy; Ketut Wawan Arimbawa</p>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    @livewireScripts
</body>
</html>