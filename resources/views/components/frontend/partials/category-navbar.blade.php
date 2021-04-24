<div style="border-bottom: 2px dotted #e5e5e5;">
    <nav class="category-nav navbar navbar-expand-sm navbar-light">
        <div class="container">
            <style>
                .category-nav .nav-item .nav-link {
                    padding: 10px 20px;
                    font-weight: 500;
                }

                .category-nav .nav-item .nav-link:hover,
                .category-nav .nav-item.active .nav-link {
                    color: #D10024;
                }

                .category-nav .nav-item .nav-link:first-of-type {
                    padding-left: 0;
                }

                .category-nav .nav-item .nav-link::after {
                    content: "";
                    display: block;
                    width: 0%;
                    height: 2px;
                    background-color: #D10024;
                    -webkit-transition: 0.2s all;
                    transition: 0.2s all;
                }

                .category-nav .nav-item .nav-link:hover::after,
                .category-nav .nav-item.active .nav-link::after {
                    width: 100%;
                }

                .no-scrollbar::-webkit-scrollbar {
                    display: none;
                }

            </style>
            <ul class="navbar-nav overflow-auto no-scrollbar">
                @foreach ($categories as $category)
                <li class="nav-item flex-shrink-0 @if($category->id == $activeCategoryId) active @endif">
                    <a class="nav-link" href="{{ route('products.index', ['category_id' => $category->id]) }}">{{ $category->name }}</a>
                </li>
                @endforeach
            </ul>
    </nav>
</div>
</div>
