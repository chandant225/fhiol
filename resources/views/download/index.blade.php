@extends('layouts.backend')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <div class="d-flex">
                    <h1>Downloads</h1>
                    <a class="btn btn-outline-primary btn-sm z-depth-0 align-self-center my-0 ml-3 py-1 waves-effect waves-light" href="{{ route('backend.downloads.create') }}">Add New</a>
                </div>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Downloads</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<div class="container-fluid pb-5">
    <div class="card shadow-none">
        <div class="card-body">
            <table class="table table-">
                <thead>
                    <tr class="bg-light">
                        <th>#</th>
                        <th>Title</th>
                        <th>In Downloads</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($downloads as $download)
                    <tr>
                        <td>{{ (($downloads->currentPage() -1) * $downloads->perPage()) + $loop->iteration }}</td>
                        <td>{{ $download->title }}</td>
                        <td>{{ $download->show_in_downloads ? 'Yes' : 'No' }}</td>
                        <td>
                            <button type="button" onclick="copyTextToClipboard(this)" onmouseout="resetCopied(this)" class="btn btn-link py-0" data-toggle="tooltip" data-placement="top" title="Copy Link" data-copy-text="https://url-here">
                                <i class="far fa-clone"></i>
                            </button>
                        </td>
                        <td class="text-right">
                            {{-- <a href="{{ route('backend.downloads.edit', $download) }}" class="btn btn-success btn-sm">Edit</a> --}}
                            <form action="{{ route('backend.ajax.downloads.destroy', ['id' => $download->id]) }}" onsubmit="return confirm('Are you sure to delete category?')" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $downloads->links() }}
            </div>
        </div>
    </div>
</div>
{{-- Temporary copy element --}}
<input type="text" id="copy-el" style="display: none;">
@push('scripts')
<script>
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })

    function copyTextToClipboard(element) {
        const el = document.getElementById("copy-el");
        el.value = element.dataset.copyText;
        el.style.display = "block";
        el.select();
        el.setSelectionRange(0, el.value.length);
        document.execCommand("copy");
        el.style.display = "none";
        $(element).tooltip('hide')
            .attr('data-original-title', 'Copied')
            .tooltip('show');
    }

    function resetCopied(element) {
        $(element).attr('data-original-title', 'Copy Link')
            .tooltip('hide')
            .tooltip('show');
    }

</script>
@endpush
@endsection
