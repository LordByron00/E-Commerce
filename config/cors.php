<?php

return [

/*
|--------------------------------------------------------------------------
| Laravel CORS Configuration
|--------------------------------------------------------------------------
|
| The settings here determine what cross-origin requests are permitted.
| You may adjust them based on your frontend and security needs.
|
*/

'paths' => ['api/*', 'sanctum/csrf-cookie'], // Important for Sanctum authentication

'allowed_methods' => ['*'], // Allow all HTTP methods

'allowed_origins' => ['http://localhost:3000', 'http://your-frontend-domain.com'], // Adjust for your frontend

'allowed_origins_patterns' => [],

'allowed_headers' => ['*'], // Allow all headers

'exposed_headers' => [],

'max_age' => 0, // No cache expiration

'supports_credentials' => true, // Required for Sanctum authentication
];
