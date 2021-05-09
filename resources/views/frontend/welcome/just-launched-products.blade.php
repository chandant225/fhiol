 @if(count($newProducts))
 <section class="new_product">
     <div class="container">
         <div class="border-title">
             <h4 class="section-header__title"> {{ __('Just Launched') }}</h4>
         </div>
         <div class="row">
             @foreach ($newProducts as $product)
             <div class="col-md-3">
                 <x-frontend.product.product-card :product="$product"></x-frontend.product.product-card>
             </div>
             @endforeach
         </div>
     </div>
 </section>
 @endif