<!DOCTYPE html>
<html lang="en">
<head>
	<title>FastFood</title>
	<meta charset="utf-8">






<link rel="stylesheet" href="{{ URL::to('src/boot/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('src/css/stile.css') }}">

</head>
<body>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<header>
	   <div class="name">
		    <h2>FAST FOOD</hs>
	   </div>
	   @if(!Auth::check())
	   <nav class="main-nav">
		    <li><a href="{{ route('shop.index') }}" class="active1">Home</a></li>
		    <li><a href="{{ route('shop.products') }}" class="active">Menu</a></li>
        <li><a href="" class="active" data-toggle="modal" data-target="#Login">
        Sign In</a></li>
        <li><a href="{{ route('register') }}" class="active">Sign Up</a></li>
        </nav>
      @else
      <nav class="main-nav">
        <li><a href="{{ route('shop.index') }}" class="active1">Home</a></li>
        <li><a href="{{ route('shop.products') }}" class="active">Menu</a></li>
        <li><a href="{{ route('logout') }}" class="active">Sign Out</a></li>
        <li><a href="{{ route('user.profile') }}" class="active">Profile</a></li>
        <li><a href="{{ route('user.admin') }}" class="active">Admin</a></li>
	   </nav>
     @endif
</header>

       <div class="cover">
           <img src="{{ URL::to('src/pics/img.jpg') }}" width="100%">
           <div class="entext">
              <h2>Contact Us</h2>
           </div>
       </div>
       @if(session()->has('message'))
          <div class="alert alert-success text-center">
            {{ session()->get('message') }}
          </div>
       @endif

  <div class="contacts">
       <div class="contact">
            <h3>Keep in Touch with us</h3>
               <p>We are available 24/7 by fax, e-mail or by phone. You can also use our quick contact form to ask a question about our services that we offer on a regular basis. We would be pleased to answer your questions</p>
              <form action="{{ route('shop.contact.send') }}" method="POST">
                @csrf
                 <input type="text" placeholder="Name" name='name'>
                 <input type="email" placeholder="Email" name='email'>
                 <input type="text" placeholder="Phone number" name='phone'>
                 <textarea rows="10" placeholder="Message" name='message'></textarea>
                 <button type='submit' name='send'>Send</button>
              </form>
       </div>

       <div class="block">
           <div>
             <h2>Follow Us</h2>
                <ul>
                  <li>
                    <a href="https://www.facebook.com/"><i class="fa fa-fw fa-facebook"></i> Facebook</a>
                  </li>
                  <li>
                    <a href="https://twitter.com/"><i class="fa fa-fw fa-twitter"></i> Twitter</a>
                  </li>
                  <li>
                    <a href="https://mail.google.com/"><i class="fa fa-fw fa-google-plus"></i> Google</a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com/"><i class="fa fa-fw fa-instagram"></i> Instagram</a>
                  </li>
                </ul>
           </div>
           <div>
                <h2>Phone</h2>
                <ul>
                  <li>
                    <a href=""><i class="fa fa-fw fa-phone"></i>+99890 155 30 55</a>
                  </li>
                </ul>
           </div>
           <div>
               <h2>Address</h2>
                <ul>
                  <li>
                    <a href="https://www.google.ru/maps/place/Inha+University+in+Tashkent/@41.338525,69.332336,17z/data=!3m1!4b1!4m5!3m4!1s0x38aef48a8ed4d0e9:0x3772abeffc72e7b8!8m2!3d41.338525!4d69.33453"><i class="fa fa-fw fa-map-marker"></i>Ziyolilar str 9, Mirzo Ulugbek district</a>
                  </li>
                </ul>
            </div>
            <div>
               <h2>Opening Hours</h2>
                <ul>
                  <li>
                    <p><i class="fa fa-fw fa-watch"></i>9:00am-11:00pm</p>
                  </li>
                </ul>
            </div>
       </div>

          <div class="clear"></div>
            <div class="coninf">
                  <h3>Delivery</h3>
                  <p>Our delivery service works for You daily from 09:00am to 10:00pm</p>
                  <p>Orders are accepted until 09:00pm</p>
                  <p>Phone Number: +99891 155 30 55 </p>
                  <p>Location: Mustaqqilik Avenue</p>
            </div>
            <nav class="clear"></nav>

  </div>

  <footer>
       <p>  Fast food © 2020. Founded ProgBanana</p>
  </footer>
</body>



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="{{ URL::to('src/js/bootstrap.min.js') }}"></script>

</h2>