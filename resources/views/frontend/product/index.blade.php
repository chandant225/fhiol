<x-app-layout>
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <h2>
                <div>Products</div>
                <h4 class=""><span class="pb-1" style="color: #a1c4bc; border-bottom: 2px solid #dd6310;">{{ $filteredCategory ?? 'All Products'}}</span></h4>
            </h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="productMain">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                <div class="col-md-12">
                    <x-frontend.product.product-card :product="$product"></x-frontend.product.product-card>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</x-app-layout>
