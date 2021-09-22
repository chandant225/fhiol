<x-app-layout>
    <x-slot name="siteTitle">
        {{ __('Catalogues') }} | {{ siteName() }}
    </x-slot>

    <x-frontend.partials.page-title>
        <x-slot name="title">
            <h1 class="text-4xl font-semibold text-gray-800 leaing-8 tracking-wide">{{ __('Catalogues') }}</h1>
        </x-slot>
        <x-slot name="breadcrumbs">
            {{ Breadcrumbs::render('catalogues', $page->title ?? null) }}
        </x-slot>
    </x-frontend.partials.page-title>

    <div class="container mx-auto">
        <div class="container py-5">
            <table id="catalogues" class="table w-100">
                <thead>
                    <tr>
                        <td>#</td>
                        <td>Title</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($catalogues as $catalogue)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $catalogue->title }}</td>
                        <td>
                            <a class="btn btn-link" href="{{ $catalogue->fileUrl() }}">View</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @push('scripts')
    <script>
        $(document).ready(function() {
            $('#catalogues').DataTable({
                // 'ordering': false,
                "order": []
                , 'columnDefs': [{
                    "targets": [-1]
                    , "orderable": false
                }]
            });
        });

    </script>
    @endpush
</x-app-layout>
