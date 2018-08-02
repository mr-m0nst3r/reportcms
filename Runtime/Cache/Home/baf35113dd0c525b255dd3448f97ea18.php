<?php if (!defined('THINK_PATH')) exit();?><html>
<meta charset="UTF-8">
<head>
    <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
</head>
<title>漏洞提交页面</title>

<body>

<div>
    <form action="doAdd" method="post" enctype="multipart/form-data">
        <ul>
        <li><div>漏洞归属</div>
        <!--厂商列表-->
            <select name="projid">
                <?php if(is_array($plist)): $i = 0; $__LIST__ = $plist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["client"]); ?>:<?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select></li>
        <!--漏洞分类列表-->
            <li><div>漏洞类型</div>
        <select name="groupid">
            <?php if(is_array($vlist)): $i = 0; $__LIST__ = $vlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo2["id"]); ?>"><?php echo ($vo2["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
        </select></li>
        <!--漏洞URL-->
            <li><div>漏洞URLs</div><input type="text" name="urls"></li>
            <li><div>漏洞参数</div><input type="text" name="vulsparam"></li>

            <li><textarea id='description' name="description" cols="100" rows="10">漏洞描述</textarea></li>

            <li><textarea id='risk' name="risk" cols="100" rows="10">危害描述</textarea></li>

            <li><textarea id='vulsdetails' name="vulsdetails" cols="100" rows="10">漏洞详情</textarea></li>

            <li><textarea id='suggestions' name="suggestions" cols="100" rows="10">修复建议</textarea></li>

            <script>
                ClassicEditor
                    .create( document.querySelector( '#description' ) )
                    .catch( error => {
                        console.error( error );
                    } );

                ClassicEditor
                    .create( document.querySelector( '#risk' ) )
                    .catch( error => {
                        console.error( error );
                    } );

                ClassicEditor
                    .create( document.querySelector( '#vulsdetails' ) )
                    .catch( error => {
                        console.error( error );
                    } );

                ClassicEditor
                    .create( document.querySelector( '#suggestions' ) )
                    .catch( error => {
                        console.error( error );
                    } );
            </script>


        </ul>
    <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>