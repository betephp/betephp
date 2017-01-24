<h2>Web接口</h2>
<div>BetePHP将应用运行模式分为Web和Console，每一个web接口请求对应着一个Action文件，/example/web请求的Action位于app/Web/Example/Web.php，在Action中，你可以通过Request对象获取请求的GET/POST参数。</div>
<pre>
class Web extends Action
{
    public function run(Request $request)
    {
        $data = [
            'get' => $request->get(),
            'post' => $request->post(),
        ];
        return $this->render('example/web', $data);
    }
}
GET请求参数:
<?php print_r($get); ?>
</pre>
<pre>
POST请求参数:
<?php print_r($post); ?>
</pre>
<h3>相关文件</h3>
<ul>
    <li>app/Web/Example/Web.php</li>
</ul>