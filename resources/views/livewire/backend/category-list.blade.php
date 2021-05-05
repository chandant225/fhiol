<x-box class="border-0 shadow rounded">
    <table class="table">
        <thead>
            <tr class="bg-light">
                <td>Name</td>
                <td>Slug</td>
                <td class="text-center">Status</td>
                <td class="text-center">Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td>{{ $category->slug }}</td>
                <td class="text-center">
                    <livewire:backend.category-switch :category="$category" :key="$category->id">
                </td>
                <td class="text-right">
                    <button type="button" wire:click="$emit('editCategory', {{ $category->id }})" class="btn btn-success btn-sm">Edit</button>
                    <button type="button" class="btn btn-danger btn-sm" wire:click="trash('{{ $category->id }}')" onclick="confirm('Are you sure to delete category?') || event.stopImmediatePropagation()">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-box>
