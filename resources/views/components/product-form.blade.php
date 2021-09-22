<div>
    <form action="{{ $product->exists ? route('backend.products.update', $product) : route('backend.products.store') }}" method="post" class="form" enctype="multipart/form-data">
        @csrf
        @if($product->exists)
        @method('put')
        <input type="hidden" name="product_id" value="{{ $product->id }}">
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

                        <div class="col-md-12 form-group">
                            <label for="category_id">Subtitle</label>
                            <input type="text" name="sub_title" class="form-control {{ invalid_class('sub_title') }}" value="{{ old('sub_title', $product->sub_title) }}">
                            <x-invalid-feedback field="sub_title"></x-invalid-feedback>
                        </div>

                        <div class="col-md-12 form-group">
                            <label for="category_id">Video Url</label>
                            <input type="text" name="video_url" class="form-control {{ invalid_class('video_url') }}" value="{{ old('video_url', $product->video_url) }}">
                            <x-invalid-feedback field="video_url"></x-invalid-feedback>
                        </div>

                    </div>
                </x-box>

                <div class="my-3"></div>

                {{-- Product Overview --}}
                <x-box>
                    <label for="">Product Overview</label>
                    <textarea name="overview" id="overview" class="form-control {{ invalid_class('overview') }}" cols="30" rows="10">{{ old('overview', $product->overview) }}</textarea>
                    <x-invalid-feedback field="overview"></x-invalid-feedback>
                </x-box>

                <div class="my-3"></div>

                {{-- Product Detail --}}
                <x-box>
                    <label for="">Product Detail</label>
                    <textarea name="detail" id="detail" class="form-control {{ invalid_class('detail') }}" cols="30" rows="10">{{ old('detail', $product->detail) }}</textarea>
                    <x-invalid-feedback field="detail"></x-invalid-feedback>
                </x-box>

                <div class="my-3"></div>

                {{-- Product Specification|description --}}
                <x-box>
                    <label for="">Product Specification</label>
                    <textarea name="description" id="description" class="form-control {{ invalid_class('description') }}" cols="30" rows="10">{{ old('description', $product->description) }}</textarea>
                    <x-invalid-feedback field="description"></x-invalid-feedback>
                </x-box>

                <div class="my-3"></div>

                <x-box class="my-3">
                    <label for="">Downloads</label>
                    @foreach($product->downloads as $download)
                    <div class="col-md-12 download-preview-container">
                        <div class="d-flex my-3 bg-light rounded p-2">
                            @if($download->isImage())
                            <img src="{{ $download->downloadUrl() }}" alt="{{ $download->nicename }}" style="width: 150px; height: 100px;">
                            @else
                            <div style="width: 100px;">
                                @include('svg.file-icon')
                            </div>
                            @endif
                            <div class="p-2 pl-3">
                                <div>{{ $download->title }}</div>
                                <div class="my-2"></div>
                                @if($download->isImage())
                                <a class="btn btn-primary btn-sm" href="{{ $download->url }}" target="_blank"><span class="mr-2"><i class="fa fa-eye fa-lg"></i></span>View</a>
                                @endif
                                <a class="btn btn-secondary btn-sm" href="{{ $download->url }}" target="_blank" download><span class="mr-2"><i class="fa fa-download fa-lg"></i></span>Download</a>
                                <a class="delete-download-btn btn btn-danger btn-sm" data-download-id="{{ $download->id }}" href="#"><span class="mr-2"><i class="far fa-trash-alt fa-lg"></i></span>Delete Permanently</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="grey lighten-5 p-3" style="border: 2px dashed #286099;">

                        <div id="download-wrapper"></div>

                        <button type="button" id="download-field-plus-btn" class="btn btn-success btn-md z-depth-0"><span><i class="fa fa-plus"></i></span></button>
                    </div>
                </x-box>

            </div>
            {{-- End of col-md-8 --}}
            <div class="col-md-3">
                <x-box>
                    <button type="submit" class="btn btn-primary rounded-0 w-100 mx-0">{{ $product->exists ? 'Update' : 'Save' }}</button>
                    @if($product->exists)
                    <a href="{{ route('products.show', $product) }}" class="btn btn-outline-primary btn-sm rounded-0 w-100 z-depth-0 mx-0 mt-2" target="_blank">View</a>
                    @endif
                    <div class="text-muted mt-2">
                        Status: <span class="font-weight-bolder">{{ $product->status ? 'Active' : 'Inactive' }}</span>
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

                </x-box>

                <div class="my-3"></div>

                <x-box>
                    <div class="text-center">
                        @php
                        if ( $product->exists && $product->featuredImage ) {
                        $imageUrl = $product->featuredImage->imageUrl();
                        } else {
                        $imageUrl = 'https://dummyimage.com/600x600/f4f6f9/0011ff';
                        }
                        @endphp
                        <div class="position-relative">
                            <img id="productImagePreview" class="img-fluid" src="{{ $imageUrl }}" alt="" style="max-height: 300px;">
                            <input type="file" name="image" id="productImage" value="{{ old('image') }}" accept="image/*" hidden>
                            <label for="productImage" class="position-absolute" style="bottom: 0; left: 10px;padding: 5px 10px; border-radius: 5px; background-color: #24292e; color: #fff; font-size: 0.8em; cursor: pointer;">
                                <i class="fa fa-camera mr-2"></i> {{ $product->exists ? 'Change' : 'Choose' }} Product Image
                            </label>
                        </div>
                        @error('image')
                        <div class="text-left text-danger text-sm mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </x-box>

                <x-box class="mt-3">
                    <div class="text-center">
                        <img id="productBrandLogoPreview" class="img-fluid" src="{{ get_uploads_url($product->brand_logo) ?? image_placeholder_url() }}" alt="" style="max-height: 200px;">
                        <input type="file" name="brand_logo" id="productBrandLogo" accept="image/*" hidden>
                        <label for="productBrandLogo" class="mt-2" style="padding: 5px 10px; border-radius: 5px; background-color: #24292e; color: #fff; font-size: 0.8em; cursor: pointer;">
                            <i class="fa fa-camera mr-2"></i> {{ $product->exists ? 'Change' : 'Choose' }} Product Brand Logo
                        </label>
                        @error('brand_logo')
                        <div class="text-left text-danger text-sm mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </x-box>

                <x-box class="mt-3">
                    <div class="text-center">
                        <img id="productBannerImagePreview" class="img-fluid" src="{{ get_uploads_url($product->banner_image) ?? image_placeholder_url() }}" alt="" style="max-height: 200px;">
                        <input type="file" name="banner_image" id="productBannerImage" accept="image/*" hidden>
                        <label for="productBannerImage" class="mt-2" style="padding: 5px 10px; border-radius: 5px; background-color: #24292e; color: #fff; font-size: 0.8em; cursor: pointer;">
                            <i class="fa fa-camera mr-2"></i> {{ $product->exists ? 'Change' : 'Choose' }} Product Banner Image
                        </label>
                        @error('banner_image')
                        <div class="text-left text-danger text-sm mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </x-box>
            </div>
        </div>
    </form>

    @if($product->exists)
    <x-backend.product-images-uploader :product="$product" />
    @endif
</div>

@push('scripts')
<script>
    $(function() {
        $('#overview').summernote({
            placeholder: 'Product overview goes here...'
            , tabsize: 2
            , height: 250
            , toolbar: [
                ['style', ['style']]
                , ['font', ['bold', 'underline', 'clear']]
                , ['fontname', ['fontname']]
                , ['color', ['color']]
                , ['para', ['ul', 'ol', 'paragraph']]
                , ['table', ['table']]
                , ['insert', ['link', 'picture']]
                , ['view', ['fullscreen', 'codeview', 'help']]
            , ]
        , });

        $('#detail').summernote({
            placeholder: 'Product detail goes here...'
            , tabsize: 2
            , height: 250
            , toolbar: [
                ['style', ['style']]
                , ['font', ['bold', 'underline', 'clear']]
                , ['fontname', ['fontname']]
                , ['color', ['color']]
                , ['para', ['ul', 'ol', 'paragraph']]
                , ['table', ['table']]
                , ['insert', ['link', 'picture']]
                , ['view', ['fullscreen', 'codeview', 'help']]
            , ]
        , });

        $('#description').summernote({
            placeholder: 'Product description goes here...'
            , tabsize: 2
            , height: 400
        });

        var downloadsInput = `<div class="download-input-container border my-3 d-flex justify-content-between bg-light p-3">
                                <div>
                                    <input type="text" name="downloads[][title]" class="form-control rounded-0 d-inline" placeholder="Download Title">
                                </div>
                                <div class="align-self-center">
                                    <input type="file" name="downloads[][file]">
                                </div>
                                <button type="button" class="remove-download-btn btn btn-dark btn-md my-0"><span class="mr-2"><i class="fa fa-times fa-lg"></i></span>Remove</button>
                            </div>`;

        // Add Download
        $('#download-field-plus-btn').click(function() {
            $('#download-wrapper').append(downloadsInput);
        });

        // Remove Download
        $(document).on('click', '.remove-download-btn', function() {
            $(this).parent().remove();
        });

        // Delete Download file
        $('.delete-download-btn').click(function(e) {
            e.preventDefault();
            var id = $(this).data('download-id');
            var parent = $(this).parents('.download-preview-container');
            console.log('Download ID: ' + id);
            if (confirm('Are you sure to delete?')) {
                $.ajax({
                    type: "DELETE"
                    , url: "{{ route('backend.ajax.downloads.destroy') }}"
                    , data: {
                        id: id
                        , "_token": "{{ csrf_token() }}"
                    }
                    , dataType: "JSON"
                    , success: function(response) {
                        console.log('File Deleted');
                        parent.remove();
                    }
                });
            } else {
                return false;
            }
        });

    });


    // Featured Image Preview
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

    // Brand Logo Preview
    let productBrandLogo = document.getElementById('productBrandLogo');
    let productBrandLogoPreview = document.getElementById('productBrandLogoPreview');

    function productBrandLogoUrl(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                productBrandLogoPreview.setAttribute('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    productBrandLogo.addEventListener("change", function() {
        productBrandLogoUrl(this);
    });

    // Brand Banner Image Preview
    let productBannerImage = document.getElementById('productBannerImage');
    let productBannerImagePreview = document.getElementById('productBannerImagePreview');

    function productBannerImageUrl(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                productBannerImagePreview.setAttribute('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    productBannerImage.addEventListener("change", function() {
        productBannerImageUrl(this);
    });

</script>
@endpush
