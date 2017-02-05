<h2>验证</h2>
<form method="POST">

    <?php if (is_array($errors) && !empty($errors)) : ?>
    <div class="errors">
        <?php foreach ($errors as $key => $error) : ?>
            <p><?= $error ?></p>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
    
    <?php if (app()->session->hasFlash('message')) : ?>
    <div class="success"><?= app()->session->getFlash('message') ?></div>
    <?php endif; ?>

    <div><input type="text" class="input-text" name="title" placeholder="标题"></div>
    <div><input type="text" class="input-text" name="content" placeholder="内容"></div>
    <div><input type="text" class="input-text" name="name" placeholder="姓名"></div>
    <div><input type="text" class="input-text" name="mobile" placeholder="手机"></div>
    <div><input type="text" class="input-text" name="email" placeholder="邮箱"></div>
    <div><input type="submit" class="input-submit" name="sub" value="提交"></div>

</form>
<h3>相关文件</h3>
<ul>
    <li>app/Web/ExampleController.php</li>
</ul>