<x-guest-layout>
    <!-- Contact Section -->
    <section id="contact" class="contact section">
        <!-- Section Title -->
        <div style="padding-bottom: 30px;" class="container section-title">
          <h2>Account</h2>
          <p><span>Need Help?</span> <span class="description-title">My Account</span></p>
        </div><!-- End Section Title -->
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
                <div class="col-md-6 offset-md-3">
                    <p style="border-bottom: 1px solid #ddd;margin:30px;padding-bottom:10px;"><span style="border-bottom: 3px solid #106eea;font-size:20px;font-weight:700;padding-bottom:10px;" class="description-title">Register</span></p>
                    <p style="margin-left:30px ;"><span class="description-title">Create a new account.</span></p>
                    <x-validation-errors class="mb-2 text-danger" style="margin-left: 30px;"/>
                    <form action="{{ route('register') }}" method="POST" class="php-email-form23">
                        @csrf
                        <div class="row gy-4">
                            <div class="col-md-12">
                                <label for="userName" class="pb-2">User Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" :value="old('name')" id="userName" required autofocus autocomplete="name">
                            </div>
            
                            <div class="col-md-12">
                                <label for="email" class="pb-2">Email Address<span class="text-danger">*</span></label>
                                <input type="email" class="form-control" name="email" :value="old('email')" id="email" required autocomplete="username">
                            </div>
            
                            <div class="col-md-12">
                                <label for="password" class="pb-2">Password<span class="text-danger">*</span></label>
                                <input type="password" class="form-control" name="password" id="password" required autocomplete="new-password">
                            </div>
            
                            <div class="col-md-12">
                                <label for="con_password" class="pb-2">Confirm Password<span class="text-danger">*</span></label>
                                <input type="password" class="form-control" name="password_confirmation" id="con_password" required autocomplete="new-password">
                            </div>
            
                            <div class="col-md-12 text-center flex items-center justify-end">
                                <button class="register" type="submit">Register</button>
                            </div>
                        </div>
                    </form>
                </div><!-- End Contact Form -->
            </div>
        </div>
    </section>
    <!-- /Contact Section -->
</x-guest-layout>
