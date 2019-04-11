@extends('layouts.main')
@section('test')
<div class="row">
	<div class="col-sm-6 offset-sm-2">
	    <h1 class="display-3">Edit a product</h1>
	  	<div>
	    	@if ($errors->any())
	      	<div class="alert alert-danger">
	        	<ul>
	            @foreach ($errors->all() as $error)
	              <li>{{ $error }}</li>
	            @endforeach
	        	</ul>
	      	</div><br />
	    	@endif
	    	<!--Edit Product From-->
	      	<form method="post" action="{{ route('products.update', $product->id) }}">
	          	@csrf
	          	@method('PATCH')
	          	<div class="form-group">    
	              	<label for="name">Name:</label>
	              	<input type="text" class="form-control" name="name" value="{{$product->name}}" />
	          	</div>

	          	<div class="form-group">
	        	    <label for="type">Type:</label>
	              	<input type="text" class="form-control" name="type" value="{{$product->type}}" />
	          	</div>
	          	<div class="form-group">
	              	<label for="price">Price:</label>
	              	<input type="text" class="form-control" name="price" value="{{$product->price}}" />
	          	</div>
	          	<div class="form-group">
	              	<label for="barcode">Barcode:</label>
	              	<input type="text" class="form-control" name="barcode" value="{{$product->barcode}}" />
	          	</div>                       
	          	<button type="submit" class="btn btn-primary">Submit</button>
	      	</form>
	      	<!--Edit Product From End -->
	  </div>
	</div>
</div>

@endsection