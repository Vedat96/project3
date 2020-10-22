<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
		<div class="row">
			<!-- <div class="col-md-12"> -->
	    	<div class="col-md-9 col-lg-9 col-sm-9 pull-left">

				<div class="card">
					<div class="card-header">
						Product details
					</div>
					<div class="card-body">
						<h1>{{$product->title}}</h1>
						<p>{{$product->description}}</p>
					</div>
				</div>
			</div>
	    	<div class="col-md-3 col-lg-3 col-sm-3 pull-right">
				<div class="list-group">
				 	<a href="/products" class="list-group-item">All Products</a>
				 	<a href="/products/{{$product->id}}/edit" class="list-group-item">Edit Product</a>
				 	<a href="/products/{{$product->id}}/destroy" class="list-group-item">Delete Product</a>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>