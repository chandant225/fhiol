@extends('frontend.layouts.app')

@section('content')
<div class="container py-3">
    <div class="row">
        <div class="col-md-3">
            <h4 class="text-dark-gray">Filters</h4>

            <x-frontend.partials.block-title-box title="Product Categories" />

            <style>
                .product__category__list {}

                .product__category__list li {}

                .product__category__list li::before {}

                .product__category__list li a {
                    text-decoration: none;
                    display: flex;
                    padding: 0 5px 5px 0;
                    color: var(--dark-gray);
                }

                .product__category__list li a::before {
                    color: rgb(153, 153, 153);
                    content: "❖";
                    margin-right: 10px;
                }

                .product__category__list li a::after {
                    content: '\203A';
                    margin-left: auto;
                    font-weight: 600;
                    color: rgb(153, 153, 153);
                }

            </style>
            <ul class="product__category__list my-3">
                <li>
                    <a href="#">Mixer & Grinder</a>
                </li>
                <li class="item">
                    <a href="#">Rice Cooker
                        <span class="float-right"></span>
                    </a>
                </li>
                <li class="item">
                    <a href="#">Washing Machine</a>
                </li>
                <li class="item">
                    <a href="#">Refrigenator</a>
                </li>
                <li class="item">
                    <a href="#">Irons</a>
                </li>
                <li class="item">
                    <a href="#">Hair Dryer</a>
                </li>
            </ul>

            <div class="my-4"></div>

            <x-frontend.partials.block-title-box title="Filter By Price" />
            <form action="" class="form">
                <div class="d-flex my-3">
                    <select name="" id="" class="custom-select rounded-0">
                        <option value="min">MIN</option>
                        <option value="max">MAX</option>
                    </select>
                    <input type="text" class="form-control rounded-0 ml-md-4" placeholder="Rs. xxx">
                </div>
                <button class="btn btn-danger btn-sm bg-theme-color rounded-0 px-3 px-md-4">Filter</button>
            </form>

        </div>
        <div class="col-md-9">
            <div>
                <h4 class="section-text__dark__gray">Our Products</h4>
            </div>
            <section class="">
                <div class="row">
                    <div class="col-md-4">
                        <x-product-card></x-product-card>
                    </div>
                    <div class="col-md-4">
                        <x-product-card></x-product-card>
                    </div>
                    <div class="col-md-4">
                        <x-product-card></x-product-card>
                    </div>
                    <div class="col-md-4">
                        <x-product-card></x-product-card>
                    </div>
                    <div class="col-md-4">
                        <x-product-card></x-product-card>
                    </div>

                    <!-- col-md-3 -->
                    <div class="col-md-4">
                        <div class="item-box">
                            <div class="new_item">
                                <img src="{{ asset('theme') }}/images/coffe_maker2.jpg">
                            </div>
                            <div class="category_text">
                                <ul>
                                    <li>6 Variable Browning Settings</li>
                                    <li> Auto Pop-up and Auto Shut Off </li>
                                    <li> Mid-Cycle Cancel Function </li>
                                    <li> Cool Touch Body & Crump Tray </li>
                                </ul>
                            </div>

                        </div>

                    </div>
                    <!-- col-md-3 -->
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
