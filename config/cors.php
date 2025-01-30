<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie'],  // Menerapkan CORS ke rute API dan CSRF cookie
    'allowed_methods' => ['*'],  // Mengizinkan semua metode HTTP (GET, POST, dll.)
    'allowed_origins' => ['http://localhost:5173'],  // Mengizinkan hanya domain frontend tertentu (localhost dengan port 5173)
    'allowed_headers' => ['*'],  // Mengizinkan semua header dalam permintaan
    'exposed_headers' => [],  // Header yang bisa diakses oleh frontend
    'max_age' => 0,  // Cache preflight request selama 0 detik
    'supports_credentials' => false,  // Tidak mendukung kredensial seperti cookies atau header otentikasi
];
