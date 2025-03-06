<?php

if (session_status() === PHP_SESSION_NONE) {
    ini_set('session.cookie_httponly', 1);
    ini_set('session.cookie_secure', 1);
    ini_set('session.use_only_cookies', 1);
    
    session_start();
}

date_default_timezone_set('Asia/Jakarta');

return [
    'app_name' => 'PHP-Native',
    'base_url' => 'http://localhost',
    'version' => '1.0',
    'db' => [
        'host' => 'localhost',
        'dbname' => 'demo',
        'user' => 'root',
        'pass' => ''
    ],
    'security' => [
        'csrf_protection' => true,
        'session_security' => true,
        'rate_limiting' => true,
    ],
	'api' => [
        'api_key' => 'example-api-key-here',
    ]
];
