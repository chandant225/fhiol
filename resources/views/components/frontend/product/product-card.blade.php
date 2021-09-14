<div class="card product-card mb-4">
    {{-- @dd($product) --}}
    @if($product->featuredImage)
    <img class="card-img-top" src="{{ $product->featuredImage->imageUrl('thumb') }}" alt="{{ $product->name }}">
    @else
    <img class="card-img-top" src="/assets/images/image-placeholder.png" alt="{{ $product->name }}">
    @endif

    <div class="card-body">
        <h5 class="card-title line-clamp-" title="{{ $product->name }}">{{ $product->name }}</h5>
        <p class="card-text">A complete range of IOLs right from Basic PMMA to most advanced
            IOLs like Toric & Multifocal on Hydrophilic & Hydrophobic platform. Aspheric
            IOLs. </p>
        <a href="{{ route('products.show', $product) }}" class="btn btn-theme-primary">View Details</a>
    </div>
</div>
