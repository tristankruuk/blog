<!-- Alert -->
@if (session('status') === 'password-updated')
    <div role="alert" class="alert alert-success fixed top-6 right-6">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        @lang('Password updated successfully!')
    </div>
@endif

<div class="container mx-auto">
    <form method="POST" action="{{ route('password.update') }}" class="card bg-base-300 shadow-sm w-full mx-auto p-6">
        @csrf
        @method('put')

        <!-- Text -->
        <h2 class="text-2xl font-bold mb-3">
            @lang('Update Password')
        </h2>

        <p class="text-sm mb-6">
            @lang('Ensure your account is using a long, random password to stay secure.')
        </p>

        <!-- Current Password -->
        <fieldset class="fieldset">
            <legend class="fieldset-legend">@lang('Current Password')</legend>
            <input name="current_password" type="password"
                class="input w-full @error('current_password', 'updatePassword') input-error @enderror" required
                autocomplete="current-password" />
            @error('current_password', 'updatePassword')
                <p class="label text-error">{{ $message }}</p>
            @enderror
        </fieldset>

        <!-- New Password -->
        <fieldset class="fieldset">
            <legend class="fieldset-legend">@lang('New Password')</legend>
            <input name="password" type="password"
                class="input w-full @error('password', 'updatePassword') input-error @enderror" required
                autocomplete="new-password" />
            @error('password', 'updatePassword')
                <p class="label text-error">{{ $message }}</p>
            @enderror
        </fieldset>

        <!-- Confirm Password -->
        <fieldset class="fieldset">
            <legend class="fieldset-legend">@lang('Confirm Password')</legend>
            <input name="password_confirmation" type="password"
                class="input w-full @error('password_confirmation', 'updatePassword') input-error @enderror" required
                autocomplete="new-password" />
            @error('password_confirmation', 'updatePassword')
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