@extends('products.layout');

@section('content')
    <div class="row">
        <div class="col-lg-12 mb-3 mt-3 d-flex justify-content-between align-items-center">
            <h2>Add New Product</h2>
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

    <form action="{{ route('products.store') }}" method="POST" id="productForm">
        @csrf
        <fieldset>
            <h3>Product Information</h3>
            <div class="form-group mb-2">
                <label for="item-name">Item Name</label>
                <input type="text" name="item-name" class="form-control" placeholder="Item Name">
            </div>
            <div class="form-group mb-2">
                <label for="category">Category</label>
                <input type="text" name="category" class="form-control" placeholder="Category">
            </div>
            <input type="button" name="next" class="next btn btn-info" value="Next" />
        </fieldset>
    
        <fieldset style="display: none;">
            <h3>Stock Levels</h3>
            <div class="form-group mb-2">
                <label for="stock-levels">Quantity</label>
                <input type="number" name="quantity" class="form-control" placeholder="Quantity">
            </div>
            <div class="form-group mb-2">
                <label for="reorder-level">Reorder Level</label>
                <input type="number" name="reorder-level" class="form-control" placeholder="Reorder Level">
            </div>
            <div class="form-group mb-2">
                <label for="minimum-level">Minimum Level</label>
                <input type="number" name="minimum-level" class="form-control" placeholder="Minimum Level">
            </div>
            <div class="form-group mb-2">
                <label for="maximum-level">Maximum Level</label>
                <input type="number" name="maximum-level" class="form-control" placeholder="Maximum Level">
            </div>
            <input type="button" name="previous" class="previous btn btn-secondary" value="Previous" />
            <input type="button" name="next" class="next btn btn-info" value="Next" />
        </fieldset>

        <fieldset style="display: none;">
            <h3>Supplier Information</h3>
            <div class="form-group mb-2">
                <label for="supplier-name">Name</label>
                <input type="text" name="supplier-name" class="form-control" placeholder="Name">
            </div>
            <div class="form-group mb-2">
                <label for="contact">Contact</label>
                <input type="tel" name="contact" class="form-control" placeholder="Contact">
            </div>
            <div class="form-group mb-2">
                <label for="lead-time">Lead Time</label>
                <input type="time" name="lead-time" class="form-control" placeholder="Lead Time">
            </div>
            <input type="button" name="previous" class="previous btn btn-secondary" value="Previous" />
            <input type="button" name="next" class="next btn btn-info" value="Next" />
        </fieldset>
    
        <fieldset style="display: none;">
            <h3>Cost Information</h3>
            <div class="form-group mb-2">
                <label for="price">Price</label>
                <input type="number" name="price" class="form-control" placeholder="Price">
            </div>
            <div class="form-group mb-2">
                <label for="total-value">Total Value</label>
                <input type="number" name="total-value" class="form-control" placeholder="Total Value">
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