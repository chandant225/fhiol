<div class="product__card mb-4">
    <div class="row">
        <div class="col-md-5">
            {{-- @dd($product) --}}
            @if($product->featuredImage)
            {{-- <img class="card-img-top" src="{{ $product->featuredImage->imageUrl('thumb') }}" alt="{{ $product->name }}"> --}}
            <img class="card-img-top" src="https://en.coneyecrystal.com.tw/upload/202107091412272.png" alt="{{ $product->name }}">
            @else
            <img class="card-img-top" src="/assets/images/image-placeholder.png" alt="{{ $product->name }}">
            @endif
        </div>
        <div class="col-md-7 d-flex align-items-center">
            <div class="card-body">
                <h5 class="card-title line-clamp-" title="{{ $product->name }}">
                <a class="product__title" href="{{ route('products.show', $product) }}">{{ $product->name }}</a>
            </h5>
            <div class="divider"></div>
                <p class="card-text short__description">A complete range of IOLs right from Basic PMMA to most advanced
                    IOLs like Toric & Multifocal on Hydrophilic & Hydrophobic platform. Aspheric
                    IOLs. </p>
                <a href="{{ route('products.show', $product) }}" class="btn btn-theme-primary">View Details</a>
            </div>
        </div>
    </div>
</div>
