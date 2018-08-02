<?php if (!defined('THINK_PATH')) exit();?><html>
<meta charset="UTF-8">
<title>项目详情</title>

<body>
<h1><a href="#">输出报告</a></h1>
<div>
    <div>项目信息</div>
    <ul>
        <?php if(is_array($details)): $i = 0; $__LIST__ = $details;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><li><?php echo ($d["client"]); ?>=====<?php echo ($d["name"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
</div>

<div>
    <div>漏洞列表</div>
    <ul>
    <?php if(is_array($vlist)): $i = 0; $__LIST__ = $vlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vuls): $mod = ($i % 2 );++$i;?><li><?php echo ($vuls["vulgrp"]["name"]); ?>=====<?php echo ($vuls["urls"]); ?>==========<span><a href="/Home/Vuls/doDelete?id=<?php echo ($vuls["id"]); ?>">删除</a>=<a href="/Home/Vuls/doEdit?id=<?php echo ($vuls["id"]); ?>">编辑</a></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
</div>
</body>

</html>