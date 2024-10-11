<?php

return [

    'paths' => ['api/*', 'sanctum/csrf-cookie'], // Add any routes you want to apply CORS to

    'allowed_methods' => ['*'], // Allow all methods (GET, POST, PUT, DELETE, etc.)

    'allowed_origins' => ['*'], // Allow requests from all origins. For production, specify your frontend URL.

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'], // Allow all headers

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false, // Set to true if you need to support cookies or HTTP authentication
];
