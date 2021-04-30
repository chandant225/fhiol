<x-box class="border-0 shadow rounded">
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Slug</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td>{{ $category->slug }}</td>
                <td>
                    <livewire:backend.category-switch :category="$category" :key="$category->id">
                </td>
                <td>
                    <button type="button" wire:click="$emit('editCategory', {{ $category->id }})" class="btn btn-success btn-sm">Edit</button>
                    <button type="button" class="btn btn-danger btn-sm" wire:click="trash('{{ $category->id }}')" onclick="confirm('Are you sure to delete category?') || event.stopImmediatePropagation()">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-box>
