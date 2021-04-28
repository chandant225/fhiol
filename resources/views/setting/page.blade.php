@extends('layouts.backend')

@section('content')
<div class="container py-2">
    
    <h4 class="h4-responsive py-4">{{ $title }}</h4>

    <form action="{{ route('backend.settings.page.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card shadow-0 shadow-sm">
            <div class="card-body">
                <div class="form-group">
                    <x-form.label>About Us Page Url</x-form.label>
                    <x-fields.input name="about_us_page_url" :value="old('about_us_page_url', appSettings('about_us_page_url'))" />
                </div>

                <div class="form-group">
                    <x-form.label>Privacy Policy Page Url</x-form.label>
                    <x-fields.input name="privacy_policy_page_url" :value="old('privacy_policy_page_url', appSettings('privacy_policy_page_url'))" />
                </div>

                <div class="form-group">
                    <x-form.label>Terms & Conditions Page Url</x-form.label>
                    <x-fields.input name="terms_and_conditions_page_url" :value="old('terms_and_conditions_page_url', appSettings('terms_and_conditions_page_url'))" />
                </div>

                <div class="form-group">
                    <x-form.label>Contact Us Section Title</x-form.label>
                    <x-fields.input name="contact_us_section_title" :value="old('contact_us_section_title', appSettings('contact_us_section_title'))" />
                </div>

                <div class="form-group">
                    <x-form.label>Contact Us Section Description</x-form.label>
                    <textarea name="contact_us_section_description" class="form-control" rows="5">{{ old('contact_us_section_description', appSettings('contact_us_section_description')) }}</textarea>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary px-4">Save</button>
                </div>
            </div>
        </div>
    </form>

</div>
@endsection