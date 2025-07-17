<?php

use App\Livewire\Home;
use App\Livewire\MedicareAdvantangePlans;
use App\Livewire\MedicareServicePartA;
use App\Livewire\MedicareServicePartB;
use App\Livewire\MedicareServicePartC;
use App\Livewire\MedicareServicePartD;
use App\Livewire\MedigapMedicareSupplementInsurance;
use Livewire\Volt\Volt;
use Illuminate\Support\Facades\Route;





Route::get('/', Home::class)->name('home');
Route::get('/medicare-service-part-a', MedicareServicePartA::class)->name('medicare-service-part-a');
Route::get('/medicare-service-part-b', MedicareServicePartB::class)->name('medicare-service-part-b');
Route::get('/medicare-service-part-c', MedicareServicePartC::class)->name('medicare-service-part-c');
Route::get('/medicare-service-part-d', MedicareServicePartD::class)->name('medicare-service-part-d');
Route::get('/medicare-advantage-plan', MedicareAdvantangePlans::class)->name('medicare-advantage-plan');
Route::get('/medigap-medicare-supplement-insurance', MedigapMedicareSupplementInsurance::class)->name('medigap-medicare-supplement-insurance');
// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
