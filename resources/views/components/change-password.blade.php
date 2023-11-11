<form method="POST" action="{{ route('waiter-profile-change-password', $tenant->id) }}"
    enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <h3 class="text-xl font-semibold mb-4">Change Password</h3>
    <div class="grid gap-4 sm:grid-cols-3 sm:gap-6">
        <div>
            <x-input-label for="current_password" value="{{ __('Current Password') }}" />
            <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full"
                autocomplete="current-password" />

        </div>
        <div>
            <x-input-label for="new_password" value="{{ __('New Password') }}" />
            <x-text-input id="password" name="password" type="password" class="mt-1 block w-full"
                autocomplete="new-password" />

        </div>
        <div>
            <x-input-label for="confirm-password" value="{{ __('Confirm Password') }}" />
            <x-text-input id="password_confirmation" name="password_confirmation" type="password"
                class="mt-1 block w-full" autocomplete="new-password" />

        </div>
    </div>
    <div class="flex justify-end pt-5">
        <x-primary-button class="mb-2">{{ __('Save') }}</x-primary-button>
    </div>
</form>
