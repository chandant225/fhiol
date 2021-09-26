@extends('layouts.backend')

@section('content')
<div class="container py-2">
    
    <h4 class="h4-responsive py-4">{{ $title }}</h4>

    <form action="{{ route('backend.settings.general.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card shadow-0 shadow-sm">
            <div class="card-body">
                <div class="form-group">
                    <x-form.label>Site name</x-form.label>
                    <x-fields.input name="site_name" :value="old('site_name', appSettings('site_name'))" />
                </div>

                <div class="form-group">
                    <x-form.label>Tagline</x-form.label>
                    <x-fields.input name="tagline" :value="old('tagline', appSettings('tagline'))" />
                </div>

                <div class="form-group">
                    <x-form.label>Site Logo</x-form.label>
                    <div class="input-group">
                        @if(appSettings()->get('site_logo'))
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="site-logo-prepend">
                                <img src="{{ asset('storage/' . appSettings()->get('site_logo')) }}" alt="" style="height:1.5em;">
                            </span>
                        </div>
                        @endif
                        <div class="custom-file">
                            <input type="file" name="site_logo" class="custom-file-input" id="site-logo-input" aria-describedby="site-logo-prepend">
                            <label class="custom-file-label" for="site-logo-input">Choose file</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <x-form.label>Favicon</x-form.label>
                    <div class="input-group">
                        @if(appSettings()->get('favicon'))
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">
                                <img src="{{ asset('storage/' . appSettings()->get('favicon')) }}" alt="" style="height:1.5em;">
                            </span>
                        </div>
                        @endif
                        <div class="custom-file">
                            <input type="file" name="favicon" class="custom-file-input" id="favicon-input" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="favicon-input">Choose file</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <x-form.label>Show Top Bar</x-form.label>
                    <select name="show_top_bar" class="custom-select d-block w-25">
                        <option value="yes">Yes</option>
                        <option value="no" @if(old('show_top_bar', appSettings('show_top_bar') == 'no')) selected @endif>No</option>
                    </select>
                </div>

                <div class="form-group">
                    <x-form.label>Opening Hour</x-form.label>
                    <x-fields.input name="office_time" :value="old('office_time', appSettings('office_time'))" />
                </div>

                <div class="form-group">
                    <x-form.label>Mobile</x-form.label>
                    <x-fields.input name="mobile" :value="old('mobile', appSettings('mobile'))" />
                </div>

                <div class="form-group">
                    <x-form.label>E-mail</x-form.label>
                    <x-fields.input name="email" :value="old('email', appSettings('email'))" />
                </div>

                <div class="form-group">
                    <x-form.label>Address</x-form.label>
                    <x-fields.input name="address" :value="old('address', appSettings('address'))" />
                </div>

                <div class="form-group">
                    <x-form.label>Currency unit</x-form.label>
                    <x-fields.input name="price_unit" :value="old('price_unit', appSettings('price_unit'))" />
                </div>
                
                <div class="form-group">
                    <x-form.label>Facebook Page Url</x-form.label>
                    <x-fields.input name="facebook_url" :value="old('facebook_url', appSettings('facebook_url'))" />
                </div>
                <div class="form-group">
                    <x-form.label>Twitter Url</x-form.label>
                    <x-fields.input name="twitter_url" :value="old('twitter_url', appSettings('twitter_url'))" />
                </div>
                <div class="form-group">
                    <x-form.label>Youtube Url</x-form.label>
                    <x-fields.input name="youtube_url" :value="old('youtube_url', appSettings('youtube_url'))" />
                </div>
                <div class="form-group">
                    <x-form.label>LinedIn Url</x-form.label>
                    <x-fields.input name="linkedin_url" :value="old('linkedin_url', appSettings('linkedin_url'))" />
                </div>
                <div class="form-group">
                    <x-form.label>Instagram Url</x-form.label>
                    <x-fields.input name="instagram_url" :value="old('instagram_url', appSettings('instagram_url'))" />
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary px-4">Save</button>
                </div>
            </div>
        </div>
    </form>

</div>
@endsection