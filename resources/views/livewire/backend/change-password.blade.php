<x-box class="border-0 shadow rounded">
    <div class="card-header">
        <h5>{{ __('Change Password') }}</h5>
    </div>
    <div class="card-body">
        <form wire:submit.prevent="change">
            <div class="form-group">
                <label classs="required">Old Password</label>
                <input type="password" wire:model="password.old_password" class="form-control @error('password.old_password') is-invalid @enderror">
                <x-invalid-feedback field="password.old_password" />
            </div>
            <div class="form-group">
                <label classs="required">New Password</label>
                <input type="password" wire:model="password.password" class="form-control @error('password.password') is-invalid @enderror">
                <x-invalid-feedback field="password.password" />
            </div>
            <div class="form-group">
                <label classs="required">Confirm New Password</label>
                <input type="password" wire:model="password.password_confirmation" class="form-control @error('password.password_confirmation') is-invalid @enderror">
                <x-invalid-feedback field="password.password_confirmation" />
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success px-5">Chage Now</button>
            </div>
        </form>
    </div>
</x-box>
