<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Mail\WelcomeEmail;
use App\Notifications\NewOrderNotification;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


//last challenge router
Route::get('/test-communications', function () {
    $user = User::first(); 

    Mail::to($user->email)->send(new WelcomeEmail($user));

    $fakeOrder = (object) ['id' => 101, 'amount' => 250];
    $user->notify(new NewOrderNotification($fakeOrder));

    return "Email and notification sent successfully!";
});