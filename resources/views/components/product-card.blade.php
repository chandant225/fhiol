<div>
    <style>
        .product__wrapper {
            padding: 5px;
            border: 1px solid #e5e5e5;
            padding: 5px 15px 25px;
            transition: box-shadow .2s linear;
        }

        .product__wrapper:hover {
            box-shadow: 1px 1px 10px #ccc;
        }

        .product__image__wrapper {
            text-align: center;
            position: relative;

            position: relative;
            height: 0;
            padding-bottom: calc(100%/(var(--prooduct-image-aspect-ratio)));
        }

        .product__image__wrapper img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .product__badge {
            position: absolute;
            top: 10px;
            background-color: #000;
            color: #fff;
            text-align: center;
            font-size: 14px;
            padding: 2px 10px;
        }

        .product__badge.sale__badge {
            left: 0;
        }

        .product__badge.new__badge {
            background-color: var(--theme-color);
            right: 0;
        }


        .product__info__wrapper {
            padding: 5px 10px;
        }

        .product__name {
            font-size: 1.2rem;
            font-weight: 600;
        }

        .product__name:hover {
            text-decoration: none;
        }

        .product__subtitle {
            font-size: .9rem;
            font-weight: 400;
            color: #666;
        }

        .product__price {
            font-weight: 600;
            font-size: 1.2rem;
        }

        .product__old__price {
            font-weight: 600;
            font-size: .95rem;
            text-decoration: line-through;
            color: #837e7e;
        }

        .product__button {
            font-size: .9rem;
            letter-spacing: 1px;
        }

        .view__more__info__btn {
            background-color: var(--theme-color);
        }

    </style>
    <div class="product__wrapper mb-4">
        <div class="product__image__wrapper">
            <img class="" src="{{ asset('theme') }}/images/baltra_iron.jpg" alt="{{ __('Product one') }}">
            <span class="product__badge sale__badge">Sale !</span>
            <span class="product__badge new__badge">New</span>
        </div>
        <div class="product__info__wrapper">
            <h1><a href="#" class="product__name text-dark-gray">Vans Sk8-Hi MTE Shoes</a></h1>
            <h6 class="product__subtitle ">Adjustable Temperature Control</h6>
            <h4>
                <span _ngcontent-serverapp-c12="" class="product__price text-dark-gray">{{ priceUnit() }} 1190</span>
                <span _ngcontent-serverapp-c12="" class="product__old__price">{{ priceUnit() }} 1190</span>
            </h4>
            <div class="d-flex mt-3">
                <a href="#" class="btn btn-danger text-uppercase product__button view__more__info__btn rounded-0 mr-3 px-3">Quick View</a>
                <a href="#" class="btn btn-success text-uppercase product__button rounded-0 w-full px-3">More</a>
            </div>
            <div class="my-1"></div>
        </div>
    </div>
</div>
