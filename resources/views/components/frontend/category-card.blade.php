<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="{{ $category->image ? $category->imageUrl() : image_placeholder_url() }}" alt="" style="max-height: 200px;">
        </div>
        <div class="col-md-8">
            <div class="card-body d-flex flex-column h-100">
                <h5 class="card-title"><a href="{{ route('products.index', ['category_id' => $category->id]) }}" style="color: initial; text-decoration:none">{{ $category->name }}</a></h5>
                <p class="card-text flex-grow-1">{{ $category->description }}</p>
                <div>
                    <a href="{{ route('products.index', ['category_id' => $category->id]) }}" class="btn btn-sm btn-theme-primary d-inline-block">View Products</a>
                </div>
            </div>
        </div>
    </div>
</div>
