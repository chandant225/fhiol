<?php

Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});

Breadcrumbs::for('contact-us', function ($trail) {
    $trail->parent('home');
    $trail->push('Contact Us', route('contact-us.index'));
});

Breadcrumbs::for('products', function ($trail) {
    $trail->parent('home');
    $trail->push('Products', route('products.index'));
});

Breadcrumbs::for('product-category', function ($trail, $category) {
    $trail->parent('products');
    $trail->push($category->name, route('products.index', ['category_id' => $category->id]));
});

Breadcrumbs::for('product', function ($trail, $product) {
    if ($product->category) {
        $trail->parent('product-category', $product->category);
    } else {
        $trail->parent('products');
    }
    $trail->push($product->name);
});

Breadcrumbs::for('stores', function ($trail) {
    $trail->parent('home');
    $trail->push('Stores', route('stores.index'));
});

Breadcrumbs::for('page', function ($trail, $title) {
    $trail->parent('home');
    $trail->push($title);
});
