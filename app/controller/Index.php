<?php

namespace app\controller;

use app\BaseController;
use app\util\WechatService;
use EasyWeChat\Kernel\Exceptions\HttpException;
use EasyWeChat\Kernel\Exceptions\InvalidArgumentException;
use EasyWeChat\Kernel\Exceptions\InvalidConfigException;
use EasyWeChat\Kernel\Exceptions\RuntimeException;
use think\facade\Config;

class Index extends BaseController
{
    public function index()
    {

        $config = Config::get('wechat');

        try {
            $app= (new WechatService($config));
            dump($app->getWechatApp()->auto_reply->current());  // $nextOpenId 可选);die;

        } catch (\Exception $e) {

            dump($e->getMessage());
        }
        echo 999;
        die;
    }


}
