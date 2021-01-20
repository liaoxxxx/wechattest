<?php
/*// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2019 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]
namespace think;

require __DIR__ . '/../vendor/autoload.php';

// 执行HTTP应用并响应
$http = (new App())->http;

$response = $http->run();

$response->send();

$http->end($response);*/


use EasyWeChat\Factory;

$config = [
    'app_id' => 'wx3cf0f39249eb0xxx',
    'secret' => 'f1c242f4f28f735d4687abb469072xxx',
    'token' => 'liao993501756',
    'response_type' => 'array',
    //...
];

$app = Factory::officialAccount($config);

$response = $app->server->serve();

// 将响应输出
$response->send();
exit; // Laravel 里请使用：return $response;