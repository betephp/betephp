<!DOCTYPE html>
<html>
<head>
<style type="text/css">
    #wrapper {
        margin: 3% 5%;
        word-wrap: break-word;
        word-break: normal;
        line-height: 1.5;
    }
    h1 {
        border: #CCC 1px solid;
        background: #EEE;
        border-radius: 10px;
        font-size: 16px;
        padding: 7px 10px;
    }
    #content {
        border: #CCC 1px solid;
        border-radius: 10px;
        overflow: hidden;
    }
    #content .hd {
        line-height: 30px;
        background: #DDD;
        padding: 7px 10px;
    }
    #content .bd {
        padding: 10px;
    }
</style>
</head>
<body>
<div id="wrapper">
    <h1><?= $title ?></h1>

    <?php if (app()->env('dev')) : ?>
    <div id="content">
        <div class="hd"><?= $message ?></div>
        <div class="bd">
            <?= $trace ?>
        </div>
    </div>
    <?php endif; ?>
</div>
</body>
</html>
