<?php

use Illuminate\Support\Facades\Route;

Route::get('/api/status', function () {
    return response()->json([
        'message' => 'Laravel đang hoạt động',
        'timestamp' => now()->toIso8601String(),
    ]);
});

// Đặt cuối cùng để React có thể xử lý các client-side route.
Route::view('/{path?}', 'app')->where('path', '^(?!api).*$');
