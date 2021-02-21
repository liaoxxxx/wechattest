<?php
namespace app\controller;

use app\BaseController;
use app\service\WechatService;
use think\facade\Config;

class Index extends BaseController
{
    public function index()
    {
        $config=Config::get('wechat');
      return  json_encode($config);
        dump( (new WechatService())->getAccessToken());
    }

    public function hello($name = 'ThinkPHP6')
    {
        //$wechatTool= ($this->app->get('wechat'));
        dump($this->app);
    }
}
