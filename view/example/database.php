<h2>数据库</h2>
<form method="POST">
    <input type="submit" name="sub" value="在user表插入一条数据">
</form>
<br>
执行插入数据库前需建立user表，建表语句如下：
<pre>
CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `create_time` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `user` ADD PRIMARY KEY (`id`);

ALTER TABLE `user` MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
</pre>
<h3>相关文件</h3>
<ul>
    <li>app/Web/Example/Database.php</li>
</ul>