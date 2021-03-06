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
    <div class="row">
        <div class="col-md-1" id="main-top">
            <div class="main-nav-box" onclick="JumpMenu('/index.php/Home/Index/system.html');">
                <span class="font-icon glyphicon glyphicon-globe"></span>
                <p>系统</p>
            </div>
        </div>
        <div class="col-md-1 main-nav">
            <div class="main-nav-box" onclick="JumpMenu('/index.php/Home/Index/info.html');">
                <span class="font-icon glyphicon glyphicon-list-alt"></span>
                <p>信息</p>
            </div>
        </div>
        <div class="col-md-1 main-nav">
            <div class="main-nav-box" onclick="JumpMenu('/index.php/Home/Index/column.html');">
                <span class="font-icon glyphicon glyphicon-folder-open"></span>
                <p>栏目</p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <iframe src="/index.php/Home/Index/system.html" id="left" name="left" frameborder="0" scrolling="auto" width="100%"></iframe>
        </div>
        <div class="col-md-10">
            <iframe src="/index.php/Home/Index/adminmain.html" id="adminmain" name="adminmain" frameborder="0" scrolling="auto" width="100%"></iframe>
        </div>
    </div>
</div>
<script type="text/javascript">
window.onload = function(){
    var left = document.getElementById("left");
    var main = document.getElementById('adminmain');
    var maintop = document.getElementById("main-top");
    var maintoph = parseInt(getStyle(maintop, 'height'))+20;
    left.style.height = (window.innerHeight-maintoph)+"px";
    main.style.height = (window.innerHeight-maintoph)+"px";
    window.onresize = function(){
        left.style.height = (window.innerHeight-maintoph)+"px";
        main.style.height = (window.innerHeight-maintoph)+"px";
    };

    function getStyle(el, attr) {
        var str = "";
        if (window.getComputedStyle !== 'undefined') {
            str = window.getComputedStyle(el, null)[attr];
        } else if (el.currentStyle !== 'undefined') {
            str = el.currentStyle[attr];
        }
        return str;
    }
}
</script>
</body>
</html>