<?php

use DigitalTunnel\NovaMediaLibrary\Http\Controllers\DownloadMediaController;
use DigitalTunnel\NovaMediaLibrary\Http\Controllers\MediaController;
use Illuminate\Support\Facades\Route;

Route::get('/download/{media}', [DownloadMediaController::class, 'show']);

Route::get('/media', [MediaController::class, 'index']);
