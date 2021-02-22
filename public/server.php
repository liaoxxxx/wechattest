<?php
require_once "../vendor/autoload.php";
use EasyWeChat\Factory;

$config = [
    'app_id' => 'wx3cf0f39249eb0xxx',
    'secret' => 'P1mHrUXK9PzxFGS5MZ1WhdXgp3YsWxYmCm18JclhAt0',
    'token' => 'liao993501756token',
    'response_type' => 'array',
    //...
];

$app = Factory::officialAccount($config);

$response = $app->server->serve();

// 将响应输出
$response->send(); exit; // Laravel 里请使用：return $response;