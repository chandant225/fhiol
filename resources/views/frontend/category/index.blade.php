<x-app-layout>
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Products</li>
            </ol>
            <h2>Products</h2>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    {{-- <section class="productMain"> --}}
    <div class="container">
        <div class="row">
            @foreach($categories as $category)
            <div class="col-md-12">
                <x-frontend.category-card :category="$category" reversed="{{ ($loop->iteration % 2) == 0 ? true : false }}"></x-frontend.category-card>
            </div>
            @endforeach
        </div>
    </div>
    {{-- </section> --}}
</x-app-layout>
