<h2>Web模式</h2>
<div>使用BetePHP应用有两种模式，Web和Console。</div>
<div>Web模式下，URL为hello/world的请求对应的代码逻辑位于app\Web\HelloController类的actionWorld方法。</div>
<br>
GET请求参数:
<pre>
<?php print_r($get); ?>
</pre>
POST请求参数:
<pre>
<?php print_r($post); ?>
</pre>
<h3>相关文件</h3>
<ul>
    <li>app/Web/ExampleController.php</li>
</ul>