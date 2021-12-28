<h1 align="center"> dingtalk </h1>

<p align="center"> dingtalkhandlers for Laravel 8</p>


钉钉回调加解密  
  
感谢：主要代码均来自钉钉加解密 DEMO

## Installing

```shell
$ composer require catname/dingtalk -vvv
```

## Usage

### 发布配置文件

```shell
$ php artisan vendor:publish --provider="Catname\DingTalk\ServiceProvider"
```

### 在 .env 中添加必要的配置项

```dotenv
DD_CORPID=
DD_APPKEY=
DD_APPSECRET=
DD_ROBOTAPPKEY=#钉钉机器人
DD_ROBOTAPPSECRET=#钉钉机器人
DD_CARDTEMPLATEID=
DD_ENCODINGAESKEY=
DD_SIGNTOKEN=
```



## License

MIT