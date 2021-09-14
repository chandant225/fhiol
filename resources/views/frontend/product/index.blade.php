<x-app-layout>
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <h2 class="text-center">
                <span>Products</span>
                <div class="title-left mt-4 border-0">
                    <h4>Foldable</h4>
                </div>
            </h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="productMain">
    <div class="container">
        <div class="row">
            @foreach($products as $product)
            <div class="col-md-3">
                <x-frontend.product.product-card :product="$product"></x-frontend.product.product-card>
            </div>
            @endforeach
        </div>
    </div>
    </section>
</x-app-layout>
