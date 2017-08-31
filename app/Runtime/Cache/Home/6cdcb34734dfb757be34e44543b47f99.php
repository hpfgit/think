<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>main</title>
    <link rel="stylesheet" href="/app/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/app/public/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/app/public/css/base.css">
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			<table class="table table-bordered table-hover">
				<tbody>
					<tr><td colspan="2">网站信息</td></tr>
					<tr><td>域名</td><td><?php echo ($_SERVER['HTTP_HOST']); ?></td></tr>
					<tr><td>登陆者IP</td><td><?php echo ($_SERVER['REMOTE_ADDR']); ?></td></tr>
				</tbody>
			</table>
		</div>
		<div class="col-md-6">
			<table class="table table-bordered table-hover">
				<tbody>
					<tr><td colspan="2">服务器信息</td></tr>
					<tr><td>服务器软件</td><td><?php echo ($_SERVER['SERVER_SOFTWARE']); ?></td></tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>