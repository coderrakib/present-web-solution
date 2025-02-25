<div>
    <div class="container-fluid">
        <div class="row">
            <x-sidebar/>
            <div class="col-md-9 ms-sm-auto col-lg-9 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Settings</h1>
                </div>
                <div class="row gy-4">
                    <div class="col-md-7 offset-md-2">
                        <p style="border-bottom: 1px solid #ddd;padding-bottom:10px;"><span style="border-bottom: 3px solid #106eea;font-size:16px;font-weight:500;padding-bottom:10px;" class="description-title">Add Settings Information</span></p>
                        <form class="php-email-form23" enctype="multipart/form-data" wire:submit.prevent="AddSettings">
                            @csrf
                            <div class="row gy-4">
                                <div class="col-md-12">
                                    <label for="title" class="pb-2">Site Title<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" wire:model="title" id="title">
                                    @error('title')  <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                
                                <div class="col-md-12">
                                    <label for="address" class="pb-2">Address<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" wire:model="address" id="address">
                                    @error('address')  <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                
                                <div class="col-md-12">
                                    <label for="phone" class="pb-2">Phone<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" wire:model="phone" id="phone">
                                    @error('phone')  <p class="text-danger">{{$message}}</p> @enderror
                                </div>

                                <div class="col-md-12">
                                    <label for="email" class="pb-2">Email<span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" wire:model="email" id="email">
                                    @error('email')  <p class="text-danger">{{$message}}</p> @enderror
                                </div>

                                <div class="col-md-12">
                                    <label for="facebook" class="pb-2">Facebook</label>
                                    <input type="url" class="form-control" wire:model="facebook" id="facebook">
                                </div>

                                <div class="col-md-12">
                                    <label for="twitter" class="pb-2">Twitter</label>
                                    <input type="url" class="form-control" wire:model="twitter" id="twitter">
                                </div>

                                <div class="col-md-12">
                                    <label for="instagram" class="pb-2">Instagram</label>
                                    <input type="url" class="form-control" wire:model="instagram" id="instagram">
                                </div>

                                <div class="col-md-12">
                                    <label for="pinterest" class="pb-2">Pinterest</label>
                                    <input type="url" class="form-control" wire:model="pinterest" id="pinterest">
                                </div>

                                <div class="col-md-12">
                                    <label for="quora" class="pb-2">Quora</label>
                                    <input type="url" class="form-control" wire:model="quora" id="quora">
                                </div>

                                <div class="col-md-12">
                                    <label for="linkedin" class="pb-2">Linkedin</label>
                                    <input type="url" class="form-control" wire:model="linkedin" id="linkedin">
                                </div>

                                <div class="col-md-12">
                                    <label for="youtube" class="pb-2">YouTube</label>
                                    <input type="url" class="form-control" wire:model="youtube" id="youtube">
                                </div>
                
                                <div class="col-md-12 text-center flex items-center justify-end mb-5">
                                    <button class="btn btn-primary register" type="submit">Save Information</button>
                                </div>
                            </div>
                        </form>
                    </div><!-- End Contact Form -->
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        new DataTable('#example');
    </script>
@endpush