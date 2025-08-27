<?php

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\SnekerController;

    //Route::get('/user', function (Request $request) {
    //    return $request->user();
    //})->middleware('auth:sanctum');

    Route::controller(SnekerController::class)->prefix('sneker')->group(function(){
        Route::get('/','index')->name('snekers');
    });
