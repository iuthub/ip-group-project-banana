@extends('layouts.master')

@section('title')
Menu
@endsection


@section('content')


<header>
	<div class="name">
		<h2>FAST FOOD</hs>
	</div>
	<nav class="main-nav">
    @if(!Auth::check())
      <li><a href="{{ route('shop.index') }}" class="active1">Home</a></li>
      <li><a href="{{ route('login') }}" class="active">Sign In</a></li>
      <li><a href="{{ route('register') }}" class="active">Sign Up</a></li>
      <li><a href="{{ route('shop.contact') }}" class="active">Contact Us</a></li>
      <li><a href="" class="active" data-toggle="modal" data-target="#Login">
      Sign In</a></li>
    @else
      <li><a href="{{ route('shop.index') }}" class="active1">Home</a></li>
      <li><a href="{{ route('logout') }}" class="active">Sign Out</a></li>
      <li><a href="{{ route('user.profile') }}" class="active">Profile</a></li>
      <li><a href="{{ route('user.admin') }}" class="active">Admin</a></li>
      <li><a href="{{ route('shop.contact') }}" class="active">Contact Us</a></li>
      <li><a href="{{ route('shop.shoppingCart') }}" class="active"><i class="fas fa-cart-arrow-down"></i><span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span></a></li>
    @endif
  </nav>
</header>

<main>
    {{-- <div class="row">
      <div class="col-md-4"> --}}
        @if(!Auth::check())
         <div class="gallery">
            <div class="h2"><h2 c>MENU</h2></div> 
            <div class="div"><img src="{{ URL::to('src/pics/1.jpg')}}"><h3>Toster 13000  so'm</h3><a href="" data-toggle="modal" data-target="#Login">To Cart</a></div>
            <div class="div"><img src="{{ URL::to('src/pics/3.jpg')}}"><h3>Combo 18000 so'm</h3><a href="" data-toggle="modal" data-target="#Login">To Cart</a></div>
            <div class="div"><img src="{{ URL::to('src/pics/4.jpg')}}"><h3>Donar 12000 so'm</h3><a href="" data-toggle="modal" data-target="#Login">To Cart</a></div>
            <div class="div"><img src="{{ URL::to('src/pics/king_burger.jpg')}}"><h3 style="font-size:35px">King Burger 16000 so'm</h3><a href="" data-toggle="modal" data-target="#Login">To Cart</a></div>
           <div class="div"><img src="{{ URL::to('src/pics/mega_burger.jpg')}}"><h3 style="font-size:35px">Mega Burger 20000 so'm</h3><a href="" data-toggle="modal" data-target="#Login">To Cart</a></div>
            <div class="div"><img src="{{ URL::to('src/pics/chicken_burger.jpg')}}"><h3 style="font-size:32px">Chicken Burger 15000 so'm</h3><a href="" data-toggle="modal" data-target="#Login">To Cart</a></div>
        	  <div class="div"><img src="{{ URL::to('src/pics/double_cheese.jpg')}}"><h3 style="font-size:32px">Cheese Burger 14000 so'm</h3><a href="" data-toggle="modal" data-target="#Login">To Cart</a></div>
            <div class="div"><img src="{{ URL::to('src/pics/6.jpg')}}"><h3 >HotDog 13000 so'm</h3><a href="" data-toggle="modal" data-target="#Login">To Cart</a></div>
            <div class="div"><img src="{{ URL::to('src/pics/5.jpg')}}"><h3 >Mix 35000 so'm</h3><a href="" data-toggle="modal" data-target="#Login">To Cart</a></div>
            <div class="div"><img src="{{ URL::to('src/pics/fanta1.jpg')}}"><h3>Fanta 8000 so'm</h3><a href="" data-toggle="modal" data-target="#Login">To Cart</a></div>
            <div class="div"><img src="{{ URL::to('src/pics/cola.jpg')}}"><h3>Cola 8000 so'm</h3><a href="" data-toggle="modal" data-target="#Login">To Cart</a></div>
            <div class="div"><img src="{{ URL::to('src/pics/juice.jpg')}}"><h3>Juice 10000 so'm</h3><a href="" data-toggle="modal" data-target="#Login">To Cart</a></div>
            <div class="clear"></div>
            </div>

        {{-- </div> --}}
        @else
        <div class="gallery">
            <div class="h2"><h2 c>MENU</h2></div> 
            <div class="div"><img src="{{ URL::to('src/pics/1.jpg')}}"><h3>Toster 13000  so'm</h3><a href="{{ route('shop.addToCart', ['id' => 1]) }}">To Cart</a></div>
            <div class="div"><img src="{{ URL::to('src/pics/3.jpg')}}"><h3>Combo 18000 so'm</h3><a href="{{ route('shop.addToCart', ['id' => 2]) }}">To Cart</a></div>
            <div class="div"><img src="{{ URL::to('src/pics/4.jpg')}}"><h3>Donar 12000 so'm</h3><a href="{{ route('shop.addToCart', ['id' => 3]) }}">To Cart</a></div>
            <div class="div"><img src="{{ URL::to('src/pics/king_burger.jpg')}}"><h3 style="font-size:35px">King Burger 16000 so'm</h3><a href="{{ route('shop.addToCart', ['id' => 4]) }}">To Cart</a></div>
           <div class="div"><img src="{{ URL::to('src/pics/mega_burger.jpg')}}"><h3 style="font-size:35px">Mega Burger 20000 so'm</h3><a href="{{ route('shop.addToCart', ['id' => 5]) }}">To Cart</a></div>
            <div class="div"><img src="{{ URL::to('src/pics/chicken_burger.jpg')}}"><h3 style="font-size:32px">Chicken Burger 15000 so'm</h3><a href="{{ route('shop.addToCart', ['id' => 6]) }}">To Cart</a></div>
            <div class="div"><img src="{{ URL::to('src/pics/double_cheese.jpg')}}"><h3 style="font-size:32px">Cheese Burger 14000 so'm</h3><a href="{{ route('shop.addToCart', ['id' => 7]) }}">To Cart</a></div>
            <div class="div"><img src="{{ URL::to('src/pics/6.jpg')}}"><h3 >HotDog 13000 so'm</h3><a href="{{ route('shop.addToCart', ['id' => 8]) }}">To Cart</a></div>
            <div class="div"><img src="{{ URL::to('src/pics/5.jpg')}}"><h3 >Mix 35000 so'm</h3><a href="{{ route('shop.addToCart', ['id' => 9]) }}">To Cart</a></div>
            <div class="div"><img src="{{ URL::to('src/pics/fanta1.jpg')}}"><h3>Fanta 8000 so'm</h3><a href="{{ route('shop.addToCart', ['id' => 10]) }}">To Cart</a></div>
            <div class="div"><img src="{{ URL::to('src/pics/cola.jpg')}}"><h3>Cola 8000 so'm</h3><a href="{{ route('shop.addToCart', ['id' => 11]) }}">To Cart</a></div>
            <div class="div"><img src="{{ URL::to('src/pics/juice.jpg')}}"><h3>Juice 10000 so'm</h3><a href="{{ route('shop.addToCart', ['id' => 12]) }}">To Cart</a></div>
            <div class="clear"></div>

        @endif
{{--         </div>
    </div> --}}

        

  <!-- <div class="gallery">
      <h3>MANU</h3>
      <div class="block">
          <img src="1.jpg">
          <div class="text">
                <i>First</i>
                <h4>SWORD</h4>
                <a href="">PURCHASE</a>
          </div>
      </div>
      <div class="block">
          <img src="1.jpg">
          <div class="text">
                <i>First</i>
                <h4>SWORD</h4>
                <a href="">PURCHASE</a>
          </div>
      </div>
      <div class="block">
          <img src="1.jpg">
          <div class="text">
                <i>First</i>
                <h4>SWORD</h4>
                <a href="">PURCHASE</a>
          </div>
      </div>
  </div> -->

</main> 


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-pause='false'>
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ URL::to('src/pics/menu1.jpg')}}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ URL::to('src/pics/menu2.jpg')}}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ URL::to('src/pics/wfwef.jpg')}}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="contacts">
      <!--  <div class="contact">
            <h3>Contact Us</h3>
              <form action="">
                <input type="text" placeholder="Name">
                <input type="email" placeholder="Email">
                <input type="text" placeholder="Message">
                <button>Send</button>
              </form>
       </div> -->
       <div class="clear"></div>
            <div class="coninf">
                <h3>Contacts</h3>
                <p>Our delivery service works for You daily from 10: 00 to 20: 00.</p>
                <p>Orders are accepted until 07:45 PM</p>
                <p>Phone Number: +99891 155 30 55 </p>
                <p>Location: Mustaqqilik Avenue</p>
            </div>
       <div class="iframe">
                <iframe src="https://www.google.com/maps/place/Street77/@41.3152126,69.2894744,18z/data=!3m1!4b1!4m5!3m4!1s0x38aef4d376395311:0x2f977e6f6b98ad7!8m2!3d41.3152106!4d69.2905714" width="100%" height="316" frameborder="0" style="border:0" allowfullscreen>
                </iframe>
      </div>
            <nav class="clear"></nav>

</div>

<div class="modal fade" id="Login" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Fast Food</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="text-center mt-3">
      <h3>Login</h3>
        </div>
        <form method="POST" action="{{ route('login') }}">
                        @csrf
      <div class="modal-body my-4 text-center">
        <div class="form-group">
          <label for="email">Email Address:</label>
        <input type="email" name='email' id='email' class="form-control @error('email') is-invalid @enderror">
        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
        <input type="password" name='password' id='password' class='form-control'>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type='submit' class="btn btn-primary">Login</button>
      </div>
      </form>
    </div>
  </div>
</div>


<footer>
    <p>  Fast food © 2020. Founded ProgBanana</p>
</footer>

@endsection