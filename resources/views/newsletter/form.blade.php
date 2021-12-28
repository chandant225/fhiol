<form method="POST" action="@if (isset($newsletter)) {{ route('backend.newsletter.update', $newsletter->id) }}@else {{ route('backend.newsletter.store') }} @endif">
    <div class="row">
        @csrf
        @if (isset($newsletter))
            @method('PUT')
        @endif
        <div class="col-md-12 form-group">
            <label for="subject">Subject <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="subject" id="subject"
                value="{{ old('subject', isset($newsletter) ? $newsletter->subject : null) }}">
            @error('subject') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="col-md-12 form-group">
            <label for="template">Email Body <span class="text-danger">*</span></label>
            <textarea name="template" id="template" cols="30" rows="10"
                class="form-control summernote">{{ old('template', isset($newsletter) ? $newsletter->template : null) }}</textarea>
            @error('template') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="col-md-12 form-group">
            <label for="status">Status <span class="text-danger">*</span></label>
            <select name="status" id="status" class="form-control">
                <option value="1"
                    {{ old('status', isset($newsletter) ? $newsletter->status : null) == 1 ? 'selected' : '' }}>Active
                </option>
                <option value="0"
                    {{ old('status', isset($newsletter) ? $newsletter->status : null) == 0 ? 'selected' : '' }}>Inactive
                </option>
            </select>
            @error('status') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="col-md-12 form-group">
            <button type="submit" class="btn btn-success">Save Template</button>
        </div>
    </div>
    @push('styles')
        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.css">
        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/theme/monokai.css">
    @endpush
    @push('scripts')
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/mode/xml/xml.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/2.36.0/formatting.js"></script>
        <script>
            $(document).ready(function() {
                $('.summernote').summernote({
                    height: 400,   //set editable area's height
                    codemirror: { // codemirror options
                        theme: 'monokai'
                    }
                });
            });
        </script>
    @endpush
</form>
