<select name="{{ $settingKey }}" class="custom-select">
    <option value="">Select Page</option>
    @foreach($pages as $page)
    <option value="{{ $page->slug }}" @if(old($settingKey, appSettings($settingKey) == $page->slug)) selected @endif>{{ $page->title }}</option>
    @endforeach
</select>