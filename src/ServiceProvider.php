<?php
/**
 * @author: ZhangHQ
 * @email : tomcath@foxmail.com
 */

namespace Catname\Dingtalk;


class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->singleton(DingCallbackCrypto::class, function(){
            return new DingCallbackCrypto();
        });

        $this->app->alias(DingCallbackCrypto::class, 'dingcallbackcrypto');
    }

    public function provides()
    {
        return [DingCallbackCrypto::class, 'dingcallbackcrypto'];
    }
}