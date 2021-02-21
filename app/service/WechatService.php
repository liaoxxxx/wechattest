<?php
declare (strict_types=1);

namespace app\service;

use EasyWeChat\Factory;
use EasyWeChat\OfficialAccount\Application;
use EasyWeChat\OfficialAccount\Auth\AccessToken;
use EasyWeChat\OfficialAccount\Server\Guard;

class WechatService
{

    protected Application $wechatApp;

    protected array $config;

    /**
     * @return Application
     */
    public function getWechatApp(): Application
    {
        return $this->wechatApp;
    }

    /**
     * @return array
     */
    public function getConfig(): array
    {
        return $this->config;
    }


    /**
     * @return AccessToken
     */
    public function getAccessToken(): AccessToken
    {
        return $this->wechatApp->access_token;
    }

    /**
     * @return Guard
     */
    public function  getServer(): Guard
    {
        return $this->wechatApp->server;
    }

    /**
     * WechatService constructor.
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->wechatApp = Factory::officialAccount($config);
        $this->config=$config;
    }
}
