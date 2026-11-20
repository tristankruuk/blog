@extends('partials.layout')
@section('content')

    <!-- Alert -->
    @if (session('status'))
        <div role="alert" class="alert alert-success fixed top-6 right-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            {{ session('status') }}
        </div>
    @endif

    <!-- Body -->
    <div class="container mx-auto">
        <form method="POST" action="{{ route('password.store') }}" class="card bg-base-300 shadow-sm w-1/3 mx-auto p-6 my-6">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <fieldset class="fieldset">
                <legend class="fieldset-legend">@lang('Email')</legend>
                <input name="email" value="{{ old('email', $request->email) }}" type="email"
                    class="input w-full @error('email') input-error @enderror" required autofocus autocomplete="username" />
                @error('email')
                    <p class="label text-error">{{ $message }}</p>
                @enderror
            </fieldset>

            <!-- Password -->
            <fieldset class="fieldset">
                <legend class="fieldset-legend">@lang('Password')</legend>
                <input name="password" type="password" class="input w-full @error('password') input-error @enderror"
                    required autocomplete="new-password" />
                @error('password')
                    <p class="label text-error">{{ $message }}</p>
                @enderror
            </fieldset>

            <!-- Confirm Password -->
            <fieldset class="fieldset">
                <legend class="fieldset-legend">@lang('Confirm Password')</legend>
                <input name="password_confirmation" type="password"
                    class="input w-full @error('password_confirmation') input-error @enderror" required
                    autocomplete="new-password" />
                @error('password_confirmation')
                    <p class="label text-error">{{ $message }}</p>
                @enderror
            </fieldset>

            <div class="flex items-center justify-end mt-4">
                <button class="btn btn-primary">
                    {{ __('Reset Password') }}
                </button>
            </div>
        </form>
    </div>

@endsection