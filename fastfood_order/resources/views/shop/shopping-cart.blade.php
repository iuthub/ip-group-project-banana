@extends('layouts.master')

@section('title')
Cart
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
	
		@if(Session::has('cart'))
			<div class="container" align->
			<div class="row justify-content-center">
				<div class="col-sm-6 col-md-6" >
					<ul class="list-group my-3">
						@foreach($products as $product)
							<li class="list-group-item">
								<span class="badge badge-info">{{ $product['qty'] }}</span>
								<strong>{{ $product['item']['name'] }}</strong>
								<span class="label label-success">{{ $product['price'] }}</span>
								so'm
								<a href="{{-- {{ route('') }} --}}"><button class="btn-primary btn-xs float-right">--</button></a>
							</li>
						@endforeach

					</ul>

				</div>

			</div>

			<div class="row justify-content-center">
				<div class="col-sm-6 col-md-6" >
					<strong>Total: {{ $totalPrice }}</strong>
				</div>
			</div>
			<hr>
			<div class="row justify-content-center">
				<div class="col-sm-6 col-md-6">
					<form action="{{route('shop.store')}}" method="POST">
						@csrf
						<input type="text" name='address' class="form-control" placeholder="Enter delivery address">
					<button type='submit' class="btn btn-success my-2">Order</button>
					</form>
					<a href="{{ route('user.dismiss') }}" class="btn btn-danger">Dismiss</a>
				</div>
			</div>

		@else
			<div class="row justify-content-center">
				<div class="col-sm-6 col-md-6" >
					<h2>No items in cart</h2>
				</div>
			</div>
		</div>
	@endif
	
@endsection