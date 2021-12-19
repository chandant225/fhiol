<x-app-layout>
    <section class="qualityassurance">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>About Us</li>
                    <li>Quality Certification</li>
                </ol>
                <h2>Quality Certification</h2>
            </div>
        </section><!-- End Breadcrumbs -->

        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 quality-img">
                    <img src="/theme/img/quality-1.png" alt="">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12">
                    <p>
                        Professor Fredrick Hollow AC,MB ChB (NZ), DO (LOND), FRCS, FRACO (9 April 1929-10 February
                        1993),a highly honored and influential eye surgeon in Australia,well known for his humanitarian
                        work in developing eye care facilities around the world,especially in developing
                        countries,envisioned the concept of a state of the art manufacturing facility of intraocular
                        lenses in a developing country.Having visited Nepal as a consultant to the World Health
                        Organization (WHO) in 1985,he was aware of the eye care needs of Nepal.
                        <br>

                        Dr.Sanduk Ruit M.D. FRACO,a highly skilled and respected surgeon in Nepal is the first Nepali
                        doctor to perform cataract surgery with intraocular lens implants.He has also pioneered the use
                        of microsurgical extra-capsular cataract extraction with posterior chamber lens implants.
                        <br>

                        Dr.Ruit had a special friendship with Prof. Fred and both shared the same outlook on
                        life,medical philosophies and vision of a world where no one is needlessly blind. In the early
                        1990s prof. Fred and Dr.Ruit,joined together to overcome the obstacles faced by Nepal by
                        building a state-of-the-art laboratory in kathmandu.
                        Fred had decided to work towards raising money needed to build high tech intraocular lens
                        manufacturing laboratories and the establishment of Eye care infrastructures with modern
                        operating facilities. one of the pioneer institutions involved in blindness prevention of the
                        world.
                        <br>
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Certification --}}
    <section class="certificate">
        <div class="container">
            <div class="title-left">
                <h4>Certification</h4>
            </div>
           <div class="popup-gallery">
               <a href="/theme/img/certifcates/fhiol-certificate.jpg">
                   <img src="/theme/img/certifcates/fhiol-certificate.jpg" alt="">
               </a>
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
