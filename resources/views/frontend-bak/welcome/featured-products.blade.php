 @if(count($featuredProducts))
 <section class="new_product">
     <div class="container">
         <div class="border-title">
             <h4 class="section-header__title"> {{ _('Featured Products') }}</h4>
         </div>
         <div class="row">
             @foreach ($featuredProducts as $product)
             <div class="col-md-3">
                 <x-frontend.product.product-card :product="$product"></x-frontend.product.product-card>
             </div>
             @endforeach
         </div>
     </div>
 </section>
 @endif
