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
        <li><a href="{{ route('login') }}" class="active">Sign In</a></li>
        <li><a href="{{ route('register') }}" class="active">Sign Up</a></li>
        <li><a href="" class="active">Purchased</a></li>
        <li><a href="" class="active">Contact Us</a></li>
        @else
        <li><a href="{{ route('shop.index') }}" class="active1">Home</a></li>
        <li><a href="{{ route('shop.products') }}" class="active">Menu</a></li>
        <li><a href="{{ Auth::logout() }}" class="active">Sign Out</a></li>
        <li><a href="" class="active">Purchased</a></li>
        <li><a href="" class="active">Contact Us</a></li>
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


@endsection

{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    @if(Auth::user())
                    {{ Auth::user()->roles->pluck('name') }}
                    @endif
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
 --}}

