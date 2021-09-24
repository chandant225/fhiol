<?php

// Home

use function Ramsey\Uuid\v1;

Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});

// Products
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

// Posts
Breadcrumbs::for('posts', function ($trail) {
    $trail->parent('home');
    $trail->push('Publications', route('posts.index'));
});

Breadcrumbs::for('post-category', function ($trail, $category) {
    $trail->parent('posts');
    $trail->push($category->name, route('posts.index'));
});

Breadcrumbs::for('post', function ($trail, $post) {
    $trail->parent('post-category', $post->category);
    $trail->push($post->title);
});

// Catalogues
Breadcrumbs::for('catalogues', function ($trail) {
    $trail->parent('home');
    $trail->push('Catalogues');
});

// Stores
Breadcrumbs::for('stores', function ($trail) {
    $trail->parent('home');
    $trail->push('Stores', route('stores.index'));
});

// Page
Breadcrumbs::for('page', function ($trail, $title) {
    $trail->parent('home');
    $trail->push($title);
});

// Contact Us
Breadcrumbs::for('contact-us', function ($trail) {
    $trail->parent('home');
    $trail->push('Contact Us', route('contact-us.index'));
});