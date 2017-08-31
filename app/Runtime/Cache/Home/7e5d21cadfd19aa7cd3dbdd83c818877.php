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
<div class="container-fluid">
    <div class="col-md-12">
        <form action="/index.php/Home/Index/editcolumn" method="post" class="form-horizontal">
        <?php if(is_array($data)): foreach($data as $key=>$vo): ?><div class="form-group">
                <label for="columnid" class="col-sm-1 control-label">栏目ID</label>
                <div class="col-md-11">
                    <input type="text" name="columnid" value="<?php echo ($vo["id"]); ?>" readonly="true" class="form-control" placeholder="栏目ID">
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="col-sm-1 control-label">栏目名称</label>
                <div class="col-md-11">
                    <input type="text" name="name" value="<?php echo ($vo["name"]); ?>" class="form-control" placeholder="栏目名称">
                </div>
            </div>
            <div class="form-group">
                <label for="orde" class="col-sm-1 control-label">栏目顺序</label>
                <div class="col-md-11">
                    <input type="text" name="orde" value="<?php echo ($vo["orde"]); ?>" class="form-control" placeholder="栏目顺序">
                </div>
            </div>
            <div class="form-group">
            <div class="col-md-offset-1 col-md-11">
                <input type="submit" type="submit" value="提交" class="btn btn-primary">
            </div>                
            </div><?php endforeach; endif; ?>
        </form>
    </div>
</div>
</body>
</html>