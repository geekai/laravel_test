@extends('layouts.main')
@section('test')
<div class="row">
	<div class="col-sm-6 offset-sm-2">
	    <h1 class="display-3">Create a product</h1>
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
	    	<!--Create Product From-->
	      	<form method="post" action="{{ route('products.store') }}">
	          	@csrf
	          	<div class="form-group">    
	              	<label for="name">Name:</label>
	              	<input type="text" class="form-control" name="name"/>
	          	</div>

	          	<div class="form-group">
	        	    <label for="type">Type:</label>
	              	<input type="text" class="form-control" name="type"/>
	          	</div>
	          	<div class="form-group">
	              	<label for="price">Price:</label>
	              	<input type="number" class="form-control" name="price" step="0.01" min="0"/>
	          	</div>
	          	<div class="form-group">
	              	<label for="barcode">Barcode:</label>
	              	<input type="text" class="form-control" name="barcode"/>
	          	</div>                       
	          	<button type="submit" class="btn btn-primary">Create product</button>
	      	</form>
	      	<!--Create Product From End-->
	  </div>
	</div>
</div>

@endsection