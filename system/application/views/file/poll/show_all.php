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
	<script type="text/javascript" src="<?php echo base_url();?>system/application/views/js/poll/prototype.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>system/application/views/js/poll/jsProgressBarHandler.js"></script>		

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
	<div class="c_header a_header">
		<?php foreach($poll_pic->result() as $rows):?>
			<div class="avatar48">
				<img src="<?php echo base_url();?>uploads/pic/<?php echo $rows->image?>">
			</div>
		<?php endforeach;?>
		<p style="font-size: 14px;"><?php echo $user_name;?>的投票</p>
		<p class="spacelink"><?php echo $poll_question;?></p>
 	</div>

	<h2 class="title"><img src="<?php echo base_url();?>system/application/views/image/poll.gif">投票</h2>
	<div class="tabs_header">
		<ul class="tabs">
			<li class="active">
				<a href="<?php echo base_url();?>index.php/zone/show_poll/<?php echo $this->uri->segment(3);?>/<?php echo $poll_question;?>">
					<span>我的投票</span>
				</a>
			</li>
			<li>
				<a href="<?php echo base_url();?>index.php/zone/poll/<?php echo $this->uri->segment(3);?>">
					<span>返回我的投票 </span>
				</a>
			</li>
			<li class="null">
				<a href="<?php echo base_url();?>index.php/zone/creat_poll/<?php echo $this->uri->segment(3);?>">发起投票</a>
			</li>
		</ul>
	</div>

	<div id="content">
		<div class="poll_header">
			<div class="floatleft">
				<?php foreach($poll_info->result() as $row):?>
					<p>发起时间: <?php echo $row->poll_time;?></p>
					<p>参与人数: <strong><?php echo $row->poll_total_vote;?></strong> 人</p>
				<?php endforeach;?>
			</div>
		</div>

		<div class="poll_title">
			<h3>
				<img src="<?php echo base_url();?>system/application/views/image/poll_icon.gif">
				<?php echo $poll_question;?>
			</h3>
		</div>


		<?php echo form_open("zone/insert_vote");?>
<?php $i=1;?>
<?php
	$vote_options=$this->db->query("SELECT * FROM poll_vote WHERE vote_username='$user_name' and vote_question='$poll_question'"); 
	$vote_total=$this->db->query("SELECT * FROM poll WHERE poll_username='$user_name' and poll_question='$poll_question'"); 

	foreach($vote_options->result() as $row_option):
	foreach($vote_total->result() as $row_total):	
?>
			<ol class="poll_item_list">
				<li>
					<div style="width:540px;margin : 0 auto; text-align:left;" >
					<!--poll-->
						<div id="demo">
							<table width="100%"><tr>
								<td width="50%" align="center">
									<span style="color:#006600;font-weight:bold;">
										<?php echo $row_option->vote_option;?>:
									</span>
								</td>
								<td width="40%">	
									<span class="progressBar" id="<?php echo 'element'.$i++;?>">
										<?php 
											if(($row_total->poll_total_vote)==0){
												echo "0";
											}
											if(($row_total->poll_total_vote)!=0){
												echo (($row_option->vote_vote)*100/($row_total->poll_total_vote));
											}
										?>%
									</span>&nbsp;(<?php echo $row_option->vote_vote;?>)			
								</td>
								<td width="10%">
									<input type="hidden" value="<?php echo $poll_question;?>" name="poll_question">
									<input type="hidden" value="<?php echo $user_name;?>" name="user_name">
									<input type="radio" value="<?php echo $row_option->vote_option;?>" name="poll_option">
								</td>
							</table>
						</div>
					<!--end poll-->	
					</div>
				</li>
			</ol>
<?php endforeach;?>
<?php endforeach;?>
			<div class="poll_submit">
				<input type="submit" value="投票" name="votebutton" class="submit">
			</div>
		</form>

		
		<div class="poll_htitle"></div>
		<div id="showvoter" style="">
			<ul class="voter_list" id="vote_list">
				<li>
					<label style="color:black;">asd57210033</label>
					2010-07-19 16:04:16 投票给 "浪漫的巴黎"
				</li>
			</ul>
		</div>
		
	</div>

	<div id="sidebar">
		<div class="sidebox">
			<h2 class="title">最新投票</h2>
			<ul class="news_list poll_new">
				<?php foreach($poll_new->result() as $row_new):?>
					<li style="height: auto;">
						<a href="<?php echo base_url();?>index.php/zone/show_poll/<?php echo $this->uri->segment(3);?>/<?php echo $row_new->poll_question;?>">
							<?php echo $row_new->poll_question;?>
						</a>
					</li>
				<?php endforeach;?>
			</ul>
		</div>
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