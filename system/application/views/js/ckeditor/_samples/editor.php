<?php 
	session_start();
	include("../../../../../conn.php"); 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Untitled Document</title>
<!--jquery-->
	<script src="../../../../../js/jquery.js" type="text/javascript"></script>
<!--layout-->
<link type="text/css" href="../../../../../css/file/editor/editor.css" rel="stylesheet" />
<!--sign in pop-->
<link type="text/css" href="../../../../../../css/file/sign_in_pop/front.css" rel="stylesheet" />
<!--text editor-->
<link href="sample.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="../ckeditor.js"></script>
	<script src="sample.js" type="text/javascript"></script>
	

<script type="text/javascript">
$(document).ready(function(){
//menu
	$(".trigger").click(function(){
		$(".panel").toggle("fast");
		$(this).toggleClass("active");
		return false;
	});
	  
});

</script>
		  
<style type="text/css">
/*editor body { background: #ccc;} */
	div.jHtmlArea .ToolBar ul li a.custom_disk_button {
    	background: url(images/disk.png) no-repeat;
        background-position: 0 0;
    }
        
    div.jHtmlArea { border: solid 1px #ccc; }
</style>
		
	</head>
	<body>

<!--body-->
<div id="b">	

	<div id="head">
		<img src ="../../../../../image/bbs_main/tophead01.jpg" id="tophead">
	</div>

<!--menu-->
	<div id="nav">
		<div id="page">
			<a href="main.php" class="trigger" onfocus="this.blur()">i生活社区 
			<img src="../../../../../image/bbs_display/arrow_down.gif" style="border:0px;">
			<?php 
			if(isset($_GET["type"])){
				if($_GET["type"]==1){
					echo '官方公告专版 » 发新话题';
				}
				else{
					echo $_GET["type"].' » 发新话题';
				}
			}
	  ?>
			</a>
		</div>
		
	</div>
<!--end menu-->

<div id="introducte"><br>
<?php 
			if(isset($_GET["type"])){
				if($_GET["type"]==1){
					echo '
							<a id="introducte1">官方公告专版&nbsp;&nbsp;&nbsp;</a><a>[ 0 主题 / 0 回复 ]</a>
							<p>版块介绍: i生活世界杯讨论区 发布官方公告 禁止发表个人言论</p>
							<p>版主: *空缺中*</p>
						 ';
				}
				else{
					$type=$_GET["type"];
						$sql="SELECT * FROM whip66_bbs_main WHERE title = '$type' ";
						$file=mysql_query($sql, $conn);
						while($row=mysql_fetch_assoc($file)){
							echo '
									<a id="introducte1">'.$type.'&nbsp;&nbsp;&nbsp;</a><a>[ 0 主题 / 0 回复 ]</a>
									<p>版块介绍: '.$row["description"].'</p>
									<p>版主: *空缺中*</p>
						 		  ';
						}
					
				}
			}
?>
</div>

<!--content-->
<div id="content">

<!--for user (name, time)-->
	<div id="user">
<?php
	if(isset($_GET["name"])){
		$name=$_GET["name"];
		$type=$_GET["type"]==1;

		$sql="SELECT * FROM whip66_account WHERE name='$name'";
		$file=mysql_query($sql, $conn);
		$row=mysql_fetch_assoc($file);
		echo '<div>
				 <a href = "../../../../user/user.php?name='.$name.'" style="text-decoration:none;">
			  		 <img src ="../../../../../image/bbs_main/newtopic.gif" id="newtopic">&nbsp;&nbsp;
			 	 </a>
			 	 <a style="position:absolute; margin-top:13px;">欢迎回来&nbsp;'.$name.'</a>
			 	 <a>您上次访问是在: '.$row["user_time"].'</a>
			  </div>';
		
		echo '<div id="edit_link"">
			  	<a href="http://www.cylyc.com/liyicheng/whip66/file/bbs/main.php">
					<img src="../../../../../image/bbs_display/arrow_left.gif" style="border:0px;">&nbsp;返回首页
				</a>
			  </div>';
	}
	else{
		echo '
<div id="container">
  <div id="topnav" class="topnav"> 
  	你可以<a href="../../sign_up/sign_up.php">注册</a>一个帐号，并以此
    <a href="login" class="signin" id="login">登录</a>，以浏览更多精彩内容，并随时发布观点，与大家交流
  </div> 

  <fieldset id="signin_menu">
    <form method="post" id="signin" action="../../login_check/login_check_pop/check_login2.php">
      <p>
      <label for="username">用户名:</label>
      <input id="username" name="user_name" value="" title="username" tabindex="4" type="text">
      </p>
      <p> 
        <label for="password">密码:</label >
        <input id="password" name="password" value="" title="password" tabindex="5" type="password">
      </p>
      <p class="remember">
      	<input class="button" type="submit" value="提交" id="signin_submit" />
        <input id="remember" name="remember_me" value="1" tabindex="7" type="checkbox">
        <label for="remember" style="font-size: 13px; " >保持登陆</label>
      </p>
      <p class="forgot"> <a href="../file/login_register/ForgetPwd.php" id="resend_password_link">忘记密码?</a> </p>
    </form>
  </fieldset>
</div>

<div id="back">
	<a href="http://www.cylyc.com/liyicheng/whip66/file/bbs/main.php">
		<img src="../../../../../image/bbs_display/arrow_left.gif" style="border:0px;">&nbsp;返回首页
	</a>
</div>
';  
	}

	if(isset($_GET["check"])&&($_GET["check"]==0)){
		echo '<a style="position:absolute; color:red; font-weight:bolder; margin-left:20px; ">用户名或密码错误</a>';
	}
	
?> 
	</div> <hr size="3px;" style="border:2px solid #dddddd; margin-top:0%;">	 
<!--end for user (name, time)-->

<!--text editor-->
	<div id="editor">
		<p id="editor1">发新话题</p>
		<form action="sample_posteddata.php" method="post">
			<label>标题</label>
				<?php
					if(isset($_GET["check"]) && $_GET["check"]==1){
						echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a>帖子标题或内容不能为空</a>';
					}
				?>
			<br>
				<input type="text" name="title" id="title"><br><br>
			<label>内容</label>
				<p>
					<textarea cols="80" id="editor_kama" name="editor_kama" rows="10"></textarea>
					<script type="text/javascript">
					//<![CDATA[
	
						CKEDITOR.replace( 'editor_kama',
							{
								skin : 'kama'
							});

					//]]>
					</script>
				</p><br>		
			<input type="hidden" name="name" id="name" value="<?php echo $_GET["name"]; ?>">
			<input type="hidden" name="type" id="type" value="<?php echo $_GET["type"]; ?>">
			
			<input type="submit" name="submit" id="submit" value="确认发表">	
			<input type="reset" name="reset" id="reset" value="重置">
	</form>
	</div>
<!--end text editor-->

	</div>	
<!--end content-->	

</div>
<!--end body-->
		
		
  <div class="panel" style="display:none;"><br>
     
	<p class="pop1">讨论区</p>	
<?php
	$sql="SELECT * FROM whip66_bbs_main WHERE main_type = 'news' ";
	$file=mysql_query($sql, $conn);
	while($row=mysql_fetch_assoc($file)){
		echo '<div><a href="bbs.php?type='.$row["title"].'" class="pop2">'.$row["title"].'</a></div>';
	}
?>	
	<p class="pop1">活动区</p>	
<?php
	$sql="SELECT * FROM whip66_bbs_main WHERE main_type = 'game' ";
	$file=mysql_query($sql, $conn);
	while($row=mysql_fetch_assoc($file)){
		echo '<div><a href="bbs.php?type='.$row["title"].'" class="pop2">'.$row["title"].'</a></div>';
	}
?>	
	<p class="pop1">吃喝玩乐讨论区</p>	
<?php
	$sql="SELECT * FROM whip66_bbs_main WHERE main_type = 'food' ";
	$file=mysql_query($sql, $conn);
	while($row=mysql_fetch_assoc($file)){
		echo '<div><a href="bbs.php?type='.$row["title"].'" class="pop2">'.$row["title"].'</a></div>';
	}
?>	
	<p class="pop1">娱乐影视讨论区</p>	
<?php
	$sql="SELECT * FROM whip66_bbs_main WHERE main_type = 'movie' ";
	$file=mysql_query($sql, $conn);
	while($row=mysql_fetch_assoc($file)){
		echo '<div><a href="bbs.php?type='.$row["title"].'" class="pop2">'.$row["title"].'</a></div>';
	}
?>	
	<p class="pop1">情感生活讨论区</p>	
<?php
	$sql="SELECT * FROM whip66_bbs_main WHERE main_type = 'love' ";
	$file=mysql_query($sql, $conn);
	while($row=mysql_fetch_assoc($file)){
		echo '<div><a href="bbs.php?type='.$row["title"].'" class="pop2">'.$row["title"].'</a></div>';
	}
?>	

  </div>
		
	</body>
</html>
