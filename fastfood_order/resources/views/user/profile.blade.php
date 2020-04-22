@extends('layouts.master')
@section('title')
Profile
@endsection

@section('content')

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ route('shop.products') }}">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href={{ route('shop.shoppingCart') }}><i class="fas fa-cart-arrow-down"></i><span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span><span class="sr-only">(current)</span></a>
      </li>
    </ul>
   
  </div>
</nav>



<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-4">
			<h2>User Profile</h2>
			<hr>
			<h3>My Orders</h3>
			@foreach($orders as $order)
			<div class="panel panel-default">
				<div class="panel panel-body">
					<ul class="list-group">
						@foreach($order->cart->items as $item)
						<li class="list-group-item">
							<span class="badge badge-info">{{ $item['price'] }}</span>
							{{ $item['item']['name'] }} | {{ $item['qty'] }} Amount
						</li>
						@endforeach
					</ul>
				</div>
				<div class="panel-footer">
					<strong>Total Price: {{ $order->cart->totalPrice }}</strong>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>

@endsection