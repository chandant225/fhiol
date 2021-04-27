<div class="product">
    <div class="row">
        <div class="col-md-4">
            <img class="prd_item" src="{{ $product->featuredImage->imageUrl('thumb') }}">
        </div>
        <!--  -->
        <div class="col-md-8 product_right_tag  ">
            <h3><a class="product__name text-dark-gray" href="{{ route('products.show', $product) }}" title="{{ $product->name }}">{{ $product->name }}</a></h3>
            <div class="grid-link__meta">
                <p>Donec vitae hendrerit arcu, sit amet faucibus nisl....</p>
                <div class="product_price">
                    <div class="grid-link__org_price">
                        <span class="money">{{ priceUnit() }} {{ $product->currentPrice() }}</span>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>