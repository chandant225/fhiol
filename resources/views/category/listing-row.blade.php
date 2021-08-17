<tr>
    <td>
        @if($level == 1) @endif
        @if($level == 2) &nbsp; - - @endif
        {{ $category->name }}
    </td>
    <td>{{ $category->slug }}</td>
    <td class="text-center">
        <livewire:backend.category-switch :category="$category" :key="$category->id">
    </td>
    <td class="text-right">
        <a href="{{ route('backend.categories.edit', $category) }}" class="btn btn-success btn-sm">Edit</a>
        <form action="{{ route('backend.categories.destroy', $category) }}" onsubmit="return confirm('Are you sure to delete category?')" method="POST" class="d-inline">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
        </form>
    </td>
</tr>