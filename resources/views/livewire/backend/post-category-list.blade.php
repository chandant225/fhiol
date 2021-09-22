<x-box class="border-0 shadow rounded">
    <table class="table">
        <thead>
            <tr class="bg-light">
                <td>Name</td>
                <td>Slug</td>
                <td>Posts</td>
                <td class="text-right"></td>
            </tr>
        </thead>
        <tbody>
            @foreach ($postCategories as $postCategory)
            <tr>
                <td>{{ $postCategory->name }}</td>
                <td>{{ $postCategory->slug }}</td>
                <td>{{ $postCategory->posts_count }}</td>
                <td class="text-right">
                    @if($postCategory->slug != 'uncategorized')
                    <button type="button" wire:click="$emit('editPostCategory', '{{ $postCategory->slug }}')" class="btn btn-success btn-sm">Edit</button>
                    <button type="button" class="btn btn-danger btn-sm" wire:click="trash('{{ $postCategory->slug }}')" onclick="confirm('Are you sure to delete category?') || event.stopImmediatePropagation()">Delete</button>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-box>
