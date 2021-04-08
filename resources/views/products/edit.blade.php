<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Product') }}
        </h2>
    </x-slot>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<div class="card">
					<div class="card-header">
						Edit product
					</div>
					<div class="card-body">
						@if(Session::has('product_updated'))
							<div class="alert alert-success" role="alert">
								{{Session::get('product_updated')}}
							</div>
						@endif
						<form method="POST" action="{{ route('products.update') }}">
				            {{ csrf_field() }}
	                		<input type="hidden" name="id" value="{{$product->id}}}">

				            <div class="form-group">
				                <label for="product-title">Title<span class="required">*</span></label>
				                <input   placeholder="Enter title"  
				                          id="product-title"
				                          required
				                          name="title"
				                          spellcheck="false"
				                          class="form-control"
				                          value="{{$product->title}}" 
				                           />
				            </div>


				            <div class="form-group">
				                <label for="product-description">Description</label>
				                <textarea placeholder="Enter description" 
				                          style="resize: vertical" 
				                          id="product-description"
				                          name="description"
				                          rows="5" spellcheck="false"
				                          class="form-control autosize-target text-left"
				                          >{{$product->description}}</textarea>
				            </div>

				            <div class="form-group">
				                <input type="submit" class="btn btn-success"
				                       value="Edit"/>
				            </div>
				        </form>
						<!-- <form method="GET" action="{{route('products.create')}}">
							@csrf
							<div class="form-group">
								<label for="title">Product title</label>
								<input type="text" 
										name="title" 
										class="form-control" 
										placeholder="Enter product title">
							</div>
							<div class="form-group">
								<label for="description">Product description</label>
								<textarea name="description" 
										class="form-control"
										placeholder="Enter product description" 
										rows="3">
								</textarea>		
							</div>
							<button type="submit" class="btn btn-success">Create Product</button>
						</form> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>
