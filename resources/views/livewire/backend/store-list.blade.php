<x-box class="border-0 rounded shadow-sm rounded">
    <div class="mb-3">
        <select wire:model="paginate" class="custom-select w-auto">
            <option value="15">15</option>
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="100">100</option>
        </select> records per page
    </div>
    <table class="table">
        <tr class="bg-light">
            <td>Name</td>
            <td>City</td>
            <td>Phone</td>
            <td></td>
        </tr>
        <tbody>
            @forelse($stores as $store)
            <tr>
                <td>
                    {{-- <a class="btn-link" href="{{ route('frontend.stores.show', $store) }}" target="_blank">{{ $store->name }}</a> --}}
                    {{ $store->name }}
                </td>
                <td>{{ $store->city }}</td>
                <td>{{ $store->phone }}</td>
                <td class="text-right">
                    <div>
                        <a type="button" class="text-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="svg-icon svg-baseline">
                                @include('svg.verticle-dots')
                            </span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('backend.stores.edit', $store) }}">Edit</a>
                            <form action="{{ route('backend.stores.destroy', $store) }}" onsubmit="return confirm('Are you sure to delete?')" method="POST" class="form-inline d-inline">
                                @csrf
                                @method('delete')
                                <button class="dropdown-item" type="submit">Delete</button>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="42" class="text-center font-italic text-danger">No Record Exists</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    <div class="d-flex justify-content-between py-3">
        <div class="mb-3 text-muted">
            Showing records {{ $stores->firstItem() }} - {{ $stores->lastItem() }} of {{ $stores->total() }}
        </div>
        {{ $stores->links() }}
    </div>
</x-box>
