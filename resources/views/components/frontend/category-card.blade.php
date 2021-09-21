<div class="category__card">
    <div class="row @if($reversed) flex-md-row-reverse @endif">
        <div class="col-md-6">
            <a href="{{ route('products.index', ['category_id' => $category->id]) }}">
                <img class="img-fluid shadow" src="{{ $category->image ? $category->imageUrl() : '/assets/images/category-placeholder.png' }}" alt="{{ $category->name }}">
                {{-- <img src="{{ $category->image ? $category->imageUrl() : image_placeholder_url() }}" alt="" style="max-height: 200px;"> --}}
            </a>
        </div>
        <div class="col-md-6">
            <div class="card-body py-3">
                <h1 class="mt-md-4"><a class="category__title" href="{{ route('products.index', ['category_id' => $category->id]) }}">{{ $category->name }}</a></h1>
                <p class="category__subtitle">SWISS MADE EDOF IOL</p>
                <div class="divider"></div>
                <p class="card-text font-poppins short__description">{{ $category->description }}</p>
                <div>
                    <a href="{{ route('products.index', ['category_id' => $category->id]) }}" class="btn btn-sm btn-theme-primary d-inline-block py-3 px-4 font-poppins bg-white">View Products</a>
                </div>
            </div>
        </div>
    </div>
</div>
