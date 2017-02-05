<h2>Console模式</h2>
<div>Console模式下，下面的命令执行的代码逻辑位于app\Console\ExampleController的actionDailyUpdate方法中。</div>
<pre>
./bete example:dailyUpdate --num=10 --sleep=1 blog
</pre>
<br>
变量参数：
<pre>
Array
(
    [1] => blog
)
</pre>
选项参数：
<pre>
Array
(
    [num] => 10
    [sleep] => 1
)
</pre>
<h3>相关文件</h3>
<ul>
    <li>app/Console/ExampleController.php</li>
</ul>