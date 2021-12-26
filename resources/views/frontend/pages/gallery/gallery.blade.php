<x-app-layout>
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Gallery</li>
            </ol>
            <h2>Gallery</h2>
        </div>
    </section>
    <!-- End Breadcrumbs -->
    <section class="my-5">
        <div class="container">
            <div class="popup-gallery text-center certificate">
                @forelse($galleries as $gallery)
                     <a href="{{ $gallery->image_url }}" style="text-decoration:none" class="mb-5">
                         <img  loading="lazy" src="{{ $gallery->thumbnail_url }}" alt="{{ $gallery->name }}">
                         @if($gallery->name)<h5 style="background: #333;padding: 10px 0;color:#eee;font-weight:700">{{$gallery->name }}</h5>@endif
                     </a>
                 @empty
                     <div class="text-danger text-info font-weight-bold">No Certificates</div>
                 @endforelse
            </div>
        </div>
    </section>
    @push('scripts')
    <script>
$(document).ready(function() {
	$('.popup-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-fade',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			// titleSrc: function(item) {
			// 	return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
			// }
		}
	});
});
    </script>
    @endpush
</x-app-layout>
