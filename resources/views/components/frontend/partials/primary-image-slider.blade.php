    <style>
        .primary-image-slide {
            background-color: #000;
            color: #fff;
        }

        .primary-image-slide .slide-left {
            padding: 25px 20%;
        }

        .primary-image-slide .slide-left .title {
            font-size: 2.5rem;
            font-weight: 500;
            line-height: 1.5;
        }

        .primary-image-slide .slide-left .description {
            color: #808080;
        }

        .primary-image-slide .slide-left .action-button {
            display: inline-block;
            margin-top: 40px;
            text-decoration: none;
            border: 1px solid var(--theme-color);
            padding: 5px 10px;
            color: #fff;
            background-color: transparent;
            transition: 250ms all;
        }

        .primary-image-slide .slide-left .action-button:hover {
            color: #fff;
            background-color: var(--theme-color);
        }

        .primary-image-slide .image-wrapper {
            --primary-image-slide-aspect-ratio: 4/3;
            text-align: center;
            position: relative;
            height: 0;
            padding-bottom: calc(100% / (var(--primary-image-slide-aspect-ratio)));
        }

        .primary-image-slide .image-wrapper>img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

    </style>
    <div class="primary-image-slider owl-carousel">
        @foreach ($slides as $slide)
        <div class="primary-image-slide">
            <div class="row">
                <div class="col-md-6">
                    <div class="h-100 d-flex" style="align-items: center; padding: 20px;">
                        <div class="slide-left">
                            <h1 class="title">{{ $slide->title }}</h1>
                            <div class="my-3" style="width: 30%; height: 3px; background-color: var(--theme-color);"></div>
                            @if($slide->description)
                            <p class="description">{{ $slide->description }}</p>
                            @endif
                            @if ($slide->action_link)
                            <a class="action-button" href="{{ $slide->action_link }}" @if($slide->open_in_new_tab) target="_blank" @endif>{{ $slide->action_button_text ?? 'Shop Now' }}</a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-6 bg-white pl-3 pb-3">
                    <div class="image-wrapper">
                        <img src="{{ $slide->image_url }}" alt="{{ $slide->title }}">
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @push('scripts')
    <script>
        $(document).ready(function() {
            $(".primary-image-slider").owlCarousel({
                items: 1
                , loop: true
                , autoplay: true
                , dots: false
            });
        });

    </script>

    @endpush
