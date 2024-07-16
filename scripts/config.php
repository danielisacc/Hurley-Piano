<?php
// Filepaths
$html = "./html/";
$styles = "./styles/";
$scripts = "./scripts/";
$imgs = "./img/";

// DB connection
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "rigler_hurley";
$conn = "";

// Email Configs
$mailHost = "smtp.gmail.com";
$mailUsername = "daniel.delavega.dev@gmail.com";
$mailPass = 'tgbx hrlq hxid vifp';
$mailSendFrom = "daniel.delavega.dev@gmail.com";
$mailSendFromName = "Hurley-Piano";
$mailReplyTo = "daniel.delavega.dev@gmail.com";
$mailReplyToName = "Richard Hurley";

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