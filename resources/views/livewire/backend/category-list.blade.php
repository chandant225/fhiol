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
                    <livewire:backend.category-switch :category="$category" />
                </td>
                <td>
                    <a href="#" class="btn btn-success  btn-sm">Edit</a>
                    <form action="#">
                        @csrf
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-box>
