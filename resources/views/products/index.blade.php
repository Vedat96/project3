<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">

		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						All products <a href="/products/create" class="btn btn-success" style="float: right;">Add Product</a>
					</div>
					<div class="card-body">
						@if(Session::has('product_created'))
							<div class="alert alert-success" role="alert">
								{{Session::get('product_created')}}
							</div>
						@endif
						@if(Session::has('product_deleted'))
							<div class="alert alert-success" role="alert">
								{{Session::get('product_deleted')}}
							</div>
						@endif
						<table class="table table-striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>Title</th>
									<th>Description</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($products as $product)
								<tr>
									<td>{{$product->id}}</td>
									<td>{{$product->title}}</td>
									<td>{{$product->description}}</td>
									<td>
										<a href="/products/{{$product->id}}" class="btn btn-info">Details</a>
										<a href="/products/{{$product->id}}/edit" class="btn btn-success">Edit</a>
										<a href="/products/{{$product->id}}/destroy" class="btn btn-danger">Delete</a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>