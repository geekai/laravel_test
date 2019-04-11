@extends('layouts.main')
@section('test')
<div class="row">
    <div class="col-sm-12">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}  
            </div>
        @endif
        <h1 class="display-3">Products</h1>
        <!--Search box here -->
        @include('layouts.search', ['url'=>'products'])
        <!--Search box end -->
        <br/>
        <!--Product table-->
        <table class="table table-striped">
            <thead>
                <tr>
                  <td>ID</td>
                  <td>Name</td>
                  <td>Type</td>
                  <td>Price</td>
                  <td>Barcode</td>
                  <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                @if (count($products) > 0)
                    @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->type}}</td>
                        <td>{{ number_format($product->price,2) }}</td>
                        <td>{{$product->barcode}}</td>
                        <td>
                            <a href="{{ route('products.edit',$product->id)}}" class="btn btn-primary khongtest_button">Edit</a>
                            <form action="{{ route('products.destroy', $product->id)}}" method="post">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-danger khongtest_button" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan = 6>NO RESULTS FOUND...</td>
                    </tr>
                @endif
                
            </tbody>
        </table>
        <!--Product table end-->
        <!--Paginate link-->
        {{ $products->links() }}
        <!--Paginate link end-->
        <br/>
        <a href="{{ route('products.create')}}" class="btn btn-primary">Create a new product</a>
    <div>
</div>
@endsection