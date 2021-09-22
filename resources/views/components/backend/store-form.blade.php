<form action="{{ $store->exists ? route('backend.stores.update', $store) : route('backend.stores.store') }}" method="post" class="form" enctype="multipart/form-data">
    @csrf
    @if($store->exists)
    @method('put')
    @endif

    <x-box>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="required">Store Name</label>
                    <input type="text" name="name" class="form-control form-control-lg rounded-0 {{ invalid_class('name') }}" value="{{ old('name', $store->name) }}" placeholder="Store Name">
                    <x-invalid-feedback field="name"></x-invalid-feedback>
                </div>
            </div>
            <div class="col-md-5 form-group">
                <label class="required">City</label>
                <input type="text" name="city" class="form-control {{ invalid_class('city') }}" value="{{ old('city', $store->city) }}">
            </div>
            <div class="col-md-7 form-group">
                <label for="">Full Address</label>
                <input type="text" name="address" class="form-control {{ invalid_class('address') }}" value="{{ old('address', $store->address) }}">
            </div>
            <div class="col-md-6 form-group">
                <label for="">Phone</label>
                <input type="text" name="phone" class="form-control {{ invalid_class('phone') }}" value="{{ old('phone', $store->phone) }}">
            </div>
            <div class="col-md-6 form-group">
                <label for="">E-mail</label>
                <input type="text" name="email" class="form-control {{ invalid_class('email') }}" value="{{ old('email', $store->email) }}">
            </div>
            <div class="col-md-6 form-group">
                <label for="">Website</label>
                <input type="text" name="website" class="form-control {{ invalid_class('website') }}" value="{{ old('website', $store->website) }}">
            </div>

            <div class="col-md-12 form-group">
                <button type="submit" class="btn btn-primary rounded-0 px-5 mx-0">{{ $store->exists ? 'Update' : 'Save' }}</button>
            </div>
        </div>
    </x-box>
</form>
