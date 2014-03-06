<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta content="text/html; charset=utf-8" http-equiv="content-type">
		<title>芬兰校友-首页 - 时尚个性化的网络互动社区 </title>
<!--logo-->
<link href= "<?php echo base_url();?>system/application/views/image/favicon.ico "  rel= "Shortcut Icon " />
<!--layout-->
<link href="<?php echo base_url();?>system/application/views/css/layout/user.css" type="text/css" rel="stylesheet">
<link href="<?php echo base_url();?>system/application/views/css/layout/main.css" type="text/css" rel="stylesheet">

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
            	<li><img src="<?php echo base_url();?>system/application/views/image/thread.gif">
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

<!--mainarea-->	
<div id="mainarea">
	<h2 class="title"><img src="<?php echo base_url();?>system/application/views/image/profile.gif">个人设置</h2>
	
	<!--menu-->
	<div class="tabs_header">
		<ul class="tabs">
			<li>
				<a href="<?php echo base_url();?>index.php/zone/user_info/<?php echo $this->uri->segment(3);?>">
					<span>个人资料</span>
				</a>
			</li>
			<li>
				<a href="<?php echo base_url();?>index.php/zone/user_pic/<?php echo $this->uri->segment(3);?>">
					<span>我的头像</span>
				</a>
			</li>
			<li class="active">
				<a href="<?php echo base_url();?>index.php/zone/user_credit/<?php echo $this->uri->segment(3);?>">
					<span>我的积分</span>
				</a>
			</li>
			<li>
				<a href="<?php echo base_url();?>index.php/zone/user_pwd/<?php echo $this->uri->segment(3);?>">
					<span>修改密码</span>
				</a>
			</li>
		</ul>
	</div>

	<div class="l_status c_form">
		<a class="active" href="<?php echo base_url();?>index.php/zone/user_credit/<?php echo $this->uri->segment(3);?>">我的积分</a><span class="pipe">|</span>
		<a href="<?php echo base_url();?>index.php/zone/user_credit_rule/<?php echo $this->uri->segment(3);?>">用户组规则</a><span class="pipe">|</span>
	</div>

	<div class="c_form">
		<table cellspacing="0" cellpadding="0" class="formtable">
			<tbody><tr>
				<th width="150">经验值:</th>
				<td>
					<a title="" href="javascript:void(0);"><img align="absmiddle" src="<?php echo base_url();?>system/application/views/image/star_level1.gif"></a>
				</td>
			</tr>
			<tr>
				<th width="150">&nbsp;</th><td class="gray">
					经验每满 <strong>500</strong> 个，就会增加一个图标 
					<img align="absmiddle" src="<?php echo base_url();?>system/application/views/image/star_level1.gif"><br>
					每满 <strong>5</strong> 个当前图标就升级为 <strong>1</strong> 个高一等级图标<br>
					图标等级由低到高为：
					<img src="<?php echo base_url();?>system/application/views/image/star_level1.gif">
					<img src="<?php echo base_url();?>system/application/views/image/star_level2.gif">
					<img src="<?php echo base_url();?>system/application/views/image/star_level3.gif">
					<img src="<?php echo base_url();?>system/application/views/image/star_level4.gif">
					<img src="<?php echo base_url();?>system/application/views/image/star_level5.gif">
					<img src="<?php echo base_url();?>system/application/views/image/star_level6.gif">
					<img src="<?php echo base_url();?>system/application/views/image/star_level7.gif">
					<img src="<?php echo base_url();?>system/application/views/image/star_level8.gif">
					<img src="<?php echo base_url();?>system/application/views/image/star_level9.gif">
					<img src="<?php echo base_url();?>system/application/views/image/star_level10.gif">
				</td>
			</tr>
			<tr>
				<th width="150">用户组:</th>
				<td>
					<span>中级会员</span>
				</td>
			</tr>
			<tr>
				<th width="150">积分数:</th>
				<td>
					<img src="<?php echo base_url();?>system/application/views/image/credit.gif">
					<span style="color: red; font-size: 14px;">5</span>
				</td>
			</tr>
			<tr>
				<th>访问量:</th>
				<td>4 
					<span class="gray">(<a href="space.php?do=top&amp;view=viewnum">查看排名</a>)</span>
				</td>
			</tr>
			<tr>
				<th>创建时间:</th>
				<td>2010-07-09</td>
			</tr>
			<tr>
				<th>最后更新:</th>
				<td>2010-08-22</td>
			</tr>
			<tr>
				<th>空间容量:</th>
				<td> 最大空间 50 MB, 已用    0 B  (0%)</td>
			</tr>
		</tbody>
	</table>
<br>


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


</div></body></html>