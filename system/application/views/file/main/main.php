<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>芬兰校友-首页</title>
<!--logo-->
<link href= "<?php echo base_url();?>system/application/views/image/favicon.ico "  rel= "Shortcut Icon " />
<!--layout-->
<link href="<?php echo base_url();?>system/application/views/css/layout/user.css" type="text/css" rel="stylesheet">
<link href="<?php echo base_url();?>system/application/views/css/layout/main.css" type="text/css" rel="stylesheet">
<!--jquery-->
	<script src="<?php echo base_url();?>system/application/views/js/jquery.js" type="text/javascript"></script>

<!--dialog-->
<link type="text/css" href="<?php echo base_url();?>system/application/views/css/file/dialog/jquery.ui.all.css" rel="stylesheet" />
	<script type="text/javascript" src="<?php echo base_url();?>system/application/views/js/dialog/jquery.ui.core.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>system/application/views/js/dialog/jquery.ui.widget.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>system/application/views/js/dialog/jquery.ui.mouse.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>system/application/views/js/dialog/jquery.ui.draggable.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>system/application/views/js/dialog/jquery.ui.position.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>system/application/views/js/dialog/jquery.ui.resizable.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>system/application/views/js/dialog/jquery.ui.dialog.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>system/application/views/js/dialog/jquery.effects.core.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>system/application/views/js/dialog/jquery.effects.blind.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>system/application/views/js/dialog/jquery.effects.explode.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>system/application/views/js/dialog/main.js"></script>
	

<!--favorite-->   
    <script type="text/javascript" language="javascript">
    	function AddFavorite(sURL, sTitle){
	        try{
            	window.external.addFavorite(sURL, sTitle);
        	}
       		catch (e){
            	try{
                	window.sidebar.addPanel(sTitle, sURL, "");
            	}
           		catch (e){
                	alert("加入收藏失败，请使用Ctrl+D进行添加");
            	}
        	}
   		 }
   		function SetHome(obj,vrl){
 	      	 try{
               obj.style.behavior='url(#default#homepage)';obj.setHomePage(vrl);
       	   	 }
       		 catch(e){
                if(window.netscape) {
                        try {
                                netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect"); 
                        } 
                        catch (e) { 
                                alert("此操作被浏览器拒绝！\n请在浏览器地址栏输入“about:config”并回车\n然后将[signed.applets.codebase_principal_support]设置为'true'"); 
                        }
                        var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components.interfaces.nsIPrefBranch);
                        prefs.setCharPref('browser.startup.homepage',vrl);
                 }
       		 }
   		}
    </script>

	</head>
<body>

<!--start-->
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

<!--body-->
<div id="wrap">
<div id="space_page">
	
<!--ubar-->	
	<div id="ubar">
		<div id="space_avatar">
			<?php foreach($user_image->result() as $row):?>
				<img src="<?php echo base_url();?>uploads/pic/<?php echo $row->image;?>">
			<?php endforeach;?>
		</div>
		
		<div class="borderbox">
			<div style="width: 100%; overflow: hidden;">
			<img class="magicicon" src="<?php echo base_url();?>system/application/views/image/superstar.small.gif">
			<label id="a_magic_superstar"><?php echo $user_name;?></label>
			</div>
		</div><br>
		
		<div class="borderbox">
			<ul style="width: 100%; overflow: hidden;" class="spacemenu_list">
				<li><?php echo anchor("zone/user_pic/".$user_name,"我的头像"); ?></li>
				<li><?php echo anchor("zone/user_info/".$user_name,"个人资料"); ?></li>
				<li><?php echo anchor("zone/user_credit/".$user_name,"我的积分"); ?></li>
				<li><?php echo anchor("zone/user_pwd/".$user_name,"修改密码"); ?></li>
			</ul>
		</div><br>
		
	<div id="space_mymenu">
		<h2>个人菜单</h2>
		<ul class="line_list">
		<li>
			<?php 
				$data = array('class' => 'r_option');
				echo anchor("zone/user_info/".$user_name,"完善",$data); 
			?>
			<img src="<?php echo base_url();?>system/application/views/image/profile.gif">
			<?php echo anchor("zone/user_show_info/".$user_name,"个人资料"); ?>
		</li>
		<li>
			<?php 
				$data = array('class' => 'r_option');
				echo anchor("zone/sign/".$user_name,"发布",$data); 
			?>
			<img src="<?php echo base_url();?>system/application/views/image/doing.gif">
			<?php echo anchor("zone/sign/".$user_name,"心情"); ?>
		</li>
		<li>
			<?php 
				$data = array('class' => 'r_option');
				echo anchor("zone/creat_article/".$user_name,"发表",$data); 
			?>
			<img src="<?php echo base_url();?>system/application/views/image/blog.gif">
			<?php echo anchor("zone/article/".$user_name,"日志"); ?>
		</li>
		<li>
			<?php 
				$data = array('class' => 'r_option');
				echo anchor("zone/upload_photo/".$user_name,"上传",$data); 
			?>
			<img src="<?php echo base_url();?>system/application/views/image/album.gif">
			<?php echo anchor("zone/photo/".$user_name,"相册"); ?>
		</li>
		<li>
			<?php 
				$data = array('class' => 'r_option');
				echo anchor("zone/creat_poll/".$user_name,"发起",$data); 
			?>
			<img src="<?php echo base_url();?>system/application/views/image/poll.gif">
			<?php echo anchor("zone/poll/".$user_name,"投票"); ?>
		</li>
		</ul>
	</div>	
	</div>
<!--end ubar-->	

<!--content-->
	<div id="content">
		<?php foreach($user_info->result() as $row_user):?>
			<h3 id="spaceindex_name">
			<p><?php echo $row_user->user_name;?></>
			</h3>
		<?php endforeach;?>
	
	    <div id="spaceindex_note">
			<?php foreach($user_info->result() as $row_user):?>
				<ul class="note_list" style="color:#999; ">
					<li>用户昵称: <?php echo $row_user->user_nick_name;?></li>
				</ul>
			<?php endforeach;?>
			
			<?php foreach($sign_info->result() as $row_sign):?>
				<div id="mood_mystatus" style="color:#999;">
					<?php echo $row_sign->sign_body;?>
				</div><br>
			<?php endforeach;?>
		</div>
		
		<div id="space_info">
			<h3 class="feed_header">
				<?php 
					$data = array('class' => 'r_option');
					echo anchor("zone/user_info/".$user_name,"完善资料",$data); 
				?>
				个人资料
			</h3>
			<ul class="spacemenu_list">
				<?php foreach($user_time->result() as $row_time):?>
					<li><em>创建:</em><?php echo $row_time->first_time;?></li>
				<?php endforeach;?>
				
				<?php foreach($user_info->result() as $row_infos):?>
					<li><em>生日:</em><?php echo $row_infos->user_brithday;?></li>
					<li><em>婚恋状态:</em><?php echo $row_infos->user_marry;?></li>
					<li><em>性别:</em><?php echo $row_infos->user_sex ;?></li>
				<?php endforeach;?>
			</ul>
			<p class="info_more"><?php echo anchor("zone/user_show_info/".$user_name,"» 查看全部个人资料"); ?></p>
		</div>
		
		<div class="feed" id="space_feed">
			<h3 class="feed_header">
				<span class="r_option">	
					<?php echo anchor("zone/poll_all/".$user_name,"全部"); ?>
				</span>
				<span class="entry-title">个人动态</span>
			</h3>
			<div class="box_content">
				<ul>
					
					<?php foreach($poll_info->result() as $row_poll):?>
						<li id="feed_4848_li" class="s_clear "> 	
							<div style="width: 100%; overflow: hidden;">
								<img src="<?php echo base_url();?>system/application/views/image/poll.gif">
								<?php echo $row_poll->poll_username;?>  发起了新投票 
								<span class="gray">	
										<?php echo $row_poll->poll_time;?>
								</span>
								<div class="feed_content">
									<div class="detail">
										<a href="<?php echo base_url();?>index.php/zone/show_poll/<?php echo $user_name;?>/<?php echo $row_poll->poll_question;?>">
											<strong><?php echo $row_poll->poll_question;?></strong>
										</a><br>
										<?php 
											$poll_option=$this->db->query("SELECT * FROM poll_vote where vote_username='$row_poll->poll_username' and vote_question='$row_poll->poll_question' order by vote_id desc limit 0,2");  	
											foreach($poll_option->result() as $row_option):
										?>	
											<input type="radio" disabled=""><?php echo $row_option->vote_option;?><br>
										<?php endforeach;?>
										<input type="radio" disabled="">......
									</div>
								</div>
							</div>
						</li>
					<?php endforeach;?>
				
				</ul>
			</div>
		</div>
	
		<div class="feed" id="space_blog">
			<h3 class="feed_header">
				<span class="r_option">	
					<?php echo anchor("zone/article_all/".$user_name,"全部"); ?>
				</span>
				日志
			</h3>
			<ul class="line_list">
			
				<?php foreach($article_info->result() as $row_article):?>	
					<li>
						<h4>
							<span class="gray r_option"><?php echo $row_article->article_time;?></span>
							<?php echo '<a href="'.base_url().'index.php/zone/show_article/'.$user_name.'/'.$row_article->article_title.'/'.$row_article->class_name.'">' ?> 
								<?php echo $row_article->article_title;?>
							</a>
						</h4>
						<div class="detail"><?php echo $row_article->article_body;?></div>
					</li>
				<?php endforeach;?>
				
			</ul>
		</div>
	
	</div>
<!--end content-->	

<!--obar-->
	<div id="obar">
		
		<!--站内公告-->
		<div class="you_div" id="gonggao">
            <h3>站内公告</h3>
		    <ul>	
				<?php $i=1; foreach($zone_notice->result() as $row):?>
					<li>
		   				<img src="<?php echo base_url();?>system/application/views/image/biaotou.jpg"> 
						<a target="_blank" href="#" id="<?php echo 'opener'.$i++;?>">
							<?php echo $row->notice_title;?>
						</a>
					</li>
				<?php endforeach;?>	
			</ul>
				<?php $j=1; foreach($zone_notice->result() as $row):?>
					<div id="<?php echo 'dialog'.$j++;?>" title="<?php echo $row->notice_title;?>">
						<p><?php echo $row->notice_body;?></p>
					</div>
				<?php endforeach;?>	
        </div>
		
		<!--最新艾友会活动-->
		<div class="you_div" id="huodong">
           <h3>芬兰最新活动</h3>
   			<ul>
   				<?php $a=1; foreach($zone_game->result() as $row):?>
            		<li>
            			<img src="<?php echo base_url();?>system/application/views/image/listdian.gif"> 
						<a target="_blank" href="#" id="<?php echo 'openers'.$a++;?>">
							<?php echo $row->game_title;?>
						</a>
					</li>
				<?php endforeach;?>	
		   </ul>
		   		<?php $b=1; foreach($zone_game->result() as $row):?>
					<div id="<?php echo 'dialogs'.$b++;?>" title="<?php echo $row->game_title;?>">
						<p><?php echo $row->game_body;?></p>
					</div>
				<?php endforeach;?>	
        </div>
		
		<!--艾兑换推荐礼品-->
		<div class="you_div" id="lipin">
           <h3>芬兰推荐礼品</h3>
   			<ul>
				<?php $c=1; foreach($zone_gift->result() as $row):?>
            		<li>
            			<img src="<?php echo base_url();?>system/application/views/image/listdian.gif"> 
						<a target="_blank" href="#" id="<?php echo 'openerss'.$c++;?>">
							<?php echo $row->gift_title;?>
						</a>
					</li>
				<?php endforeach;?>	
		   </ul>
        		<?php $d=1; foreach($zone_gift->result() as $row):?>
					<div id="<?php echo 'dialogss'.$d++;?>" title="<?php echo $row->gift_title;?>">
						<p><?php echo $row->gift_body;?></p>
					</div>
				<?php endforeach;?>	
		</div>
		
		<!--好友-->
		<div class="sidebox">
			<h2 class="title">
				其他用户
			</h2>
			<ul class="avatar_list">
				<?php $e=1; foreach($other_user->result() as $row_other):?>	
					<li>
						<div class="avatar48">
							<a href="#" id="<?php echo 'opener_user'.$e++;?>">
								<img src="<?php echo base_url();?>uploads/pic/<?php echo $row_other->image;?>">
							</a>
						</div>
						<p>
							<?php echo $row_other->user_name;?>
						</p>
					</li>
				<?php endforeach;?>	
			</ul>
				<?php 
					$f=1;
					foreach($other_user->result() as $row_other):
					$other_info=$this->db->query("SELECT * FROM user_info WHERE user_name='$row_other->user_name'");
					foreach($other_info->result() as $row_info): 
				?>
					<div id="<?php echo 'dialog_user'.$f++;?>" title="<?php echo $row_info->user_name;?>">
						<table cellspacing="0" cellpadding="0" class="formtable">
							<tbody><tr>
								<th style="width: 10em;">昵称:</th>
									<td>
										<?php 
											if($row_info->user_nick_name==""){
												echo "<a class='gray'>对方还未填写此信息</a>";	
											}
											if($row_info->user_nick_name!=""){
												echo $row_info->user_nick_name;	
											}
					 					?>
									</td>
								</tr>
								<tr>
									<th style="width: 10em;">性别:</th>
										<td>
											<?php 
												if($row_info->user_sex==""){
													echo "<a class='gray'>对方还未填写此信息</a>";	
												}
												if($row_info->user_sex!=""){
													echo $row_info->user_sex;	
												}
					 						?>
										</td>
								</tr>
								<tr>
									<th style="width: 10em;">婚恋状态:</th>
										<td>
											<?php 
												if($row_info->user_marry==""){
													echo "<a class='gray'>对方还未填写此信息</a>";	
												}
												if($row_info->user_marry==0){
													echo "单身";	
												}
												if($row_info->user_marry==1){
													echo "非单身";	
												}
											 ?>
										</td>
								</tr>
								<tr>
									<th>家乡:</th>
										<td id="birthcitybox">
											<?php 
												if(($row_info->user_country=="")||($row_info->user_country=="请选择")){
													echo "<a class='gray'>对方还未填写此信息</a>";	
												}
												if(($row_info->user_country!="")&&($row_info->user_country!="请选择")){
													echo $row_info->user_country;	
													echo '&nbsp;'.$row_info->user_city.'';
													echo '&nbsp;'.$row_info->user_city2.'';
												}
											 ?>
										</td>
								</tr>
								<tr>
									<th>生日:</th>
										<td>
											<?php 
												if($row_info->user_brithday==""){
													echo "<a class='gray'>对方还未填写此信息</a>";	
												}
												if($row_info->user_brithday!=""){
													echo $row_info->user_brithday;	
												}
											 ?>
										</td>
								</tr>
								<tr>
									<th>手机:</th>
										<td>
											<?php 
												if($row_info->user_phone==""){
													echo "<a class='gray'>对方还未填写此信息</a>";	
												}
												if($row_info->user_phone!=""){
													echo $row_info->user_phone;	
												}
											 ?>
										</td>
								</tr>
								<tr>
									<th>QQ:</th>
										<td>
											<?php 
												if($row_info->user_qq==""){
													echo "<a class='gray'>对方还未填写此信息</a>";	
												}
												if($row_info->user_qq!=""){
													echo $row_info->user_qq;	
												}
					 						?>
										</td>
								</tr>
								<tr>
									<th>常用邮箱:</th>
										<td>
											<?php echo $row_other->email;?>
										</td>
								</tr></tbody>
						</table>
					</div>
				<?php endforeach;?>	
				<?php endforeach;?>	
		</div>
	
	</div>
<!--end obar-->

</div>

	<div id="footer">
		<p class="r_option">
			<a title="TOP" id="a_top" onclick="window.scrollTo(0,0);" href="javascript:;">
				<img style="padding: 5px 6px 6px;" alt="" src="<?php echo base_url();?>system/application/views/image/top.gif">
			</a>
		</p>
	</div>

</div>
</div>
<!--end body-->

</div>
<!--end-->

</body>
</html>
