<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
    <div class="page-content-wrapper">
        <div class="content-container">
            <div class="page-content">
                <div class="content-header">
                    <h1>User Account</h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">View</li>
                        <li class="breadcrumb-item">Account</li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="user-image-section">
                                            <div class="d-flex align-items-center flex-column gap-4">
                                                <img class="img-fluid rounded" src="../assets/images/user/avatarxl-6.jpg" alt="">
                                                <div class="user-info w-100 gap-2 d-flex justify-content-between align-items-center">
                                                    <h3 class="mb-2">{{ Auth::user()->name }}</h3>
                                                    <span class="badge bg-light-secondary fw-bold text-uppercase">Author</span>
                                                </div>
                                            </div>
                                        </div>
                                        @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                                        @livewire('profile.update-profile-information-form')
                        
                                        <x-section-border />
                                    @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0">Change Password</h5>
                                    </div>
                                    <div class="card-body">
                                        @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                                        <div class="mt-10 sm:mt-0">
                                            @livewire('profile.update-password-form')
                                        </div>
                        
                                        <x-section-border />
                                    @endif
                                                              
                                    </div>
                                </div>
                                <div class="card table-card">
                                    <div class="card-header border-0">
                                        <h5 class="mb-0">Recent Devices</h5>
                                    </div>
                                    <div class="card-body">
                                        @livewire('profile.logout-other-browser-sessions-form')
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
           
           
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
    </div> --}}
</x-app-layout>
