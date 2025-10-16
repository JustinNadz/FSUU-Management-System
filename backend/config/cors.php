<?php

// Support multiple frontend origins via FRONTEND_URLS (comma separated) or single FRONTEND_URL.
$originEnv = env('FRONTEND_URLS', env('FRONTEND_URL', ''));
$origins = array_filter(array_map('trim', explode(',', $originEnv)));

// Also include SANCTUM_STATEFUL_DOMAINS as allowed CORS origins
$stateful = array_filter(array_map('trim', explode(',', env('SANCTUM_STATEFUL_DOMAINS', ''))));
foreach ($stateful as $host) {
    if ($host === '') continue;
    if (stripos($host, 'http://') === 0 || stripos($host, 'https://') === 0) {
        $origins[] = $host;
    } else {
        // Add both schemes to be safe across environments
        $origins[] = 'https://' . $host;
        $origins[] = 'http://' . $host;
    }
}

$origins = array_values(array_unique($origins));
if (empty($origins)) { $origins = ['*']; }

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    'paths' => ['api/*', 'sanctum/csrf-cookie'],

    'allowed_methods' => ['*'],

    'allowed_origins' => $origins,

    'allowed_origins_patterns' => ['#^https://.*\.vercel\.app$#'],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => true,

];
