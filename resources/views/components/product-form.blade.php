<div>
    <form action="{{ $product->exists ? route('backend.products.update', $product) : route('backend.products.store') }}" method="post" class="form" enctype="multipart/form-data">
        @csrf
        @if($product->exists)
        @method('put')
        @endif
        <div class="row">
            <div class="col-md-9">
                <x-box>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <input type="text" name="name" class="form-control form-control-lg rounded-0 {{ invalid_class('name') }}" value="{{ old('name', $product->name) }}" placeholder="Product Name">
                            <x-invalid-feedback field="name"></x-invalid-feedback>
                        </div>

                        @if($product->exists)
                        <div class="col-md-12 form-group">
                            <script>
                                function toggleProductSlugInput() {
                                    productSlugInput = document.getElementById('product-slug');
                                    if (productSlugInput.style.display === "none") {
                                        productSlugInput.style.display = "block";
                                    } else {
                                        productSlugInput.style.display = "none";
                                    }
                                    return false;
                                }

                            </script>
                            <label for="slug" class="text-muted">Slug: {{ $product->slug }} <a href="#" onclick="return toggleProductSlugInput()">Edit</a></label>
                            <input type="text" name="slug" id="product-slug" class="form-control {{ invalid_class('slug') }}" value="{{ old('slug', $product->slug) }}" @if(!$product->exists) disabled @endif style="display: none;">
                            <x-invalid-feedback field="slug"></x-invalid-feedback>
                        </div>
                        @endif

                    </div>
                </x-box>

                <div class="my-3"></div>

                <x-box>
                    <textarea name="description" id="description" class="form-control {{ invalid_class('description') }}" cols="30" rows="10">{{ old('description', $product->description) }}</textarea>
                    <x-invalid-feedback field="description"></x-invalid-feedback>
                </x-box>

                <div class="my-3"></div>

                <x-box>
                    <div class="row">
                        <div class="col-md-12">
                            <style>
                                .product-details-nav {
                                    background-color: #fafafa;
                                }

                                .product-details-nav .nav-link {
                                    color: #2b5c86;
                                    padding: 15px 20px;
                                    border-bottom: 1px solid #ddd;
                                }

                                .product-details-nav .nav-link>i {
                                    font-size: 0.8rem;
                                    margin-right: 10px;
                                }

                                .product-details-nav .nav-link.active {
                                    background-color: #f1f1f1;
                                }

                            </style>
                            <div class="d-flex">
                                <div class="nav product-details-nav flex-column flex-shrink-0 border" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active" id="v-pills-general-tab" data-toggle="pill" href="#v-pills-general" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                        <i class="fa fa-wrench"></i>General
                                    </a>
                                    <a class="nav-link" id="v-pills-inventory-tab" data-toggle="pill" href="#v-pills-inventory" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                        <i class="fas fa-box-open"></i>Inventory
                                    </a>
                                    <a class="nav-link" id="v-pills-shipping-tab" data-toggle="pill" href="#v-pills-shipping" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                        <i class="fas fa-truck"></i>Shipping
                                    </a>
                                    <a class="nav-link" id="v-pills-advanced-tab" data-toggle="pill" href="#v-pills-advanced" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                        <i class="fas fa-cog"></i> Advanced
                                    </a>
                                </div>
                                <div class="tab-content flex-fill p-2" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-general" role="tabpanel" aria-labelledby="v-pills-general-tab">
                                        <div class="container-fluid">
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <x-form.form-group for="price">
                                                        <x-form.label class="required">Regular Price</x-form.label>
                                                        <x-fields.input type="number" name="price" :value="old('price', $product->price)" min="0" />
                                                    </x-form.form-group>
                                                </div>

                                                <div class="col-md-6">
                                                    <x-form.form-group for="sale_price">
                                                        <x-form.label>Sale Price</x-form.label>
                                                        <x-fields.input type="number" name="sale_price" :value="old('sale_price', $product->sale_price)" min="0" />
                                                    </x-form.form-group>
                                                </div>

                                                <div class="col-md-6">
                                                    {{-- <x-form.form-group for="sale_price_from" label="Sale Price From">
                                                        <x-fields.input type="datetime-local" name="sale_price_from" :value="old('sale_price_from', $product->sale_price_from ? $product->sale_price_from->format('Y-m-d\TH:i') : null)" />
                                                    </x-form.form-group> --}}
                                                </div>

                                                <div class="col-md-6">
                                                    {{-- <x-form.form-group for="sale_price_to" label="Sale Price To">
                                                        <x-fields.input type="datetime-local" name="sale_price_to" :value="old('sale_price_to', $product->sale_price_from ? $product->sale_price_to->format('Y-m-d\TH:i') : null)" />
                                                    </x-form.form-group> --}}
                                                </div>
                                            </div>
                                        </div>
                                        {{-- End of container-fluid --}}
                                    </div>
                                    {{-- <div class="tab-pane fade" id="v-pills-inventory" role="tabpanel" aria-labelledby="v-pills-inventory-tab">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <x-form.form-group label="Stock Management?">
                                                        <div class="custom-control custom-switch">
                                                            <input type="checkbox" name="manage_stock" class="custom-control-input" id="manage-stock-switch" value="1" @if(old('manage_stock', $product->manage_stock)) checked @endif>
                                                            <label class="custom-control-label" for="manage-stock-switch">Enable stock management at product level</label>
                                                        </div>
                                                    </x-form.form-group>
                                                </div>

                                                <div class="col-md-6">
                                                    <x-form.form-group label="Limited Stock?">
                                                        <div class="custom-control custom-switch">
                                                            <input type="checkbox" name="limited_stock" class="custom-control-input" id="limited-stock-switch" value="1" @if(old('limited_stock', $product->limited_stock)) checked @endif>
                                                            <label class="custom-control-label" for="limited-stock-switch">Show limited stock label</label>
                                                        </div>
                                                    </x-form.form-group>
                                                </div>

                                                <div class="col-md-6">
                                                    <x-form.form-group for="stock_quantity" label="Stock Quantity">
                                                        <x-fields.input type="number" name="stock_quantity" :value="old('stock_quantity', $product->stock_quantity)" />
                                                    </x-form.form-group>
                                                </div>

                                                <div class="col-md-6">
                                                    <x-form.form-group for="sku" label="SKU">
                                                        <x-fields.input type="text" name="sku" :value="old('sku', $product->sku)" />
                                                    </x-form.form-group>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    {{-- <div class="tab-pane fade" id="v-pills-shipping" role="tabpanel" aria-labelledby="v-pills-shipping-tab">
                                        <div class="container-fuuid">
                                            <div class="form-group">
                                                <x-form.label for="">Product Weight</x-form.label>
                                                <x-fields.input name="product_weight" class="form-control-sm" :value="old('product_weight', $product->product_weight)" />
                                                <small class="form-text text-muted">Weight in decimal with unit</small>
                                            </div>
                                            <div class="form-group">
                                                <x-form.label for="">Dimensions (in cm)</x-form.label>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <x-fields.input type="number" name="product_length" class="form-control-sm" :value="old('product_length', $product->product_length)" placeholder="Length" />
                                                    </div>
                                                    <div class="col-md-3">
                                                        <x-fields.input type="number" name="product_width" class="form-control-sm" :value="old('product_width', $product->product_width)" placeholder="Width" />
                                                    </div>
                                                    <div class="col-md-3">
                                                        <x-fields.input type="number" name="product_height" class="form-control-sm" :value="old('product_height', $product->product_height)" placeholder="Height" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    {{-- <div class="tab-pane fade" id="v-pills-advanced" role="tabpanel" aria-labelledby="v-pills-advanced-tab">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">Product Highlights</label>
                                                        <input name="product_highlights" class="form-control" multiple data-role="tagsinput" value="{{ old('product_highlights', $product->product_highlights) }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Purchase Note</label>
                                    <textarea name="purchase_note" class="form-control" cols="30" rows="5">{{ old('purchase_note', $product->purchase_note) }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
            </div> --}}
        </div>

</div>
</div>
</div>
</x-box>
{{-- End of details tab card --}}

<div class="my-2"></div>

<x-box>
    <label for="">Specifications</label>
    <div>
        @foreach ($specifications as $specification)
        <div class="document-input-container border my-3 d-flex justify-content-between white p-3">
            <div class="align-self-center">
                <input type="text" name="specifications[key][]" class="form-control" placeholder="Specification" value="{{ $specification->key }}">
            </div>
            <div>
                <input type="text" name="specifications[value][]" class="form-control" placeholder="Value" value="{{ $specification->value }}">
            </div>
            <button type="button" class="specfication-remove-btn btn btn-danger btn-md my-0 font-roboto"><span class="mr-2"><i class="fa fa-times fa-lg"></i></span>Remove</button>
        </div>
        @endforeach
        <div id="specification-wrapper"></div>
        <button type="button" id="specification-plus-btn" class="btn btn-success btn-md z-depth-0"><span><i class="fa fa-plus"></i></span> Add Item</button>
    </div>
</x-box>
</div>
{{-- End of col-md-8 --}}
<div class="col-md-3">
    <x-box>
        <button type="submit" class="btn btn-primary rounded-0 w-100 mx-0">{{ $product->exists ? 'Update' : 'Save' }}</button>
        @if($product->exists)
        Show link
        {{-- <a href="{{ route('frontend.products.show', $product) }}" class="btn btn-outline-primary btn-sm rounded-0 w-100 z-depth-0 mx-0" target="_blank">View</a> --}}
        @endif
        <div class="text-muted mt-2">
            Status: <span class="font-weight-bolder">Active</span>
        </div>
    </x-box>

    <div class="my-3"></div>

    <x-box>
        <div class="form-group">
            <label for="category_id" class="required">Product Category</label>
            <select name="category_id" class="custom-select rounded-0 {{ invalid_class('category_id') }}">
                <option value="">Select Category</option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}" @if(old('category_id', $product->category_id) == $category->id) selected @endif>{{ $category->name }}</option>
                @endforeach
            </select>
            <x-invalid-feedback field="category_id"></x-invalid-feedback>
        </div>

        <div class="form-group">
            {{-- <div class="form-check">
                <input class="form-check-input  {{ invalid_class('is_new') }}" name="is_new" type="radio" id="newCheck" value="1" @if($product->isMarkedNew()) checked @endif>
            <label class="form-check-label" for="newCheck">
                Mark as New Product
            </label>
        </div> --}}
        <div class="custom-control custom-checkbox">
            <input type="checkbox" name="is_new" class="custom-control-input {{ invalid_class('is_new') }}" id="is_new" value="1" @if($product->isMarkedNew()) checked @endif>
            <label class="custom-control-label" for="is_new">Mark as New Product</label>
            <x-invalid-feedback field="is_new"></x-invalid-feedback>
        </div>
</div>

<div class="form-group">
    <div class="custom-control custom-checkbox">
        <input type="checkbox" name="featured" class="custom-control-input {{ invalid_class('featured') }}" id="featured" @if($product->isFeatured()) checked @endif>
        <label class="custom-control-label" for="featured">Mark as Featured</label>
        <x-invalid-feedback field="featured"></x-invalid-feedback>
    </div>
</div>
</x-box>

<div class="my-3"></div>

<x-box>
    <div class="text-center">
        @php
        if ( $product->exists ) {
        $imageUrl = $product->featuredImage->imageUrl();
        } else {
        $imageUrl = 'https://dummyimage.com/600x600/f4f6f9/0011ff';
        }
        @endphp
        <div class="position-relative">
            <img id="productImagePreview" class="img-fluid" src="{{ $imageUrl }}" alt="" style="max-height: 300px;">
            <input type="file" name="image" id="productImage" value="{{ old('image') }}" accept="image/*" hidden>
            {{-- <label for="logoImage" class="position-absolute btn btn-primary" for="" >Select Product Image</label> --}}
            <label for="productImage" class="position-absolute" style="bottom: 0;
                                        left: 10px;
                                        padding: 5px 10px;
                                        border-radius: 5px;
                                        background-color: #24292e;
                                        color: #fff;
                                        font-size: 0.8em;
                                        cursor: pointer;">
                <i class="fa fa-camera mr-2"></i> {{ $product->exists ? 'Change' : 'Choose' }} Product Image
            </label>
        </div>
        @error('image')
        <div class="text-left text-danger text-sm mt-2">{{ $message }}</div>
        @enderror
        <script>
            let productImage = document.getElementById('productImage');
            let productImagePreview = document.getElementById('productImagePreview');

            function reloadProductImageUrl(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        productImagePreview.setAttribute('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
            productImage.addEventListener("change", function() {
                reloadProductImageUrl(this);
            });

        </script>
    </div>
</x-box>
</div>

<div class="col-md-12">
    <div class="form-group mt-3">
        <button type="submit" class="btn btn-success text-md ml-0 px-5">{{ $product->exists ? 'Update' : 'Save' }}</button>
    </div>
</div>

</div>
</form>

<script type="text/javascript" id="specification-input-template">
    <div class="document-input-container border my-3 d-flex justify-content-between white p-3">
        <div class="align-self-center">
            <input type="text" name="specifications[key][]" class="form-control" placeholder="Specification">
        </div>
        <div>
            <input type="text" name="specifications[value][]" class="form-control" placeholder="Value">
        </div>
        <button type="button" class="specfication-remove-btn btn btn-danger btn-md my-0 font-roboto"><span class="mr-2"><i class="fa fa-times fa-lg"></i></span>Remove</button>
    </div>

</script>

@if($product->exists)
<x-backend.product-images-uploader :product="$product" />
@endif
</div>

@push('scripts')
<script>
    $(function() {
        $('#description').summernote({
            placeholder: 'Product description goes here...'
            , tabsize: 2
            , height: 400
        });
    });

    var specificationTemplate = $('#specification-input-template');

    function addSpecificationInput() {
        $('#specification-wrapper').append(specificationTemplate.html());
    }

    $('#specification-plus-btn').click(function() {
        addSpecificationInput();
    });

    $(document).on('click', '.specfication-remove-btn', function() {
        $(this).parent().remove();
    });

</script>
@endpush
