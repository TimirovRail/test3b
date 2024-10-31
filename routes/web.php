<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TelephoneController;

Route::get('/', [TelephoneController::class, 'index'])->name('contacts.index');
Route::get('contacts/create', [TelephoneController::class, 'create'])->name('contacts.create');
Route::post('contacts', [TelephoneController::class, 'store'])->name('contacts.store');
Route::get('contacts/{contact}', [TelephoneController::class, 'show'])->name('contacts.show');