<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>thinkphp3</title>
    <link rel="stylesheet" href="/app/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/app/public/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/app/public/css/base.css">
</head>
<body>
<div class="top clearfix">
    <h1></h1>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-1 main-left">
            <div class="index"><span class="glyphicon glyphicon-home"></span><a onclick="JumpMenu('/app/Home/View/Index/adminmain.html')">后台首页</a></div>
            <div class="article"><span class=" glyphicon glyphicon-duplicate"></span><a onclick="JumpMenu('/app/Home/View/Index/article.html')">文章管理</a></div>
            <div class="system"><span class="glyphicon glyphicon-cog"></span><a onclick="JumpMenu('/app/Home/View/Index/set.html')">系统设置</a></div>
        </div>
        <div class="col-md-11 main-right">
            <iframe src="/app/Home/View/Index/adminmain.html" id="myiframe" frameborder="0" scrolling="auto" width="100%" height="100%"></iframe>
        </div>
    </div>
</div>
<script src="/app/public/js/jquery-3.2.1.min.js"></script>
<script src="/app/public/js/bootstrap.min.js"></script>
<script src="/app/public/js/index.js"></script>
</body>
</html>