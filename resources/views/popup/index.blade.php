@extends('layouts.backend')

@section('content')
<div class="container-fluid py-2">

    <h4 class="h4-responsive py-4">{{ $title }}</h4>

    @include('alerts.all')

    <form id="popup-form" action="{{ route('backend.popups.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-9">
                <x-box>
                    <div class="form-group">
                        <label>Popup Type</label>
                        <select class="custom-select" name="type" id="popup-type">
                            <option value="image" @if(old('type', $popup->type) == 'image')) selected @endif>Image</option>
                            <option value="text" @if(old('type', $popup->type == 'text')) selected @endif>Rich Text</option>
                        </select>
                    </div>
                </x-box>

                <x-box id="image-box" class="mt-4" style="display: none">
                    <div class="form-group text-center">
                        <div>Please choose your popup image</div>
                        <div class="my-3">
                            <input type="file" name="image" onchange="preview()" data-preview-el-id="imagePreview" class="border rounded p-2" accept="image/*">
                        </div>
                        <div class="my-4">
                            <img id="imagePreview" src="{{ $imagePreview }}" style="max-height: 200px;">
                        </div>
                    </div>
                </x-box>

                <div id="text-box" class="mt-4" style="display: none;">
                    <textarea class="form-control" name="content" id="popup-content" rows="10">{{ old('content', $popup->content) }}</textarea>
                </div>

            </div>
            <div class="col-md-3">
                <x-box>
                    <button type="submit" class="btn btn-primary btn-block">Save</button>
                </x-box>

                <x-box class="my-4">
                    <div class="form-group custom-control custom-checkbox my-1 mr-sm-2">
                        <input type="checkbox" name="active" class="custom-control-input" id="enable-popup-checkbox" value="1" @if(old('active', $popup->active) == 1) checked @endif>
                        <label class="custom-control-label" for="enable-popup-checkbox">Enable</label>
                    </div>

                    <div class="form-group custom-control custom-checkbox my-1 mr-sm-2">
                        <input type="checkbox" name="options[enable_session]" class="custom-control-input" id="enable-session-checkbox" value="1" @if(old('options.enable_session', $popup->getOption('enable_session')) == 1) checked @endif>
                        <label class="custom-control-label" for="enable-session-checkbox">Show popup once per session</label>
                    </div>

                    <div class="form-group">
                        <label>Popup Link</label>
                        <input type="text" name="link" class="form-control" value="{{ old('link', $popup->link) }}">
                    </div>

                    <div class="form-group">
                        <label>Popup Delay (in Milliseconds)</label>
                        <input type="number" name="options[popup_delay]" class="form-control" value="{{ old('options.popup_delay', $popup->getOption('popup_delay')) }}">
                    </div>
                </x-box>

            </div>
        </div>

    </form>

</div>
@endsection

@push('styles')
<style>
    #popup-form label {
        font-weight: 400;
        color: rgb(35, 50, 79);
    }

</style>
@endpush

@push('scripts')
<script>
    $(function() {
        $('#popup-content').summernote({
            placeholder: ''
            , tabsize: 2
            , height: 500
            , toolbar: [
                ['style', ['style']]
                , ['font', ['bold', 'underline', 'clear']]
                , ['fontname', ['fontname']]
                , ['color', ['color']]
                , ['para', ['ul', 'ol', 'paragraph']]
                , ['table', ['table']]
                , ['insert', ['link', 'picture']]
                , ['view', ['fullscreen', 'codeview', 'help']]
            , ]
        , });


        $('#popup-type').on('change', function() {
            var type = $(this).val();
            toggleTypeBox(type);
        });

        var activeType = "{{ $popup->type }}";
        toggleTypeBox(activeType);

        function toggleTypeBox(type) {
            if (type == 'image') {
                $('#image-box').show();
                $('#text-box').hide();
            } else {
                $('#image-box').hide();
                $('#text-box').show();
            }
        }

    });
    
    function preview() {
        // console.log(event.target.dataset.previewElId);
        imagePreview.src = URL.createObjectURL(event.target.files[0]);
    }

</script>
@endpush
