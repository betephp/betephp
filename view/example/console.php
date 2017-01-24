<h2>Console命令行</h2>
<div>在Console Action中，你可以通过Request对象获取命令行参数、选项值。</div>
<br>
./bete example:dailyUpdate --num=10 --sleep=1 blog
<pre>
参数：
Array
(
    [1] => blog
)
</pre>
<pre>
选项：
Array
(
    [num] => 10
    [sleep] => 1
)
</pre>
<pre>
app()->request->param() #获取命令行变量参数
app()->request->option() #获取命令行OPTION参数
</pre>
<h3>相关文件</h3>
<ul>
    <li>app/Console/Example/DailyUpdate.php</li>
</ul>