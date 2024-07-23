<?php

// SESSION Security
$use_cookies_only = 1;
$use_sctrict_mode = 1;
$cookie_params = [
    'lifetime' => 1800,
    'domain' => 'localhost',
    'path' => '/',
    'secure' => true,
    'httponly' => true
];
$session_expirey = 60 * 30;

ini_set('session.use_only_cookies', $use_cookies_only);
ini_set('session.use_strict_mode', $use_sctrict_mode);
session_set_cookie_params($cookie_params);

session_start();

if (!isset($_SESSION['last_regeneration'])) {
    session_regenerate_id(true);
    $_SESSION['last_regeneration'] = time();
}
else {
    if (time() - $_SESSION['last_regeneration'] >= $session_expirey) {
        session_regenerate_id(true);
        $_SESSION['last_regeneration'] = time();
    }
}
