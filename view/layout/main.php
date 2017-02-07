<!DOCTYPE html>
<html>
<head>
<title></title>
<style type="text/css">
body {
    line-height: 1.5em;
    font-family: arial;
}
a, a:visited {
    color: #000;
    text-decoration: underline;
}
a:hover {
    color: #000;
    text-decoration: none;
}
h1 {
    font-weight: bold;
}
.container ul {
    margin-left: 0;
    padding: 0 30px;
    line-height: 1.3em;
}
.container {
    height: auto;
    overflow: hidden;
    padding: 30px;
}
.sidebar {
    width: 200px;
    padding: 10px;
    float: left;
}
.content {
    float: none;
    width: auto;
    height: auto;
    padding: 10px 30px 30px;
    background: #DDD;
    overflow: hidden;
}
.input-text {
    width: 300px;
    height: 30px;
    font-size: 16px;
    padding-left: 10px;
}
.input-submit {
    margin-top: 5px;
}
input[type=submit] {
    padding:7px 15px; 
    background: #337ab7;
    color: #FFF; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px;
}
.errors {
    color: #d9534f;
    line-height: 1.2em;
    font-size: 12px;
}
</style>
</head>
<body>
<div class="container">
    <div class="sidebar">
        <h1>BetePHP</h1>
        <ul>
            <li><a href="/">首页</a></li>
            <li><a href="/example/1">路由</a></li>
            <li><a href="/example/middleware">中间件</a></li>
            <li><a href="/example/web?id=1&name=BetePHP">Web</a></li>
            <li><a href="/example/console">Console</a></li>
            <li><a href="/example/validation">验证</a></li>
            <li><a href="/example/session">Session</a></li>
            <li><a href="/example/database">数据库</a></li>
            <!-- <li><a href="/example/log">日志</a></li> -->
        </ul>
    </div>
    <div class="content">
    <?= $content ?>
    </div>
</div>
</body>
</html>