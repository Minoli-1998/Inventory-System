@extends('products.layout')

@section('content')
    <h1>Welcome</h1>
    <a href="{{ route('products.index') }}" class="btn btn-primary">Products</a>
@endsection