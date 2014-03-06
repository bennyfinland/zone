<?php 
	session_start();
	include("../../../../../conn.php"); 
	$name=$_GET["name"];
	$type=$_GET["type"];
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Untitled Document</title>
<!--jquery-->
	<script src="../../../../../js/jquery.js" type="text/javascript"></script>
<!--layout-->
<link href="sample.css" rel="stylesheet" type="text/css" />



	</head>

	<body>

<!--body-->
<div id="load">
	<img src="../../../../../image/bbs_display/loading.gif">
</div>

<div id="body">
	<div id="success">:: 帖子发表成功！::</div>
	<hr width="95%" style="border:1px dashed #888888; height:1px; margin-top:10px;">
	<div id="second">系统将在3秒后自动返回所在帖面，您也可以使用以下连接返回指定页面：</div>
	<div id="skip">
		<?php	
			if(isset($_GET["type"])){
				if($_GET["type"]==1){
					$T="官方公告专版";
				}
				else{
					$T=$_GET["type"];					
				}
			}
		
			echo'<p>返回所在版面 <a href="../../bbs.php?type='.$type.'+ & name='.$name.'">['.$T.']</a></p>';
			echo'<p>返回论坛首页 <a href="../../../main.php?type='.$type.'+ & name='.$name.'">[艾普论坛]</a></p>';
			header('refresh:3000;url=../../bbs.php?name='.$name.'+ & type='.urlencode($type).'');
		?>
	</div>
</div>
<!--end body-->
	</body>
</html>

