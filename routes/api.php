<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('health', function () {
    return response()->json([
        'status' => __('ok'),
        'app_name' => env('APP_NAME'),
        'php_version' => PHP_VERSION,
        'app_version' => app()->version(),
        'in_maintainance_mode' => app()->isDownForMaintenance(),
        'locale' => app()->getLocale(),
        'message' => __('up and running'),
    ]);
});
