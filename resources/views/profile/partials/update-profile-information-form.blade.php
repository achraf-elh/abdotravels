<form method="POST" action="{{ route('profile.update') }}">
    @csrf
    @method('PUT')

    <!-- Name -->
    <div class="form-group">
        <label for="name">{{ __('Name') }}</label>
        <input id="name" class="form-control" type="text" name="name" value="{{ old('name', Auth::user()->name) }}" required autofocus>
        @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
        @endif
    </div>

    <!-- Email -->
    <div class="form-group">
        <label for="email">{{ __('Email') }}</label>
        <input id="email" class="form-control" type="email" name="email" value="{{ old('email', Auth::user()->email) }}" required>
        @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
    </div>
</form>
