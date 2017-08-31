<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>thinkphp3</title>
    <link rel="stylesheet" href="/app/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/app/public/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/app/public/css/base.css">
    <link rel="stylesheet" type="text/css" href="/app/public/css/index.css">
    <script type="text/javascript">
        function JumpMenu(url) {
            document.getElementById("left").src = url;
        }
    </script>
</head>
<body>
<div class="addcolumn">
    <button type="button" class="btn btn-primary"><a href="/index.php/Home/Index/addcolumn" style="color: #fff;">增加栏目</a></button>
    <table class="table table-bordered table-hover">
        <tbody>
            <tr>
                <td>顺序</td>
                <td>ID</td>
                <td>栏目名</td>
                <td>栏目管理</td>
            </tr>
            <?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr>
                <td><?php echo ($vo["orde"]); ?></td>
                <td><?php echo ($vo["id"]); ?></td>
                <td><?php echo ($vo["name"]); ?></td>
                <td><a href="/index.php/Home/Index/editcolumn/id/<?php echo ($vo["id"]); ?>">修改</a>&nbsp;|&nbsp;<a href="/index.php/Home/Index/delcolumn/id/<?php echo ($vo["id"]); ?>">删除</a></td>
            </tr><?php endforeach; endif; ?>
        </tbody>
    </table>
</div>
</body>
</html>