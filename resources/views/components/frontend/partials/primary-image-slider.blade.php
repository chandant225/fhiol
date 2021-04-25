<style>
    .primary-image-slide {
        background-color: red;
        --primary-image-slide-aspect-ratio: 16/4;
        text-align: center;
        position: relative;
        height: 0;
        padding-bottom: calc(100% / (var(--primary-image-slide-aspect-ratio)));
    }

    .primary-image-slide>img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

</style>
<div class="owl-carousel">
    @foreach ($slides as $slide)
    <div class="primary-image-slide">
        <img src="{{ $slide->image_url }}" alt="{{ $slide->title }}">
    </div>
    @endforeach
    <div class="primary-image-slide">
        <img src="{{ __('http://betterkitchen.test/theme/images/4.jpg') }}" alt="{{ __('') }}">
    </div>
</div>
@push('scripts')
<script>
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel({
            items: 1
            , loop: true
            , autoplay: true
        });
    });

</script>

@endpush
