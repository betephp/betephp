<h2>Session</h2>
<form method="POST">
    <input type="hidden" name="username" value="php">
    <input type="submit" name="sub" value="设置Session['username']=php">
</form>
<pre>
username: <?php var_dump(app()->session->get('username')); ?>
</pre>

<h2>Flash Session</h2>
<p>Flash会话仅会在下一次请求有效</p>
<form method="POST">
    <input type="hidden" name="message" value="save success">
    <input type="submit" name="sub" value="设置Flash Session['message']='save success'">
</form>
<pre>
message: <?php var_dump(app()->session->getFlash('message')); ?>
</pre>

<h2>Cookie</h2>
<form method="POST">
    <input type="hidden" name="source" value="google">
    <input type="submit" name="sub" value="设置cookie['source']='google'">
</form>
<pre>
message: <?php var_dump(app()->cookie->get('source')); ?>
</pre>
<h3>相关文件</h3>
<ul>
    <li>app/Web/ExampleController.php</li>
</ul>