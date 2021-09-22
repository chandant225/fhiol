<div>
    <x-frontend.partials.block-title-box title="Product Categories" />

    <ul class="product__category__list my-3">
        @foreach ($categories as $category)
        <li>
            <a href="{{ route('products.index', ['category_id' => $category->id]) }}">{{ $category->name }}</a>
        </li>
        @endforeach
    </ul>
</div>
