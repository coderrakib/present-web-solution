<x-app-layout>
    <div>
        <div class="container-fluid">
            <div class="row">
                <x-sidebar/>
                <div class="col-md-9 ms-sm-auto col-lg-9 px-md-4">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-3 border-bottom">
                        <h1 class="h2">User Profile</h1>
                    </div>
                    <div>
                        @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                            @livewire('profile.update-profile-information-form')
                        @endif
            
                        @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                            <div>
                                @livewire('profile.update-password-form')
                            </div>
                        @endif
            
                        @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                            <div>
                                @livewire('profile.two-factor-authentication-form')
                            </div>
                        @endif
            
                        <div>
                            @livewire('profile.logout-other-browser-sessions-form')
                        </div>
            
                        @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                            <div>
                                @livewire('profile.delete-user-form')
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--<div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-section-border />
            @endif

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
        </div>
    </div>--}}
</x-app-layout>
