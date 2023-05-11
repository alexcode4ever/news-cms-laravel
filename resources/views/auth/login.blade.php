<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />




    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">NiceAdmin</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                  </div>

                  <form class="row g-3 needs-validation" action="{{ route('login') }}">
                  @csrf
                    <div class="col-12">
                    <x-input-label for="email" :value="__('Email')" />
                      <div class="input-group has-validation">
                      <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                      <x-input-error :messages="$errors->get('email')" class="mt-2 invalid-feedback" />
                      </div>
                    </div>

                    <div class="col-12">
                      <x-input-label for="password" :value="__('Password')" />

<x-text-input id="password" class="form-control"
                type="password"
                name="password"
                required autocomplete="current-password" />

<x-input-error :messages="$errors->get('password')" class="invalid-feedback" />
                    </div>

                    <div class="col-12">
                    <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
                    </div>
                    <div class="col-12">
                      <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="btn btn-primary w-100">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
                    </div>

                  </form>


                  <form method="POST">
        

        <!-- Email Address -->
        <div>
            
            
            
        </div>

        <!-- Password -->
        <div class="mt-4">

        </div>

        <!-- Remember Me -->
        <div class="block mt-4">

        </div>


    </form>

                </div>
              </div>

              

            </div>
          </div>
        </div>

      </section>
</x-guest-layout>
