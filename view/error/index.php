<!DOCTYPE html>
<html>
<head>
<title><?= $message ?></title>
<style type="text/css">
    #wrapper {
        margin: 5%;
        word-wrap: break-word;
        word-break: normal;
        line-height: 1.5;
    }
    h1 {  }
</style>
</head>
<body>
<div id="wrapper">
    <h1><?= $message ?></h1>
    <div>
        <?= $trace ?>
    </div>
</div>
</body>
</html>
