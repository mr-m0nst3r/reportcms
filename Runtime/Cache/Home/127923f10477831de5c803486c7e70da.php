<?php if (!defined('THINK_PATH')) exit();?><html>
<meta charset="UTF-8">
<head>
        <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
</head>
<title>添加项目</title>

<body>

<div>

    <form action="doAdd" method="post" enctype="multipart/form-data">
        <ul>
            <li><div>项目名称</div><input type="text" name="name" value="测试数据"></li>
            <li> <div>客户名称</div><input type="text" name="client" value="测试数据"></li>
            <li><div>项目编号</div><input type="text" name="pnumber" value="测试数据"></li>
            <li><div>目标域名</div><input type="text" name="pdomain" value="测试数据"></li>
            <li><div>目标IP</div><input type="text" name="pip" value="测试数据"></li>
            <li><div>测试账号</div><input type="text" name="puser" value="测试数据"></li>
            <li><div>测试事件</div><input type="text" name="ptime" value="测试数据"></li>
            <li><div>摘要总结</div><textarea id='editor' name="psummary" rows="10" cols="100">总结</textarea></li>
            <script>
                ClassicEditor
                    .create( document.querySelector( '#editor' ) )
                    .catch( error => {
                        console.error( error );
                    } );
            </script>
            <li><input type="submit" value="Submit"></li>

        </ul>
    </form>

</div>

</body>
</html>