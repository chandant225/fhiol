@extends('layouts.backend')

@section('content')
<div class="container py-2">
    
    <h4 class="h4-responsive py-4">{{ $title }}</h4>

    <form action="{{ route('backend.settings.code-injector.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card shadow-0 shadow-sm">
            <div class="card-body">

                <div class="form-group">
                    <x-form.label>Additional Header Code</x-form.label>
                    <textarea name="header_code" class="form-control html-editor" rows="5">{{ old('header_code', appSettings('header_code')) }}</textarea>
                </div>

                <div class="form-group">
                    <x-form.label>Additional Footer Code</x-form.label>
                    <textarea name="footer_code" class="form-control html-editor" rows="5">{{ old('footer_code', appSettings('footer_code')) }}</textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary px-4">Save</button>
                </div>
            </div>
        </div>
    </form>

</div>
@endsection