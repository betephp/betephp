<h2>日志</h2>
<h3>普通日志</h3>
<p>普通日志是程序日常运行的日志，文件位置: runtime/log/app.log</p>
<pre>
app()->log->info();
app()->log->notice();
app()->log->warning();
app()->log->error();
</pre>
<h3>数据打点</h3>
<p>数据打点用于业务数据统计，文件位置: runtime/log/app.dat</p>
<pre>
app()->log->data('event_name', $extra);
</pre>
<h3>相关文件</h3>
<ul>
    <li>app/Web/ExampleController.php</li>
</ul>
