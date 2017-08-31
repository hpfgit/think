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
        <form action="/index.php/Home/Index/addcolumn" method="post" class="form-horizontal">
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
                    <input type="submit" type="submit" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>