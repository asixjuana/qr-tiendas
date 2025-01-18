<?php
Route::get('/qr/{id_tienda}/{imei}', [QRController::class, 'generateQR']);
Route::get('/formulario', [FormularioController::class, 'show'])->name('formulario');
Route::post('/submit-form', [FormularioController::class, 'submitForm'])->name('submitForm');
