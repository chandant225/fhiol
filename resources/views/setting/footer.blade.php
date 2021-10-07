@extends('layouts.backend')

@section('content')
<div class="container py-2">
    
    <h4 class="h4-responsive py-4">{{ $title }}</h4>

    <form action="{{ route('backend.settings.footer.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card shadow-0 shadow-sm">
            <div class="card-body">

                <div class="form-group">
                    <x-form.label>Footer Column One</x-form.label>
                    <textarea name="footer_column_one" class="form-control html-editor" rows="5">{{ old('footer_column_one', appSettings('footer_column_one')) }}</textarea>
                </div>

                <div class="form-group">
                    <x-form.label>Footer Column Two</x-form.label>
                    <textarea name="footer_column_two" class="form-control html-editor" rows="5">{{ old('footer_column_two', appSettings('footer_column_two')) }}</textarea>
                </div>

                <div class="form-group">
                    <x-form.label>Footer Column Three</x-form.label>
                    <textarea name="footer_column_three" class="form-control html-editor" rows="5">{{ old('footer_column_three', appSettings('footer_column_three')) }}</textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary px-4">Save</button>
                </div>
            </div>
        </div>
    </form>

</div>
@endsection