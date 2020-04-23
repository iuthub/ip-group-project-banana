@extends('layouts.master')

@section('title')
Fast Food
@endsection


@section('content')

<header>
    <div class="name">
        <h2>FAST FOOD</hs>
    </div>
    <nav class="main-nav">
        @if(!Auth::check())
        <li><a href="{{ route('shop.index') }}" class="active1">Home</a></li>
        <li><a href="{{ route('shop.products') }}" class="active">Menu</a></li>
        <li><a href="" class="active" data-toggle="modal" data-target="#Login">
        Sign In</a></li>
        <li><a href="{{ route('register') }}" class="active">Sign Up</a></li>
        <li><a href="" class="active">Contact Us</a></li>
        @else
        <li><a href="{{ route('shop.index') }}" class="active1">Home</a></li>
        <li><a href="{{ route('shop.products') }}" class="active">Menu</a></li>
        <li><a href="{{ route('logout') }}" class="active">Sign Out</a></li>
        <li><a href="{{ route('user.profile') }}" class="active">Profile</a></li>
        <li><a href="{{ route('user.admin') }}" class="active">Admin</a></li>
        <li><a href="{{ route('shop.contact') }}" class="active">Contact Us</a></li>
        {{-- <li><a href="{{ route('cart.index') }}" class="active"><i class="fas fa-cart-arrow-down"></i></a></li> --}}
        @endif
    </nav>
</header>
<!-- <div class="opacity">
    
</div> <!-- sfsdfsdfdf -->
    <div class="entry">
        <img class="img" src="{{ URL::to('src/pics/sdcd.jpg') }}" width="100%">   

        <div class="text">
            <h2>ARE YOU READY?</h2>
        </div>
            <div class="button">
                <a href="" class="btn btn-one">Watch Recipe </a>
                <a href="" class="btn btn-two">Explore More</a>
            </div>
    </div>
<!-- <main>
         <div class="gallery">
            <div class="h2"><h2 c>MENU</h2></div> 
            <div class="div"><img src="1.jpg"><h3>Toster $7.7</h3><a href="">Delivery</a></div>
            <div class="div"><img src="3.jpg"><h3>Combo $8</h3><a href="">Delivery</a></div>
            <div class="div"><img src="4.jpg"><h3>Donar $7.9</h3><a href="">Delivery</a></div>
            <div class="div"><img src="5.jpg"><h3>Combo $10</h3><a href="">Delivery</a></div>
            <div class="div"><img src="6.jpg"><h3>HotDog $5</h3><a href="">Delivery</a></div>
            <div class="div"><img src="4.jpg"><h3>Combo $7.5</h3><a href="">Delivery</a></div>
            <div class="div"><img src="1.jpg"><h3>HotDog $7</h3><a href="">Delivery</a></div>
            <div class="div"><img src="4.jpg"><h3>Donar $7.5</h3><a href="">Delivery</a></div>
            <div class="clear"></div>
        </div>

        

</main> -->

        <div class="news">
            <h2 class="h2">NEWS</h2>
            <div class="news_1">
                <div class="h3"><h3>RECIPE</h3></div>
                <p>Lorea impus sit amet, consectetur adipisicing elit. Excepturi, quas iste provident ex nulla beatae minima porro in facilis libero dolorem numquam ipsum ab mollitia, adipisci enim? Obcaecati, nesciunt, totam.Lorea impus sit amet, consectetur adipisicing elit. Excepturi, quas iste provident ex nulla beatae minima porro in facilis libero dolorem numquam ipsum ab mollitia, adipisci enim? Obcaecati, nesciunt, totam.Lorea impus sit amet, consectetur adipisicing elit. Excepturi, quas iste provident ex nulla beatae minima porro in facilis libero dolorem numquam ipsum ab mollitia, adipisci enim? Obcaecati, nesciunt, totam.</p>
            </div>
                <div class="news_1">
                <img src="{{ URL::to('src/pics/4.jpg')}}">
                </div>
                <div class="clear"></div>   
    </div>

        <div class="about">
          <h2>ABOUT US</h2>
        </div>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-pause='false'>
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ URL::to('src/pics/staff.jpg') }}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ URL::to('src/pics/staff1.jpg') }}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ URL::to('src/pics/img.jpg') }}" alt="Third slide">
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
<footer>
    <p> Fast food © 2020.Privacy Policy</p>
</footer>

<!-- Modal -->
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




{{-- <!-- Modal -->
<div class="modal fade" id="Register" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Fast Food</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="text-center mt-3">
      <h3>Register</h3>
        </div>
        <form method="POST" action="{{ route('register') }}">
                        @csrf
      <div class="modal-body my-4 text-center" style="height:350px">
        <div class="form-group">
          <label for="name">Name:</label>
        <input type="text" name='name' id='name' class="form-control @error('name') is-invalid @enderror">
        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
        <input type="password" name='password' id='password' class="form-control @error('password') is-invalid @enderror">
        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
        <div class="form-group">
          <label for="password-confirm">Confirm Password:</label>
        <input type="password" name='password_confirmation' id='password-confirm' class="form-control @error('password') is-invalid @enderror">
        </div>
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
          <label for="phone">Phone:</label>
        <input type="text" name='phone' id='phone' class="form-control @error('phone') is-invalid @enderror">
        @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
        <div class="form-group">
          <label for="date_of_birth">Date of Birth:</label>
        <input type="text" name='date_of_birth' id='date_of_birth' class="form-control @error('date_of_birth') is-invalid @enderror">
        @error('date_of_birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>

        <div class="form-group">
          <label for="postal_code">Postal Code:</label>
        <input type="text" name='postal_code' id='postal_code' class="form-control @error('postal_code') is-invalid @enderror">
        @error('postal_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>

        <div class="form-group">
          <label for="city">City:</label>
        <input type="text" name='city' id='city' class="form-control @error('city') is-invalid @enderror">
        @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>

         <div class="form-group">
          <label for="passport">Passport:</label>
        <input type="text" name='passport' id='passport' class="form-control @error('passport') is-invalid @enderror">
        @error('passport')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>

         <div class="form-group">
          <label for="role_id">Role:</label>
        <input type="role_id" name='role_id' id='role_id' class="form-control @error('role_id') is-invalid @enderror">
        @error('role_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type='submit' class="btn btn-primary">Register</button>
      </div>
      </form>
    </div>
  </div>
</div> --}}

@endsection
