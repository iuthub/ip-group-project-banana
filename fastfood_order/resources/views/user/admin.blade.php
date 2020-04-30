@extends('layouts.master')

@section('title')
Admin
@endsection

@section('content')

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ route('shop.products') }}">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

      </li>
    </ul>
   
  </div>
</nav>



<div class="container">
	@if(session()->has('message'))
              <div class="alert alert-success text-center">
                {{ session()->get('message') }}
              </div>
            @endif
	<div class="row justify-content-center my-2">
		<div class="col-md-8">
			<div class="card card-default">
				<div class="card-header">
					Orders of Customers
				</div>
				<div class="card-body">
					@foreach($orders as $order)
					<ul class="list-group">
					
						@foreach($order->cart->items as $item)
						<li class="list-group-item">{{ $order->user_id }} | {{ $order->name }}   | {{ $item['item']['name'] }} | {{ $item['item']['price'] }} | {{ $order->address }}</li>
						
						@endforeach
						<li class="list-group-item">Total Price: {{ $order->cart->totalPrice }}</li>
						<a href="admin/delete/{{$order->id}}" class="btn btn-info">Cancel Delivery</a>
					
					</ul>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>





@endsection