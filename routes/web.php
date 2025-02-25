<?php

use App\Livewire\HomeComponent;
use App\Livewire\AboutComponent;
use App\Livewire\PortfolioComponent;
use App\Livewire\OurTeamComponent;
use App\Livewire\BlogComponent;
use App\Livewire\BlogDetailsComponent;
use App\Livewire\ContactComponent;
use App\Livewire\ServicesComponent;
use App\Livewire\FAQComponent;
use App\Livewire\ServiceDetailsComponent;
use App\Livewire\UsingTechnologyComponent;
use App\Livewire\Admin\AdminDashboardComponent;
use App\Livewire\Admin\SettingsComponent;
use App\Livewire\User\UserDashboardComponent;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeComponent::class)->name('home');
Route::get('/about', AboutComponent::class)->name('about');
Route::get('/portfolio', PortfolioComponent::class)->name('portfolio');
Route::get('/team', OurTeamComponent::class)->name('team');
Route::get('/blog', BlogComponent::class)->name('blog');
Route::get('/blog-details', BlogDetailsComponent::class)->name('blog-details');
Route::get('/contact', ContactComponent::class)->name('contact');
Route::get('/services', ServicesComponent::class)->name('services');
Route::get('/faq', FAQComponent::class)->name('faq');
Route::get('/service-details', ServiceDetailsComponent::class)->name('service-details');
Route::get(uri: '/using-technology', action: UsingTechnologyComponent::class)->name('using-technology');

/*Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});*/

/* For user */
Route::middleware(['auth:sanctum', 'verified', 'user-access:user'])->group(function () {
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
});

/* For admin */
Route::middleware(['auth:sanctum', 'verified', 'user-access:admin'])->group(function () {
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/dashboard/setting', SettingsComponent::class)->name('admin.setting');
});
