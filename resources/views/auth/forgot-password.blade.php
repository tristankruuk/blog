@extends('partials.layout')
@section('content')

    <!-- Alert -->
    @if (session('status'))
        <div role="alert" class="alert alert-success">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            {{ session('status') }}
        </div>
    @endif

    <!-- Body -->
    <div class="container mx-auto">
        <form method="POST" action="{{ route('password.email') }}" class="card bg-base-300 shadow-sm w-1/3 mx-auto p-6">
            @csrf

            <!-- Text -->
            <div class="mb-4 text-sm">
                <div class="mb-4 text-sm">
                    @lang('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.')
                </div>
            </div>

            <!-- Email Address -->
            <fieldset class="fieldset">
                <legend class="fieldset-legend">@lang('Email')</legend>
                <input name="email" value="{{ old('email') }}" type="email"
                    class="input w-full @error('email') input-error @enderror" required autofocus />
                @error('email')
                    <p class="label text-error">{{ $message }}</p>
                @enderror
            </fieldset>

            <!-- Button -->
            <div class="flex items-center justify-end mt-4">
                <button class="btn btn-primary">
                    @lang('Send verification')
                </button>
            </div>
        </form>
    </div>

@endsection