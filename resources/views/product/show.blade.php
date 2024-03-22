@extends('layouts.app')

@section('template_title')
    {{ $product->name ?? __('Show') . " " . __('Product') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Product</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('products.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Name:</strong>
                            {{ $product->name }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Slug:</strong>
                            {{ $product->slug }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Short Description:</strong>
                            {{ $product->short_description }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Description:</strong>
                            {{ $product->description }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Regular Price:</strong>
                            {{ $product->regular_price }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Sale Price:</strong>
                            {{ $product->sale_price }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Sku:</strong>
                            {{ $product->SKU }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Stock Status:</strong>
                            {{ $product->stock_status }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Featured:</strong>
                            {{ $product->featured }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Quantity:</strong>
                            {{ $product->quantity }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Image:</strong>
                            {{ $product->image }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Images:</strong>
                            {{ $product->images }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Category Id:</strong>
                            {{ $product->category_id }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Brand Id:</strong>
                            {{ $product->brand_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
