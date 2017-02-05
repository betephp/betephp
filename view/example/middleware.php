<h2>中间件</h2>
<div>业务逻辑时常包含一些相同的逻辑，比如登录验证。可以将这些逻辑封装到中间件，然后在需要使用这些逻辑的接口上配置该中间件。</div>
<div><a href="/example/middleware?isLogin=1">/example/middleware?isLogin=1</a> 通过登录验证中间件；</div>
<div><a href="/example/middleware?isLogin=0">/example/middleware?isLogin=0</a> 未通过；</div>
<h3>相关文件</h3>
<ul>
    <li>app/Middleware/CheckLogin.php</li>
    <li>app/Web/ExampleController.php</li>
</ul>