<?php
use Illuminate\Support\Facades\Route;




Route::get('/subscribe/user/bot',[\App\Api\V1\Controllers\TwitterIntegrationController::class, 'subscribe_bot']);
Route::post('/subscribe/user/channel',[\App\Api\V1\Controllers\TwitterIntegrationController::class, 'subscribe_channel']);
Route::post('/subscribe/user/message',[\App\Api\V1\Controllers\TwitterIntegrationController::class, 'subscribe_message']);
Route::post('/webhook',[\App\Api\V1\Controllers\TwitterIntegrationController::class, 'webhook']);

