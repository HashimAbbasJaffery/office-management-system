<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
        data-toggle="modal" data-target="#delete" >{{ __('Delete Account') }}</x-danger-button>

        <!-- Modal -->
            <div class="modal fade" name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                                @csrf
                                @method('delete')
                    
                                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                    {{ __('Are you sure you want to delete your account?') }}
                                </h2>
                    
                                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                    {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                                </p>
                    
                                <div class="mt-6">
                                    <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />
                    
                                    <x-text-input
                                        id="password"
                                        name="password"
                                        type="password"
                                        class="mt-1 block form-control w-3/4"
                                        placeholder="{{ __('Password') }}"
                                    />
                    
                                    <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-secondary" onclick="$('#delete').modal('hide')" value="Cancel">
                            <x-danger-button class="ml-3">
                                {{ __('Delete Account') }}
                            </x-danger-button>
                    </div>
                </div>
            </div>
        </div>
</section>
