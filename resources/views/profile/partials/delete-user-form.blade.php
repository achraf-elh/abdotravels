<form method="POST" action="{{ route('profile.destroy') }}">
    @csrf
    @method('DELETE')

    <div class="form-group">
        <label for="password">{{ __('Password') }}</label>
        <input id="password" class="form-control" type="password" name="password" required>
        @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
        @endif
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-danger">{{ __('Delete Account') }}</button>
    </div>
</form>
