@extends('products.layout');

@section('content')
    <div class="row">
        <div class="col-lg-12 mb-3 mt-3 d-flex justify-content-between align-items-center">
            <h2>Product Information</h2>
            <a href="{{ route('products.create') }}" class="btn btn-success">Create New Product</a>
        </div>
    </div>

    @if ($message=Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Item Name</th>
                <th>Category</th>
                <th>Quantity</th>
                <th>Reorder Level</th>
                <th>Minimum Lavel</th>
                <th>Maximum Level</th>
                <th>Supplier Name</th>
                <th>Contact</th>
                <th>Unit Cost</th>
                <th>Total Value</th>
                <th width="280px">Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->item_name }}</td>
                    <td>{{ $product->category }}</td>
                    <td>{{ $product->quantity_on_hand }}</td>
                    <td>{{ $product->reorder_level }}</td>
                    <td>{{ $product->minimum_level }}</td>
                    <td>{{ $product->maximum_level }}</td>
                    <td>{{ $product->supplier_name }}</td>
                    <td>{{ $product->contact }}</td>
                    <td>{{ $product->unit_cost }}</td>
                    <td>{{ $product->total_value }}</td>
                    <td>
                        <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                            <a href="{{ route('products.show',$product->id) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('products.edit',$product->id) }}" class="btn btn-primary">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection