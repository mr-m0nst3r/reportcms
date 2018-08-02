<?php if (!defined('THINK_PATH')) exit();?><html>
<meta charset="UTF-8">
<title>项目列表</title>

<body>

<!--添加项目-->
<p>
<div>
    <a href="/Home/Project/add">添加项目</a>
</div>
</p>

<!--提交漏洞-->
<p>
<div>
    <a href="/Home/Vuls/show">提交漏洞</a>
</div>
</p>

<div>
    <ul>
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="/Home/Project/showDetails?id=<?php echo ($vo["id"]); ?>">"<?php echo ($vo["client"]); ?>":<?php echo ($vo["pnumber"]); ?></a> ------------ <a href="/Home/Project/doDelete?id=<?php echo ($vo["id"]); ?>">删除</a>-<a href="/Home/Project/doEdit?id=<?php echo ($vo["id"]); ?>">编辑</a></li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
</div>
</body>

</html>