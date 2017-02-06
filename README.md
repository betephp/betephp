# BetePHP

BetePHP是一个简单、易用的高性能PHP框架。我们坚信一个好的PHP框架应该是简单干净、易学易用，且不影响性能的。BetePHP将常用的组件功能使用统一的接口形式设计封装，无任何外部库依赖，实现了一个纯净、轻量级的高性能PHP框架。主要特点包括如下：

* 简单灵活的路由引擎
* 高性能
* 强大的组件库
* 统一的接口形式

### 简单灵活的路由引擎

```php
return [
    'rules' => [
        'order/<id:\d+>' => 'order/info',  # order/1 -> order/info?id=1
        '<sid:\d+>/<gid:\d+>' => 'good/info', # 1234/5678 -> good/info?sid=1234&gid=5678
    ],
];
```

### 高性能
在单核1G服务器运行，各框架QPS对比:（越高越好）

![Screenshot](https://s28.postimg.org/qbtf2i1i5/performance.png)

### 强大的组件库
* 验证
* 日志
* Cookie
* Session
* Redis
* ...

### 统一的接口形式

```php
app()->log->warning('some thing go wrong.');

app()->cookie->set('name', 'value');

app()->session->set('name', 'value');

app()->encrypter->encrypt($data);

app()->redis->set('key', 'value');
```
