@extends('products.layout');

@section('content')
<div class="row">
    <div class="col-lg-12 mb-3 mt-3 d-flex justify-content-between align-items-center">
        <h2>Show Product</h2>
        <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Item Name :- </strong>{{ $product->item_name }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Category :- </strong>{{ $product->category }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Quantity :- </strong>{{ $product->quantity_on_hand }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Reorder Level :- </strong>{{ $product->reorder_level }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Minimum Level :- </strong>{{ $product->minimum_level }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Maximum Level :- </strong>{{ $product->maximum_level }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Supplier Name :- </strong>{{ $product->supplier_name }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Contact :- </strong>{{ $product->contact }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Unit Cost :- </strong>{{ $product->unit_cost }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Total Cost :- </strong>{{ $product->total_value }}
        </div>
    </div>
</div>
@endsection