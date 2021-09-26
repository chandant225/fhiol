<div class="hero-slider">
    @if(count($slides))
    <div class="row col-12 p-0 m-0">
        <div id="carouselExampleCaptions" class="carousel slide p-0" data-bs-ride="carousel">
            <div class="carousel-indicators">
                @foreach ($slides as $slide)
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $loop->index }}" class="@if($loop->iteration == 1) active @endif" aria-current="true"></button>
                @endforeach
            </div>
            <div class="carousel-inner">
                @foreach ($slides as $slide)
                <div class="carousel-item @if($loop->iteration == 1) active @endif" style="background-image: url({{ $slide->image_url }})">
                    {{-- <img src="{{ $slide->image_url }}" class="d-block w-100 " alt="{{ $slide->title }}"/> --}}
                    <div class="overlay">
                         <div class="carousel-caption d-none d-md-block">
                            <h5>{{ $slide->title }}</h5>
                             @if($slide->description)
                            <p class="description">{{ $slide->description }}</p>
                            @endif
                            @if ($slide->action_link)
                            <a class="action-button btn btn-theme-primary" href="{{ $slide->action_link }}" @if($slide->open_in_new_tab) target="_blank" @endif>{{ $slide->action_button_text ?? 'Shop Now' }}</a>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    @endif
</div>

