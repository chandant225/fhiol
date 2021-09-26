@extends('layouts.backend')

@section('content')
<div class="container py-2">

    <h4 class="h4-responsive py-4">{{ $title }}</h4>

    <div class="row">
        <div class="col-md-9">
            <form action="{{ route('backend.settings.homepage.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div data-spy="scroll" data-target="#homepage" data-offset="0">
                    {{-- Topbar notice --}}
                    <div id="topbar" class="card shadow-0 shadow-sm">
                        <div class="card-header bg-light">
                            <h5 class="h5-responsive">{{ __('Topbar') }}</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <x-form.label>Show Top Bar</x-form.label>
                                <select name="show_topbar_notice" class="custom-select d-block w-25">
                                    <option value="yes">Yes</option>
                                    <option value="no" @if(old('show_topbar_notice', appSettings('show_topbar_notice')=='no' )) selected @endif>No</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <x-form.label>Topbar Notice</x-form.label>
                                <textarea name="topbar_notice" class="form-control" rows="5">{{ old('topbar_notice', appSettings('topbar_notice')) }}</textarea>
                            </div>
                            <div class="form-group">
                                <x-form.label>Action Button Text</x-form.label>
                                <x-fields.input name="topbar_notice_action_text" :value="old('topbar_notice_action_text', appSettings('topbar_notice_action_text'))" />
                            </div>
                            <div class="form-group">
                                <x-form.label>Action Link URL</x-form.label>
                                <x-fields.input name="topbar_notice_action_link" :value="old('topbar_notice_action_link', appSettings('topbar_notice_action_link'))" />
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary px-4">Save</button>
                            </div>
                        </div>
                    </div>

                    {{-- Our mission --}}
                    <div id="our-mission" class="card shadow-0 shadow-sm">
                        <div class="card-header bg-light">
                            <h5 class="h5-responsive">{{ __('Our Mission Section') }}</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <x-form.label>Show Our Mission Section</x-form.label>
                                <select name="show_our_mission_section" class="custom-select d-block w-25">
                                    <option value="yes">Yes</option>
                                    <option value="no" @if(old('show_our_mission_section', appSettings('show_our_mission_section')=='no' )) selected @endif>No</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <x-form.label>Title Text</x-form.label>
                                <x-fields.input name="our_mission_title" :value="old('our_mission_title', appSettings('our_mission_title'))" />
                            </div>
                            <div class="form-group">
                                <x-form.label>Description</x-form.label>
                                <textarea name="our_mission_description" class="form-control" rows="5">{{ old('our_mission_description', appSettings('our_mission_description')) }}</textarea>
                            </div>
                            <div class="form-group">
                                <x-form.label>Our Mission Page</x-form.label>
                                @include('setting.fields.page-selector', ['settingKey' => 'our_mission_page'])
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary px-4">Save</button>
                            </div>
                        </div>
                    </div>

                    {{-- Latest Blogs --}}
                    <div id="blogs" class="card shadow-0 shadow-sm">
                        <div class="card-header bg-light">
                            <h5 class="h5-responsive">{{ __('Latest Blogs Section') }}</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <x-form.label>Show Latest Blogs Section</x-form.label>
                                <select name="show_latest_blogs_section" class="custom-select d-block w-25">
                                    <option value="yes">Yes</option>
                                    <option value="no" @if(old('show_latest_blogs_section', appSettings('show_latest_blogs_section')=='no' )) selected @endif>No</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <x-form.label>Title Text</x-form.label>
                                <x-fields.input name="latest_blogs_section_title" :value="old('latest_blogs_section_title', appSettings('latest_blogs_section_title'))" />
                            </div>
                            <div class="form-group">
                                <x-form.label>No. of Blogs to Show</x-form.label>
                                <x-fields.input name="latest_blogs_display_count" :value="old('latest_blogs_display_count', appSettings('latest_blogs_display_count'))" />
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary px-4">Save</button>
                            </div>
                        </div>
                    </div>

                    {{-- Our Programs --}}
                    <div id="our-excellence" class="card shadow-0 shadow-sm">
                        <div class="card-header bg-light">
                            <h5 class="h5-responsive">{{ __('Our Excellence Section') }}</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <x-form.label>Section Title</x-form.label>
                                <x-fields.input name="hp_our_excellence_section_title" :value="old('hp_our_excellence_section_title', appSettings('hp_our_excellence_section_title'))" />
                            </div>
                            <div class="row">
                                {{-- First --}}
                                <div class="col-md-6">
                                    <div class="card bg-light border shadow-none">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <x-form.label>Title</x-form.label>
                                                <x-fields.input name="hp_our_excellence_one_title" :value="old('hp_our_excellence_one_title', appSettings('hp_our_excellence_one_title'))" />
                                            </div>
                                            <div class="form-group">
                                                <x-form.label>Icon</x-form.label>
                                                <x-fields.input name="hp_our_excellence_one_icon" :value="old('hp_our_excellence_one_icon', appSettings('hp_our_excellence_one_icon'))" />
                                            </div>
                                            <div class="form-group">
                                                <x-form.label>Description</x-form.label>
                                                <textarea name="hp_our_excellence_one_desc" class="form-control" rows="10">{{ old('hp_our_excellence_one_desc', appSettings('hp_our_excellence_one_desc')) }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <x-form.label>Link</x-form.label>
                                                <x-fields.input name="hp_our_excellence_one_link" :value="old('hp_our_excellence_one_link', appSettings('hp_our_excellence_one_link'))" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Second --}}
                                <div class="col-md-6">
                                    <div class="card bg-light border shadow-none">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <x-form.label>Title</x-form.label>
                                                <x-fields.input name="hp_our_excellence_two_title" :value="old('hp_our_excellence_two_title', appSettings('hp_our_excellence_two_title'))" />
                                            </div>
                                            <div class="form-group">
                                                <x-form.label>Icon</x-form.label>
                                                <x-fields.input name="hp_our_excellence_two_icon" :value="old('hp_our_excellence_two_icon', appSettings('hp_our_excellence_two_icon'))" />
                                            </div>
                                            <div class="form-group">
                                                <x-form.label>Description</x-form.label>
                                                <textarea name="hp_our_excellence_two_desc" class="form-control" rows="10">{{ old('hp_our_excellence_two_desc', appSettings('hp_our_excellence_two_desc')) }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <x-form.label>Link</x-form.label>
                                                <x-fields.input name="hp_our_excellence_two_link" :value="old('hp_our_excellence_two_link', appSettings('hp_our_excellence_two_link'))" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Third --}}
                                <div class="col-md-6">
                                    <div class="card bg-light border shadow-none">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <x-form.label>Title</x-form.label>
                                                <x-fields.input name="hp_our_excellence_three_title" :value="old('hp_our_excellence_three_title', appSettings('hp_our_excellence_three_title'))" />
                                            </div>
                                            <div class="form-group">
                                                <x-form.label>Icon</x-form.label>
                                                <x-fields.input name="hp_our_excellence_three_icon" :value="old('hp_our_excellence_three_icon', appSettings('hp_our_excellence_three_icon'))" />
                                            </div>
                                            <div class="form-group">
                                                <x-form.label>Description</x-form.label>
                                                <textarea name="hp_our_excellence_three_desc" class="form-control" rows="10">{{ old('hp_our_excellence_three_desc', appSettings('hp_our_excellence_three_desc')) }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <x-form.label>Link</x-form.label>
                                                <x-fields.input name="hp_our_excellence_three_link" :value="old('hp_our_excellence_three_link', appSettings('hp_our_excellence_three_link'))" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Fourth --}}
                                <div class="col-md-6">
                                    <div class="card bg-light border shadow-none">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <x-form.label>Title</x-form.label>
                                                <x-fields.input name="hp_our_excellence_one_title" :value="old('hp_our_excellence_four_title', appSettings('hp_our_excellence_four_title'))" />
                                            </div>
                                            <div class="form-group">
                                                <x-form.label>Icon</x-form.label>
                                                <x-fields.input name="hp_our_excellence_four_icon" :value="old('hp_our_excellence_four_icon', appSettings('hp_our_excellence_four_icon'))" />
                                            </div>
                                            <div class="form-group">
                                                <x-form.label>Description</x-form.label>
                                                <textarea name="hp_our_excellence_four_desc" class="form-control" rows="10">{{ old('hp_our_excellence_four_desc', appSettings('hp_our_excellence_four_desc')) }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <x-form.label>Link</x-form.label>
                                                <x-fields.input name="hp_our_excellence_four_link" :value="old('hp_our_excellence_four_link', appSettings('hp_our_excellence_four_link'))" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary px-4">Save</button>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>

        <div class="col-md-3">
            <nav id="homepagesetting" class="navbar navbar-light bg-white rounded-lg shadow-sm sticky-top" style="top: 20px;">
                <nav class="nav nav-pills flex-column">
                    <h6 class="nav-link font-weight-bolder mb-0">ON THIS PAGE</h6>
                    <a class="nav-link" href="#topbar">Topbar</a>
                    <a class="nav-link" href="#our-mission">Our Mission Section</a>
                    <a class="nav-link" href="#blogs">Latest Blogs Section</a>
                    <a class="nav-link" href="#our-excellence">Our Excellence Section</a>
                </nav>
            </nav>
        </div>
    </div>
</div>
@endsection