<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta content="text/html; charset=utf-8" http-equiv="content-type">
		<title>芬兰校友-首页 - 时尚个性化的网络互动社区 </title>
<!--logo-->
<link href= "<?php echo base_url();?>system/application/views/image/favicon.ico "  rel= "Shortcut Icon " />

<!--layout-->
<link href="<?php echo base_url();?>system/application/views/css/layout/user.css" type="text/css" rel="stylesheet">
<link href="<?php echo base_url();?>system/application/views/css/layout/main.css" type="text/css" rel="stylesheet">
<!--poll-->
<link href="<?php echo base_url();?>system/application/views/css/file/poll/poll.css" type="text/css" rel="stylesheet">

<!--jquery-->
	<script src="<?php echo base_url();?>system/application/views/js/jquery.js" type="text/javascript"></script>
<!--validate-->
     <script src="<?php echo base_url();?>system/application/views/js/validate/jquery.validate.js" type="text/javascript"></script>

<script type="text/javascript">	 
$(document).ready(function() {

//option
$('#submit').click(function() {
	var count = 0;
	$(".t_input").each(function(data){
		var option = $.trim($(this).val());
		if (option!="") {
			count++;
		}	    					
	});
	if(count<3){
		alert("请至少添加三个候选项!");
	}		
});	
	
//check question name		
	$("#commentForm").validate({
	    success: "valid",
		rules: {
			 	poll_question: {
		 	     	required: true,
					minlength: 3,
			    	remote: {
						url: "<?php echo base_url();?>index.php/zone/check_question_name/<?php echo $this->uri->segment(3);?>",
						type: "post",
						data: {
							poll_question: function(){
								return $("#poll_question").val();
							}
						}
					}	
			     }
	   },			
		messages: {
				poll_question: {
					required: "请输入投票标题",
					remote: "标题已存在",
					minlength: "用户名最少3位数"
				}
			}		
    });

});

</script>
	
<!--load image-->
<style>
	label.error {
		background: url(<?php echo base_url();?>system/application/views/image/e.gif) no-repeat;
		padding-left: 16px;		
	}
	label.valid {
		background: url(<?php echo base_url();?>system/application/views/image/r.gif) no-repeat;
		padding-left: 16px;	
	}
</style>	

	</head>
<body>
<div id="wrapbig">

<!--header-->	
<table width="990px" cellspacing="0" cellpadding="0" border="0" align="center">
   	<tbody><tr>
 	   <td style="height: 90px; background-image: url(&quot;<?php echo base_url();?>system/application/views/image/header_01.gif&quot;);">
	   <table height="90" width="990" cellspacing="0" cellpadding="0" border="0" align="center">
    <tbody><tr>
        <td width="188" style="padding-left: 30px; width: 200px;" rowspan="2"></td>
       	<td width="802" valign="center" align="right" style="padding-bottom: 5px;">
			<span class="welcomeme">欢迎您：
				<a href="main.php?">
					<?php
						 echo anchor("zone/user_page/".$user_name,"$user_name"); 
					?>
				</a>
			</span>  
			积分:<a style="font-size: 11px; padding: 0pt 0pt 0pt 5px;" href="#">
					<img src="<?php echo base_url();?>system/application/views/image/credit.gif">5
				</a> |  
			<span><a href="<?php echo base_url();?>">退出</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</td>
   		</tr>
    </tbody></table></td>
  		</tr>
	</tbody>
</table>
<!--end header-->	

<!--menu-->
<table width="974" cellspacing="0" cellpadding="0" border="0" align="center">
  <tbody><tr>
    <td class="usermenu"><table width="800" cellspacing="0" cellpadding="0" border="0">
      <tbody><tr>
        <td><?php echo anchor("zone/user_page/".$user_name,"我的空间"); ?></td>
		<td><?php echo anchor("zone/user_info/".$user_name,"个人中心"); ?></td>
        <td><?php echo anchor("zone/sign/".$user_name,"我的心情"); ?></td>
		<td><?php echo anchor("zone/photo/".$user_name,"我的相册"); ?></td>
        <td><?php echo anchor("zone/article/".$user_name,"我的日志"); ?></td>
		<td><?php echo anchor("zone/poll/".$user_name,"我的投票"); ?></td>
		<td><a onclick="SetHome(this,window.location)" style="cursor:pointer;">设为首页</a></td>
        <td><a onclick="AddFavorite(window.location,document.title)" style="cursor:pointer;">加入收藏</a></td> 	     
        <td><?php echo anchor("zone/user_info/".$user_name,"个人资料"); ?></td>
        <td><a href="<?php echo base_url();?>">退出</a></td>
                </tr>
    </tbody></table></td>
  </tr>
  </tbody>
</table>
<!--end menu-->

<div id="wrap">
<!--main-->
<div id="main">
	
	<!--left-->
	<div id="app_sidebar">
		<ul id="default_userapp" class="app_list">
			
			<!--乐在其中-->
            <div bgcolor="#4e82e0" border="0" width="100%" onclick="w('gr')" id="sgr">
            	<li>
            		<div id="daohang" class="app_top_not">&nbsp;&nbsp;
						<img height="20" src="<?php echo base_url();?>system/application/views/image/menuminus.gif" id="igr">
						<strong>乐在其中</strong>
					</div>
        	    </li>
			</div>
			<div border="0" width="100%" style="display: block;" id="gr">
  				<li>
					<img src="<?php echo base_url();?>system/application/views/image/doing.gif">
					<?php echo anchor("zone/sign/".$user_name,"心情"); ?>
					<em>
						<?php 
							$data = array('class' => 'gray');
							echo anchor("zone/sign/".$user_name,"发布",$data); 
						?>
					</em>
				</li>
				<li>
					<img src="<?php echo base_url();?>system/application/views/image/album.gif">
					<?php echo anchor("zone/photo/".$user_name,"相册"); ?>
					<em>
						<?php 
							$data = array('class' => 'gray');
							echo anchor("zone/upload_photo/".$user_name,"上传",$data); 
						?>
					</em>
				</li>
				<li>
					<img src="<?php echo base_url();?>system/application/views/image/blog.gif">
					<?php echo anchor("zone/article/".$user_name,"日志"); ?>
					<em>
						<?php 
							$data = array('class' => 'gray');
							echo anchor("zone/creat_article/".$user_name,"发表",$data); 
						?>
					</em>
				</li>
				<li>
					<img src="<?php echo base_url();?>system/application/views/image/poll.gif">
					<?php echo anchor("zone/poll/".$user_name,"投票"); ?>
					<em>
						<?php 
							$data = array('class' => 'gray');
							echo anchor("zone/creat_poll/".$user_name,"发起",$data); 
						?>
					</em>
				</li>
			</div>
           
		   <!--个人设置--> 
			<div bgcolor="#4e82e0" border="0" width="100%" onclick="w('hd')" id="shd">
                <li>
                 	<div id="daohang" class="app_top_not">&nbsp;&nbsp;
				  		<img height="20" src="<?php echo base_url();?>system/application/views/image/menuminus.gif" id="ihd">
						<strong>个人设置</strong>
				 	</div>
                </li>
			</div>
            <div border="0" width="100%" style="display: block;" id="hd">
            	<li>
            		<img src="<?php echo base_url();?>system/application/views/image/thread.gif">
					<?php echo anchor("zone/user_info/".$user_name,"个人资料"); ?>
				</li> 
  				<li>
  					<img src="<?php echo base_url();?>system/application/views/image/thread.gif">
					<?php echo anchor("zone/user_pic/".$user_name,"我的头像"); ?>
				</li>
				<li>
  					<img src="<?php echo base_url();?>system/application/views/image/thread.gif">
					<?php echo anchor("zone/user_credit/".$user_name,"我的积分"); ?>
				</li>      
 				<li>
  					<img src="<?php echo base_url();?>system/application/views/image/thread.gif">
					<?php echo anchor("zone/user_pwd/".$user_name,"修改密码"); ?>
				</li> 
			</div>
           
		   <!--应用-->
		    <div bgcolor="#4e82e0" border="0" width="100%" onclick="w('yx')" id="syx">
                <li>
                	<div id="daohang" class="app_top_not">&nbsp;&nbsp;
						<img height="20" src="<?php echo base_url();?>system/application/views/image/menuminus.gif" id="iyx">
						<strong>应用</strong>
					</div>
             	</li>
			</div>
		</ul>
	</div>
	<!--end left-->

<!--main area-->
<div id="mainarea">
	
	<h2 class="title"><img src="<?php echo base_url();?>system/application/views/image/poll.gif">投票</h2>
		<div class="tabs_header">
			<ul class="tabs">
				<li class="active">
					<a href="<?php echo base_url();?>index.php/zone/creat_poll/<?php echo $this->uri->segment(3);?>">
						<span>发起新投票</span>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url();?>index.php/zone/poll/<?php echo $this->uri->segment(3);?>">
						<span>返回我的投票</span>
					</a>
				</li>
			</ul>
		</div>

	<div class="c_form">
		<?php 
			$attributes = array('class' => 'cmxform', 'id' => 'commentForm');
			echo form_open("zone/insert_poll",$attributes);
		?>
			<table cellspacing="4" cellpadding="4" width="100%" class="infotable">
				<tbody><tr>
					<th width="80">投票主题</th>
						<td>
							<input type="text" value="" name="poll_question" id="poll_question" style="width: 450px; border:1px solid #DDDDDD; line-height:16px; padding:3px 2px;"><br>
						</td>
					</tr>
					<tr>
						<td height="1px" colspan="2">
							<div style="width: 550px; height: 1px; border-bottom: 1px solid rgb(221, 221, 221);"></div>
						</td>
					</tr>
					<tr>
						
						<th>候选项1</th>
							<td>
								<input type="text" maxlength="120" value="" name="option1" style="width: 450px;" class="t_input">
							</td>
					</tr>
					<tr>
						<th>候选项2</th>
							<td>
								<input type="text" maxlength="120" value="" name="option2" style="width: 450px;" class="t_input">
							</td>
					</tr>
					<tr>
						<th>候选项3</th>
							<td>
								<input type="text" maxlength="120" value="" name="option3" style="width: 450px;" class="t_input">
							</td>
					</tr>
					<tr>
						<th>候选项4</th>
							<td>
								<input type="text" maxlength="120" value="" name="option4" style="width: 450px;" class="t_input">
							</td>
					</tr>
					<tr>
						<th>候选项5</th>
							<td>
								<input type="text" maxlength="120" value="" name="option5" style="width: 450px;" class="t_input">
							</td>
					</tr>
					<tr>
						<th>候选项6</th>
							<td>
								<input type="text" maxlength="120" value="" name="option6" style="width: 450px;" class="t_input">
							</td>
					</tr>
					<tr>
						<th>候选项7</th>
							<td>
								<input type="text" maxlength="120" value="" name="option7" style="width: 450px;" class="t_input">
							</td>
					</tr>
					<tr>
						<th>候选项8</th>
							<td>
								<input type="text" maxlength="120" value="" name="option8" style="width: 450px;" class="t_input">
							</td>
					</tr>
					<tr>
						<th>候选项9</th>
							<td>
								<input type="text" maxlength="120" value="" name="option9" style="width: 450px;" class="t_input">
							</td>
					</tr>
				</tbody>
				<tbody><tr>
					<th></th>
						<td>
							<input type="hidden" value="<?php echo $this->uri->segment(3);?>" name="user_name">
							<input type="submit" class="button" value="发起投票" id="submit"  name="submit">
						</td>
					</tr>
				</tbody>
			</table>
		</form>
	</div>

</div>
<!--/mainarea-->

</div>
<!--/main-->

<div title="" id="footer">
	<p class="r_option">
		<a title="TOP" id="a_top" onclick="window.scrollTo(0,0);" href="javascript:;">
			<img style="padding: 5px 6px 6px;" alt="" src="<?php echo base_url();?>system/application/views/image/top.gif">
		</a>
	</p>
</div>

</div>
<!--/wrap-->
</div>

</body>
</html>