<div class="container-fluid">
    <div class="mb-3">
        @if($sortMode)
        <button wire:click.prevsent="$set('sortMode', false)" class="btn btn-primary">Done</button>
        @else
        <button wire:click.prevsent="$set('sortMode', true)" class="btn btn-primary">Arrange Order</button>
        @endif
    </div>
    <div class="row" wire:sortable="sortTestimonials">
        @foreach ($testimonials as $testimonial)
        <div class="col-md-4" @if($sortMode) wire:sortable.item="{{ $testimonial->id }}" wire:key="testimonial-{{ $testimonial->id }}" @endif>
            <div class="card my-3 rounded d-flex">
                @if ($sortMode)
                <div class="card-header">
                    <button wire:sortable.handle type="button" class="btn btn-link"><i class="fas fa-arrows-alt"></i></button>
                    <span>Use this handle to move the card</span>
                </div>
                @endif
                <div class="card-body">
                    <p class="card-text">
                        {{ $testimonial->content }}
                    </p>
                    <div class="d-flex">
                        <img class="mt-2" src="{{ $testimonial->clientPhotoUrl() }}" alt="{{ $testimonial->client_name }}" style="widht: 2rem; height: 2rem; border-radius: 2.5rem;">
                        <div class="ml-4">
                            <div style="font-size: .9rem; font-weight: 600; line-height: 1;">{{ $testimonial->client_name }}</div>
                            <small class="font-italic">{{ $testimonial->client_title }}</small>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button wire:click="$emit('editTestimonial', '{{ $testimonial->id }}')" class="btn btn-sm btn-success px-3">Edit</button>
                    <button wire:click="$emit('deleteTestimonial', '{{ $testimonial->id }}')" onclick="confirm('Are you sure to delete?') || event.stopImmediatePropagation()" class="btn btn-sm btn-danger px-3">Del</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    @if (!count($testimonials))
    @include('partials.no-content')
    @endif

</div>
@push('styles')
<style>
    .draggable--over {
        border: 1px dashed #ccc;
        background-color: #fff;
    }

</style>
@endpush
