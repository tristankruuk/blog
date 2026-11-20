<!-- Body -->
<div class="container mx-auto">
    <div class="card bg-base-300 shadow-sm w-full mx-auto p-6">

        <!-- Text -->
        <h2 class="text-2xl font-bold mb-3">
            @lang('Delete Account')
        </h2>

        <p class="text-sm mb-6">
            @lang('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.')
        </p>

        <!-- Button -->
        <div class="flex items-center justify-end mt-4">
            <button type="button" class="btn btn-error" onclick="delete_modal.showModal()">
                @lang('Delete Account')
            </button>
        </div>

    </div>
</div>

<!-- Modal -->
<dialog id="delete_modal" class="modal">
    <div class="modal-box">
        <form method="POST" action="{{ route('profile.destroy') }}">
            @csrf
            @method('delete')

            <!-- Text -->
            <h2 class="text-xl font-bold mb-3">
                @lang('Are you sure you want to delete your account?')
            </h2>

            <p class="mb-4 text-sm">
                @lang('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.')
            </p>

            <!-- Password -->
            <fieldset class="fieldset">
                <legend class="fieldset-legend">@lang('Password')</legend>
                <input name="password" type="password"
                    class="input w-full @error('password', 'userDeletion') input-error @enderror" required
                    autocomplete="current-password" />
                @error('password', 'userDeletion')
                    <p class="label text-error">{{ $message }}</p>
                @enderror
            </fieldset>

            <!-- Buttons -->
            <div class="modal-action">
                <button type="button" class="btn" onclick="delete_modal.close()">
                    @lang('Cancel')
                </button>

                <button type="submit" class="btn btn-error">
                    @lang('Delete Account')
                </button>
            </div>
        </form>
    </div>
</dialog>

<!-- Open Modal on Validation Error -->
@if ($errors->userDeletion->isNotEmpty())
    <script>
        document.getElementById('delete_modal').showModal();
    </script>
@endif