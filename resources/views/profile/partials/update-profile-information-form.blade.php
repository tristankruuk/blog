@extends('partials.layout')
@section('content')

    <!-- Alert -->
    @if (session('status') === 'profile-updated')
        <div role="alert" class="alert alert-success mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            @lang('Profile updated successfully.')
        </div>
    @endif

    <!-- Body -->
    <div class="container mx-auto">
        <form method="POST" action="{{ route('profile.update') }}" class="card bg-base-300 shadow-sm w-2/3 mx-auto p-6">
            @csrf
            @method('patch')

            <!-- Text -->
            <h2 class="text-2xl font-bold mb-3">
                @lang('Profile Information')
            </h2>

            <p class="mb-4 text-sm">
                @lang("Update your account's profile information and email address.")
            </p>

            <!-- Name -->
            <fieldset class="fieldset">
                <legend class="fieldset-legend">@lang('Name')</legend>
                <input name="name" value="{{ old('name', $user->name) }}" type="text"
                    class="input w-full @error('name') input-error @enderror" required autofocus autocomplete="name" />
                @error('name')
                    <p class="label text-error">{{ $message }}</p>
                @enderror
            </fieldset>

            <!-- Email Address -->
            <fieldset class="fieldset">
                <legend class="fieldset-legend">@lang('Email')</legend>
                <input name="email" value="{{ old('email', $user->email) }}" type="email"
                    class="input w-full @error('email') input-error @enderror" required autocomplete="username" />
                @error('email')
                    <p class="label text-error">{{ $message }}</p>
                @enderror
            </fieldset>


            <!-- Button -->
            <div class="flex items-center justify-end mt-4">
                <button class="btn btn-primary">
                    @lang('Save')
                </button>
            </div>
        </form>
    </div>

@endsection