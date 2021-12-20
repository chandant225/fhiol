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
            <div class="popup-gallery">
                @foreach($galleries as $gallery)
                    <a
                        href="{{ $gallery->image_url }}"
                        ><img
                            src="{{ $gallery->image_url }}"
                            width="250"
                            height="250"
                    /></a>
                @endforeach

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
