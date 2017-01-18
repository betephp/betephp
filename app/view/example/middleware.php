<h2>中间件</h2>
<div>中间件主要用于封装通用业务逻辑，如登录检测、签名校验、页面缓存等，每个Web接口可以根据需要进行配置。当前Web页面配置了CheckLogin中间件，通过则在页头显示一行信息，失败则跳转到首页。</div>
<br>
<div><a href="/example/middleware?isLogin=1">/example/middleware?isLogin=1</a> 通过，页头显示提示文案；</div>
<div><a href="/example/middleware?isLogin=0">/example/middleware?isLogin=0</a> 失败，将跳转到首页；</div>
<h3>相关文件</h3>
<ul>
    <li>app/Middleware/CheckLogin.php</li>
    <li>app/Web/Example/Middleware.php</li>
</ul>