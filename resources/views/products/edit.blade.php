@extends('products.layout');

@section('content')
    <div class="row">
        <div class="col-lg-12 mb-3 mt-3 d-flex justify-content-between align-items-center">
            <h2>Edit Product</h2>
            <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong>
            There were some problems with your input. 
            <br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update',$product->id) }}" method="POST" id="productForm">
        @csrf
        @method('PUT')
        <fieldset>
            <h3>Product Information</h3>
            <div class="form-group mb-2">
                <label for="item_name">Item Name</label>
                <input type="text" name="item_name" value="{{ $product->item_name }}" class="form-control" placeholder="Item Name">
            </div>
            <div class="form-group mb-2">
                <label for="category">Category</label>
                <input type="text" name="category" value="{{ $product->category }}" class="form-control" placeholder="Category">
            </div>
            <input type="button" name="next" class="next btn btn-info" value="Next" />
        </fieldset>
    
        <fieldset style="display: none;">
            <h3>Stock Levels</h3>
            <div class="form-group mb-2">
                <label for="quantity_on_hand">Quantity</label>
                <input type="number" name="quantity_on_hand" value="{{ $product->quantity_on_hand }}" class="form-control" placeholder="Quantity">
            </div>
            <div class="form-group mb-2">
                <label for="reorder_level">Reorder Level</label>
                <input type="number" name="reorder_level" value="{{ $product->reorder_level }}" class="form-control" placeholder="Reorder Level">
            </div>
            <div class="form-group mb-2">
                <label for="minimum_level">Minimum Level</label>
                <input type="number" name="minimum_level" value="{{ $product->minimum_level }}" class="form-control" placeholder="Minimum Level">
            </div>
            <div class="form-group mb-2">
                <label for="maximum_level">Maximum Level</label>
                <input type="number" name="maximum_level" value="{{ $product->maximum_level }}" class="form-control" placeholder="Maximum Level">
            </div>
            <input type="button" name="previous" class="previous btn btn-secondary" value="Previous" />
            <input type="button" name="next" class="next btn btn-info" value="Next" />
        </fieldset>

        <fieldset style="display: none;">
            <h3>Supplier Information</h3>
            <div class="form-group mb-2">
                <label for="supplier_name">Name</label>
                <input type="text" name="supplier_name" value="{{ $product->supplier_name }}" class="form-control" placeholder="Name">
            </div>
            <div class="form-group mb-2">
                <label for="contact">Contact</label>
                <input type="tel" name="contact" value="{{ $product->contact }}" class="form-control" placeholder="Contact">
            </div>
            <div class="form-group mb-2">
                <label for="lead_time">Lead Time</label>
                <input type="time" name="lead_time" class="form-control" placeholder="Lead Time">
            </div>
            <input type="button" name="previous" class="previous btn btn-secondary" value="Previous" />
            <input type="button" name="next" class="next btn btn-info" value="Next" />
        </fieldset>
    
        <fieldset style="display: none;">
            <h3>Cost Information</h3>
            <div class="form-group mb-2">
                <label for="unit_cost">Price</label>
                <input type="number" name="unit_cost" value="{{ $product->unit_cost }}" class="form-control" placeholder="Price">
            </div>
            <div class="form-group mb-2">
                <label for="total_value">Total Value</label>
                <input type="number" name="total_value" class="form-control" value="{{ $product->total_value }}" placeholder="Total Value">
            </div>
            <input type="button" name="previous" class="previous btn btn-secondary" value="Previous" />
            <input type="submit" class="btn btn-success" value="Submit" />
        </fieldset>
    </form>
    
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var fieldsets = document.querySelectorAll("form#productForm fieldset");
            var nextButtons = document.querySelectorAll(".next");
            var previousButtons = document.querySelectorAll(".previous");

            nextButtons.forEach(function(nextButton) {
                nextButton.addEventListener("click", function() {
                    var current_fs = this.closest("fieldset");
                    var next_fs = current_fs.nextElementSibling;

                    if (next_fs) {
                        current_fs.style.display = "none";
                        next_fs.style.display = "block";
                    }
                });
            });

            previousButtons.forEach(function(previousButton) {
                previousButton.addEventListener("click", function() {
                    var current_fs = this.closest("fieldset");
                    var previous_fs = current_fs.previousElementSibling;

                    if (previous_fs) {
                        current_fs.style.display = "none";
                        previous_fs.style.display = "block";
                    }
                });
            });
        });
    </script>
@endsection