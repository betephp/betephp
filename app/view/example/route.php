<h2>路由</h2>
<div>Hello，虽然你访问的URL是example/1，但是实际请求的是example/route，查看config/route.php看如何实现。</div>
<pre>
GET请求参数:
<?php print_r(app()->request->get()); ?>
</pre>
<h3>相关文件</h3>
<ul>
    <li>config/route.php</li>
    <li>app/Web/Example/Route.php</li>
</ul>