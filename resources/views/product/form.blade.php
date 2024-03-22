<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="name" class="form-label">{{ __('Name') }}</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $product?->name) }}" id="name" placeholder="Name">
            {!! $errors->first('name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="slug" class="form-label">{{ __('Slug') }}</label>
            <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" value="{{ old('slug', $product?->slug) }}" id="slug" placeholder="Slug">
            {!! $errors->first('slug', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="short_description" class="form-label">{{ __('Short Description') }}</label>
            <input type="text" name="short_description" class="form-control @error('short_description') is-invalid @enderror" value="{{ old('short_description', $product?->short_description) }}" id="short_description" placeholder="Short Description">
            {!! $errors->first('short_description', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="description" class="form-label">{{ __('Description') }}</label>
            <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{ old('description', $product?->description) }}" id="description" placeholder="Description">
            {!! $errors->first('description', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="regular_price" class="form-label">{{ __('Regular Price') }}</label>
            <input type="text" name="regular_price" class="form-control @error('regular_price') is-invalid @enderror" value="{{ old('regular_price', $product?->regular_price) }}" id="regular_price" placeholder="Regular Price">
            {!! $errors->first('regular_price', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="sale_price" class="form-label">{{ __('Sale Price') }}</label>
            <input type="text" name="sale_price" class="form-control @error('sale_price') is-invalid @enderror" value="{{ old('sale_price', $product?->sale_price) }}" id="sale_price" placeholder="Sale Price">
            {!! $errors->first('sale_price', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="s_k_u" class="form-label">{{ __('Sku') }}</label>
            <input type="text" name="SKU" class="form-control @error('SKU') is-invalid @enderror" value="{{ old('SKU', $product?->SKU) }}" id="s_k_u" placeholder="Sku">
            {!! $errors->first('SKU', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="stock_status" class="form-label">{{ __('Stock Status') }}</label>
            <input type="text" name="stock_status" class="form-control @error('stock_status') is-invalid @enderror" value="{{ old('stock_status', $product?->stock_status) }}" id="stock_status" placeholder="Stock Status">
            {!! $errors->first('stock_status', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="featured" class="form-label">{{ __('Featured') }}</label>
            <input type="text" name="featured" class="form-control @error('featured') is-invalid @enderror" value="{{ old('featured', $product?->featured) }}" id="featured" placeholder="Featured">
            {!! $errors->first('featured', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="quantity" class="form-label">{{ __('Quantity') }}</label>
            <input type="text" name="quantity" class="form-control @error('quantity') is-invalid @enderror" value="{{ old('quantity', $product?->quantity) }}" id="quantity" placeholder="Quantity">
            {!! $errors->first('quantity', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="image" class="form-label">{{ __('Image') }}</label>
            <input type="text" name="image" class="form-control @error('image') is-invalid @enderror" value="{{ old('image', $product?->image) }}" id="image" placeholder="Image">
            {!! $errors->first('image', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="images" class="form-label">{{ __('Images') }}</label>
            <input type="text" name="images" class="form-control @error('images') is-invalid @enderror" value="{{ old('images', $product?->images) }}" id="images" placeholder="Images">
            {!! $errors->first('images', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="category_id" class="form-label">{{ __('Category Id') }}</label>
            <input type="text" name="category_id" class="form-control @error('category_id') is-invalid @enderror" value="{{ old('category_id', $product?->category_id) }}" id="category_id" placeholder="Category Id">
            {!! $errors->first('category_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="brand_id" class="form-label">{{ __('Brand Id') }}</label>
            <input type="text" name="brand_id" class="form-control @error('brand_id') is-invalid @enderror" value="{{ old('brand_id', $product?->brand_id) }}" id="brand_id" placeholder="Brand Id">
            {!! $errors->first('brand_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>