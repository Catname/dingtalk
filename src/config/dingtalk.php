<?php
/**
 * @author: ZhangHQ
 * @email : tomcath@foxmail.com
 */
return [
    'corpid' => env('DD_CORPID'),// 公司id
    'appkey' => env('DD_APPKEY'),// 微应用 key
    'appsecret' => env('DD_APPSECRET'),// 微应用 secret
    'robotappkey' => env('DD_ROBOTAPPKEY'),// 机器人 key
    'robotappsecret' => env('DD_ROBOTAPPSECRET'),// 机器人 secret
    'cardtemplateid' => env('DD_CARDTEMPLATEID'),// 互动卡片模板 id
    'encodingAesKey' => env('DD_ENCODINGAESKEY'),// 解密钉钉回调 AesKey
    'signToken' => env('DD_SIGNTOKEN'),// 钉钉回调签名 token
];