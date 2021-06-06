<style>
    .video-carousel .item-video {
        --video-carousel-aspect-ratio: 16/9;
        text-align: center;
        position: relative;
        height: 0;
        padding-bottom: calc(100% / (var(--video-carousel-aspect-ratio)));
        border: 4px solid #ffffff;
    }

    .video-carousel .item-video .owl-video-wrapper {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .video-carousel .item-video .owl-video-tn {
        background-size: cover;
    }

    /* Navigation buttons */
    .owl-theme .owl-nav button.owl-prev,
    .owl-theme .owl-nav button.owl-next {
        color: #869791;
        background-color: #fff;
        padding: 10px 15px !important;
        box-shadow: 1px 1px 5px rgb(0 0 0 / 20%)
    }

    .owl-theme .owl-nav button.owl-prev:hover,
    .owl-theme .owl-nav button.owl-next:hover {
        background-color: #ffffff;
        color: var(--theme-color);
    }

    .owl-theme .owl-nav button.owl-prev .icon,
    .owl-theme .owl-nav button.owl-next .icon {
        width: 1rem;
        height: 1rem;
    }

    .owl-theme .owl-nav .owl-prev {
        position: absolute;
        left: -20px;
        top: 49%;
    }

    .owl-theme .owl-nav .owl-next {
        right: 0;
        position: absolute;
        right: -20px;
        top: 49%;
    }

</style>
<section style="background-color: #f5f5f5;
 background-image: linear-gradient(0deg ,#ed2e36,#ed2e36),linear-gradient(0deg,#fff,#fff),linear-gradient(0deg,#f5f5f5,#f5f5f5);
 background-size: 100% 30%,100% 50%,100% 100%;
 background-repeat: no-repeat;
 background-position: bottom;">
    <div class="container py-5">
        <h2 class="text-center" style="font-size: 1.8rem; font-weight: 600; color: #000;">About Better</h2>
        <div class="text-center" style="color: #808080; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
            Better provides the varieties of best quality home appliances in Nepal that truly enhance your cooking experience and make your life easier & better.
            we are WhatsApp away +977 9801872000
        </div>

        <div class="my-5" style="max-width: 700px; margin-left: auto; margin-right: auto; box-shadow: 1px 0px 10px 2px rgba(211,211,211,0.66);">
            <div class="video-carousel owl-carousel owl-theme">
                <div class="item-video" data-merge="1"><a class="owl-video" href="https://www.youtube.com/watch?v=lGi_yArSZPQ"></a></div>
                <div class="item-video" data-merge="2"><a class="owl-video" href="https://www.youtube.com/watch?v=RfazNSpjKkM"></a></div>
            </div>
        </div>
    </div>
</section>
@push('scripts')
<script>
    $(document).ready(function() {
        $('.video-carousel').owlCarousel({
            items: 1
            , merge: true
            , loop: true
            , margin: 10
            , video: true
            , dots: false
            , nav: true
            , navText: [
                '<span class="icon fa fa-chevron-left"></span>'
                , '<span class="icon fa fa-chevron-right"></span>'
            , ]
        });
    });

</script>
@endpush
