<?php if (!defined('THINK_PATH')) exit();?><html>
<meta charset="UTF-8">
<title>用户登陆</title>

<body>

<!--用户提交表单-->
<div class="index_login">用户登陆表单</div>
<form action="/Home/Index/login" method="post">
    <ul>
    <li><input type="text" name="name"></li>
        <li><input type="password" name="passwd"></li>
        <li><input type="submit" value="Login"></li>
    </ul>
</form>

</body>
</html>