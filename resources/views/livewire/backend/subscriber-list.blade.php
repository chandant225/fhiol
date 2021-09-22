<x-box class="border-0 rounded shadow-sm">
    @if(count($subscribers))
    <div class="mb-3">
        <select wire:model="paginate" class="custom-select w-auto">
            <option value="15">15</option>
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="100">100</option>
        </select> records per page
    </div>
    <table class="table table-borderless">
        <thead class="bg-primary">
            <tr>
                <th><span class="mr-2"><i class="far fa-envelope"></i></span>Email</th>
                <th class="text-right"><span class="mr-2"><i class="far fa-clock"></i></span>Subscribed At</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($subscribers as $subscriber)
            <tr class="@if(($loop->iteration % 2) == 0) bg-light @endif">
                <td><a class="text-dark" href="mailto:{{ $subscriber->email }}">{{ $subscriber->email }}</a></td>
                <td class="text-right" title="{{ $subscriber->created_at->diffForHumans() }}">{{ $subscriber->created_at->isoFormat('lll') }}</td>
                <td>
                    <button class="btn btn-link text-danger" wire:click.prevent="trash('{{ $subscriber->id }}')" onclick="confirm('Are you sure to remove subscriber?') || event.stopImmediatePropagation()" title="Unsubscribe"><span><i class="fa fa-trash-alt"></i></span></button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @if($subscribers->hasPages())
    <div class="d-flex justify-content-center">
        {{ $subscribers->links() }}
    </div>
    @endif

    @else
    @include('partials.no-content')
    @endif
</x-box>
