<div class="product__wrapper mb-4">
    <div class="product__image__wrapper">
        {{-- <img class="" src="{{ asset('theme') }}/images/baltra_iron.jpg" alt="{{ __('Product one') }}"> --}}
        <img class="" src="{{ $product->featuredImage->imageUrl('thumb') }}" alt="{{ __('Product one') }}">
        <span class="product__badge sale__badge">Sale !</span>
        <span class="product__badge new__badge">New</span>
    </div>
    <div class="product__info__wrapper">
        <h1><a href="{{ route('products.show', $product) }}" class="product__name text-dark-gray">{{ $product->name }}</a></h1>
        <h6 class="product__subtitle ">Adjustable Temperature Control</h6>
        <h4>
            <span _ngcontent-serverapp-c12="" class="product__price text-dark-gray">{{ priceUnit() }} {{ $product->currentPrice() }}</span>
            <span _ngcontent-serverapp-c12="" class="product__old__price">{{ priceUnit() }} 1190</span>
        </h4>
        <div class="d-flex mt-3">
            <a href="{{ route('products.show', $product) }}" class="btn btn-danger text-uppercase product__button view__more__info__btn rounded-0 mr-3 px-3">Quick View</a>
            <a href="{{ route('products.show', $product) }}" class="btn btn-success text-uppercase product__button rounded-0 w-full px-3">More</a>
        </div>
        <div class="my-1"></div>
    </div>
</div>
