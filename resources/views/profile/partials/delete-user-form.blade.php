<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <button class="btn btn-danger" x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')" data-toggle="modal"
        data-target="#modal-default">{{ __('Delete Account') }}</button>

    <div class="modal fade" id="modal-default" name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()"
        focusable>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Account</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('admin.profile.destroy') }}" class="p-6">
                        @csrf
                        @method('delete')

                        <h2 class="text-lg font-medium text-gray-900">
                            {{ __('Are you sure you want to delete your account?') }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                        </p>

                        <div class="mt-6">
                            <x-input-label for="password" value="{{ __('Password') }}" class="form-label" />

                            <x-text-input id="password" name="password" type="password"
                                class="color-dark form-control" placeholder="{{ __('Password') }}" required />

                            <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                        </div>

                        <div class="mt-6 flex justify-end">
                        </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-between">
                    <button class="btn btn-secondary" data-dismiss="modal" x-on:click="$dispatch('close')">
                        {{ __('Cancel') }}
                    </button>

                    <button class="btn btn-danger" type="submit">
                        {{ __('Delete Account') }}
                    </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
    </div>
</section>
