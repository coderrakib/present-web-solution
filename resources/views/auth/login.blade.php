<x-guest-layout>
    <!-- Contact Section -->
    <section id="contact" class="contact section">
        <!-- Section Title -->
        <div class="container section-title">
          <h2>Account</h2>
          <p><span>Need Help?</span> <span class="description-title">My Account</span></p>
        </div><!-- End Section Title -->
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
                <div class="col-md-6">
                    <p style="border-bottom: 1px solid #ddd;margin:30px;padding-bottom:10px;"><span style="border-bottom: 3px solid #106eea;font-size:20px;font-weight:700;padding-bottom:10px;" class="description-title">Login</span></p>
                    <p style="margin-left:30px ;"><span class="description-title">Welcome back! Sign in to your account.</span></p>
                    <x-validation-errors class="mb-2 text-danger" style="margin-left: 30px;"/>
                    <form action="{{ route('login') }}" method="POST" class="php-email-form23">
                        @csrf
                        <div class="row gy-4">
                    
                            <div class="col-md-12">
                                <label for="email" class="pb-2">Email Address<span class="text-danger">*</span></label>
                                <input type="email" class="form-control" name="email" :value="old('email')" id="email" required autocomplete="username">
                            </div>
            
                            <div class="col-md-12">
                                <label for="password" class="pb-2">Password<span class="text-danger">*</span></label>
                                <input type="password" class="form-control" name="password" id="password" required autocomplete="new-password">
                            </div>

                            <div style="font-size: 14px;" class="block mt-4">
                                <label for="remember_me" class="flex items-center">
                                    <x-checkbox id="remember_me" name="remember"/>
                                    <span class="ms-1 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>
            
                            <div style="font-size: 14px;" class="flex items-center justify-end mt-4">
                            
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                        {{ __('Lost your password?') }}
                                    </a>
                                @endif
                                <button class="register ms-4" type="submit">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
                <span class="or-text">or</span>
                <div class="col-md-6 sign-up">
                    <p style="border-bottom: 1px solid #ddd;margin:30px;padding-bottom:10px;"><span style="border-bottom: 3px solid #106eea;font-size:20px;font-weight:700;padding-bottom:10px;" class="description-title">Register</span></p>
                    <p style="margin-left:30px;">No account yet?</p>
                    <p style="margin-left:30px;font-weight:700;padding-top:20px;"><span class="description-title"><a wire:navigate href="{{ route('register')}}">Create a new account.</a></span></p>
                </div><!-- End Contact Form -->
            </div>
        </div>
    </section>
    <!-- /Contact Section -->
</x-guest-layout>