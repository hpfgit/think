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
            <div class="col-md-12">
                <button type="button" class="btn btn-info">增加信息</button>
                <form class="from" method="post" enctype="multipart/form-data" action="/index.php/Home/Index/addNews">
                    <table class="table table-bordered add-news">
                        <tbody>
                            <tr><td class="col-md-1">标题</td><td class="col-md-11"><input type="text" name="title" class="form-control" placeholder="标题"></td></tr>
                            <tr><td class="col-md-1">副标题</td><td class="col-md-11"><input type="text" name="ftitle" class="form-control" placeholder="副标题"></td></tr>
                            <tr><td class="col-md-1">特殊属性</td><td class="col-md-11"><input type="text" name="sattr" class="form-control" placeholder="特殊属性"></td></tr>
                            <tr><td class="col-md-1">标题图片</td><td class="col-md-11"><input type="text" name="titlepic" class="form-control" placeholder="标题图片"></td></tr>
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
</body>
</html>