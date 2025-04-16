<?php

use App\Livewire\Pages\Account\LessonsPage;
use App\Livewire\Pages\Account\SettingsPage as SettingsPageAlias;
use App\Livewire\Pages\Auth\RegisterPage as RegisterPageAlias;
use App\Livewire\Pages\Portal\IndexPage as IndexPageAlias;
use App\Livewire\Pages\Preview\TestPreviewPage as TestPreviewPageAlias;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', IndexPageAlias::class);



//require __DIR__.'/auth.php';
//
//Route::get('/register', RegisterPageAlias::class)->name('register');
