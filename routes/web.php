<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('site.login'); 
})->name('site.login');

//Para me autenticar com servicos exteno no laravel

Route::get('/auth/{provider}/redirect', function (string $provider) {
    return Socialite::driver($provider)->redirect();
});

 
Route::get('/auth/{provider}/callback', function (string $provider) {
    $providerUser = Socialite::driver($provider)->user();
    //dd($providerUser);

    $user = User::updateOrCreate([
        'email' => $providerUser->getEmail(),
    ], [
        'name' => $providerUser->getName(),
        'provider_id' => $providerUser->getId(),
        'provider_avatar' => $providerUser->getAvatar(),
        'provider_name' => $provider,
    ]);


    Auth::login($user);
    return redirect('/dashboard');

});

Route::get('/dashboard', function () {
    $user = Auth::user();
    return view('dashboard', compact('user'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/novoUsuario',[UserController::class, 'novoUsuario'])->name('novoUsuario'); 
Route::post('/cadastrarUsuario',[UserController::class, 'cadastrarUsuario'])->name('cadastrarUsuario'); 

Route::post('/auth', [LoginController::class, 'auth'])->name('login.auth');