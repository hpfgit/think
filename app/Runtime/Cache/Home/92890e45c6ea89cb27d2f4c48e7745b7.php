<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>文章管理</title>
    <link rel="stylesheet" href="/app/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/app/public/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/app/public/css/base.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="margin: 20px auto 20px;">
                <a href="/index.php/Home/Index/allNews" class="btn btn-info">增加信息</a>
            </div>
            <div class="col-md-12">
                <table class="table table-bordered table-hover news-list">
                    <tbody>
                    <tr><td></td><td>ID</td><td class="col-md-1">标题</td><td>作者</td><td>时间</td><td>操作</td></tr>
                        <?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr class="list"><td><input type="checkbox"></td><td><?php echo ($vo["id"]); ?></td><td class="col-md-1"><?php echo ($vo["title"]); ?></td><td>作者</td><td><?php echo ($vo["addtime"]); ?></td><td>
                                <a href="/index.php/Home/Index/editNews/id/<?php echo ($vo["id"]); ?>">修改</a> | <a href="">删除</a></td></tr><?php endforeach; endif; ?>
                    </tbody>
                </table>
            </div>

            <div class="col-md-12 add-news">
                <form class="from" method="post" enctype="multipart/form-data" action="/index.php/Home/Index/addNews">
                    <table class="table table-bordered">
                        <tbody>
                            <tr><td class="col-md-1">标题</td><td class="col-md-11"><input type="text" name="title" class="form-control" placeholder="标题"></td></tr>
                            <tr><td class="col-md-1">副标题</td><td class="col-md-11"><input type="text" name="ftitle" class="form-control" placeholder="副标题"></td></tr>
                            <tr><td class="col-md-1">特殊属性</td><td class="col-md-11"><input type="text" name="sattr" class="form-control" placeholder="特殊属性"></td></tr>
                            <tr><td class="col-md-1">标题图片</td><td class="col-md-11"><input type="text" value="" name="titlepic" id="filetext" style="height: 34px;width: 300px;border: 1px solid #ccc;border-radius: 5px;float: left;padding-left: 15px;" placeholder="标题图片"><span class="glyphicon glyphicon-picture upload" style="float: left;margin-top: 8px;display: inline-block;margin-left: 10px;" onclick="window.open('upload.html','newwindow','width=500,height=500,top=0,left=0');"></span></td></tr>
                            <tr><td class="col-md-1">内容简介</td><td class="col-md-11"><input type="text" name="context" class="form-control" placeholder="内容简介"></td></tr>
                            <tr><td class="col-md-1">作者</td><td class="col-md-11"><input type="text" name="author" class="form-control" placeholder="作者"></td></tr>
                            <tr><td class="col-md-1">新闻正文</td><td class="col-md-11"><input type="text" name="content" class="form-control" placeholder="新闻正文"></td></tr>
                        </tbody>
                    </table>
                    <div class="form-group">
                        <input type="submit" value="提交" class="btn btn-primary">
                        <input type="reset" value="重置" class="btn btn-danger">
                    </div>
                </form>
                <div class="news-list">
                    <ul>
                        <li>
                            <a href=""></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src="/app/public/js/jquery-3.2.1.min.js"></script>
    <script>
        $(".add-news").hide();
        winLocal(".news-list", ".list", "/index.php/Home/Index/allNews");
        function winLocal(el, child, url) {
            if ($(el).find("tr").length < 3) {
                $(child).hide();
                window.location.href = url;
            } else {
                return;
            }
        }
    </script>
</body>
</html>