<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            {{-- <x-authentication-card-logo /> --}}
        </x-slot>

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession
        <form method="POST" action="{{ route('login') }}">
            @csrf
        <div class="auth-wrapper auth-v2 ">
            <div class="auth-content">
                <div class="authentication-inner row m-0">
                    <div class="d-none d-lg-block col-lg-7 col-xl-8 p-0 img-side">
                        <img class="img-fluid" width="100%" src="../assets/images/auth/The-Krishnayan.png" alt="happy young woman sitting on the floor using laptop on gray wall">
                    </div>
                    <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg p-sm-5 p-4">
                        <div class="w-px-400 mx-auto">
                            <h4 class="mb-2">Welcome to The Krishnayan</h4>
                            <p class="mb-4">Please sign-in to your account and start the booking</p>
                            <div class="row justify-content-center">
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <x-label class="form-label" for="email" value="{{ __('Enter Email address') }}" />
                                        <x-input id="email" class="form-control block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                    </div>
                                    <div class="form-group mb-3">
                                        <x-label class="form-label" for="password" value="{{ __('Enter Password') }}" />
                                        <x-input id="password" class="form-control block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                                    </div>
                                    <div class="form-group mb-4">
                                        <div class="form-check form-switch">
                                            <x-checkbox id="customswitch1" name="remember"  class="form-check-input"/>
                                          <label class="form-check-label" for="customswitch1">{{ __('Remember me') }}</label>
                                        </div>
                                      </div>
                                      <div class="d-grid mb-4">
                                        <x-button class="btn btn-primary btn-block mt-2">
                                            {{ __('Log in') }}
                                        </x-button>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
      
    </x-authentication-card>
</x-guest-layout>
