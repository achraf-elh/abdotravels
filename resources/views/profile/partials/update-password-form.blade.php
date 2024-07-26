<form method="POST" action="{{ route('password.update') }}">
    @csrf
    @method('PUT')

    <!-- Current Password -->
    <div class="form-group">
        <label for="current_password">{{ __('Current Password') }}</label>
        <input id="current_password" class="form-control" type="password" name="current_password" required>
        @if ($errors->has('current_password'))
            <span class="text-danger">{{ $errors->first('current_password') }}</span>
        @endif
    </div>

    <!-- New Password -->
    <div class="form-group">
        <label for="password">{{ __('New Password') }}</label>
        <input id="password" class="form-control" type="password" name="password" required>
        @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
        @endif
    </div>

    <!-- Confirm Password -->
    <div class="form-group">
        <label for="password_confirmation">{{ __('Confirm Password') }}</label>
        <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required>
        @if ($errors->has('password_confirmation'))
            <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
        @endif
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
    </div>
</form>
