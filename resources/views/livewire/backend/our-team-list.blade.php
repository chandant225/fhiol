<div class="container-fluid">
    <div class="mb-3">
        @if($sortMode)
        <button wire:click.prevsent="$set('sortMode', false)" class="btn btn-primary">Done</button>
        @else
        <button wire:click.prevsent="$set('sortMode', true)" class="btn btn-primary">Arrange Order</button>
        @endif
    </div>
    <div class="row" wire:sortable="sortData">
        @foreach ($ourTeams as $ourTeam)
        <div class="col-md-4" @if($sortMode) wire:sortable.item="{{ $ourTeam->id }}" wire:key="testimonial-{{ $ourTeam->id }}" @endif>
            <div class="card my-3 rounded d-flex">
                @if ($sortMode)
                <div class="card-header">
                    <button wire:sortable.handle type="button" class="btn btn-link"><i class="fas fa-arrows-alt"></i></button>
                    <span>Use this handle to move the card</span>
                </div>
                @endif
                <div class="card-body">
                    <p class="card-text">
                        {{ $ourTeam->content }}
                    </p>
                    <div class="d-flex">
                        <img class="mt-2" src="{{ $ourTeam->photoUrl() }}" alt="{{ $ourTeam->name }}" style="widht: 2rem; height: 2rem; border-radius: 2.5rem;">
                        <div class="ml-4">
                            <div style="font-size: .9rem; font-weight: 600; line-height: 1;">{{ $ourTeam->name }}</div>
                            <small class="font-italic">{{ $ourTeam->designation }}</small>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('backend.our-team.edit', $ourTeam) }}" class="btn btn-sm btn-success px-3">Edit</a>
                    <button wire:click="deleteRecord('{{ $ourTeam->id }}')" onclick="confirm('Are you sure to delete?') || event.stopImmediatePropagation()" class="btn btn-sm btn-danger px-3">Del</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    @if (!count($ourTeams))
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
