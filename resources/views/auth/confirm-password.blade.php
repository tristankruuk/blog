@extends('partials.layout')
@section('content')

    <!-- Body -->
    <div class="container mx-auto">
        <form method="POST" action="{{ route('password.confirm') }}" class="card bg-base-300 shadow-sm w-1/3 mx-auto p-6">
            @csrf

            <!-- Text -->
            <div class="mb-4 text-sm">
                @lang('This is a secure area of the application. Please confirm your password before continuing.')
            </div>

            <!-- Password -->
            <fieldset class="fieldset">
                <legend class="fieldset-legend">@lang('Password')</legend>
                <input name="password" type="password" class="input w-full @error('password') input-error @enderror" required
                    autocomplete="current-password" />
                @error('password')
                    <p class="label text-error">{{ $message }}</p>
                @enderror
            </fieldset>

            <div class="flex items-center justify-end mt-4">
                <button class="btn btn-primary">
                    @lang('Confirm')
                </button>
            </div>
        </form>
    </div>

@endsection