<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta content="text/html; charset=utf-8" http-equiv="content-type">
		<title>芬兰校友-首页 - 时尚个性化的网络互动社区 </title>
<!--logo-->
<link href= "<?php echo base_url();?>system/application/views/image/favicon.ico "  rel= "Shortcut Icon " />	
<!--layout-->
<link href="<?php echo base_url();?>system/application/views/css/layout/user.css" type="text/css" rel="stylesheet">
<link href="<?php echo base_url();?>system/application/views/css/layout/main.css" type="text/css" rel="stylesheet">
<!--article-->
<link href="<?php echo base_url();?>system/application/views/css/file/article/article.css" type="text/css" rel="stylesheet">
<!--rating-->
<link href='<?php echo base_url();?>system/application/views/css/file/rating/jquery.rating.css' type="text/css" rel="stylesheet"/>
	<script src='<?php echo base_url();?>system/application/views/js/rating/jquery.js' type="text/javascript"></script>
	<script src='<?php echo base_url();?>system/application/views/js/rating/documentation.js' type="text/javascript"></script>
	<script src='<?php echo base_url();?>system/application/views/js/rating/jquery.MetaData.js' type="text/javascript" language="javascript"></script>
 	<script src='<?php echo base_url();?>system/application/views/js/rating/jquery.rating.js' type="text/javascript" language="javascript"></script>
 

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
	<h2 class="title">
		<img src="<?php echo base_url();?>system/application/views/image/blog.gif">日志
	</h2>

<?php foreach($article_info->result() as $row):?>
	<div class="tabs_header">
		<ul class="tabs">
			<li class="active">
				<?php echo '<a href="'.base_url().'index.php/zone/show_article_all/'.$this->uri->segment(3).'/'.$row->article_title.'/'.$row->class_name.'">' ?> 
					<span>好友的日志</span>
				</a>
			</li>
			<li>
				<a href="<?php echo base_url();?>index.php/zone/article/<?php echo $this->uri->segment(3);?>">
					<span>返回日志列表</span>
				</a>
			</li>
			<li class="null"><a href="<?php echo base_url();?>index.php/zone/creat_article/<?php echo $this->uri->segment(3);?>">发表新日志</a></li>
			<li class="null">
				<a href="<?php echo base_url();?>index.php/zone/creat_class/<?php echo $this->uri->segment(3);?>">创建新的分类</a>
			</li>
		</ul>
	</div>	
	
	<div style="padding: 0pt 0pt 10px;" class="entry">
		<div class="title">
			<h1>
				<?php echo $row->article_title; ?>
			</h1>
			<?php echo $row->article_username;?>&nbsp;
			&nbsp; <span class="gray"><?php echo $row->article_time; ?></span>
			&nbsp; <a href="space.php?uid=354&amp;do=tag">分类</a>:&nbsp;
			<?php echo $row->class_name; ?>			
		</div>
		<div class="article " id="blog_article">
			<?php echo $row->article_body; ?>	
		</div>
	</div><br>

	<div id="content">
		<div id="click_div">
			<div class="digc">
				<div style="padding: 5px 4px;">请选择您看过这篇文章后的评分：</div><br>
				<!--rater star-->
					<div id="tab-Testing">
						<?php echo form_open("zone/article_rating_all"); ?>					
    						<input class="star {split:4}" type="radio" name="rating" value="1" <?php if($row->article_rating==1){echo "checked='checked'";}?> />
    						<input class="star {split:4}" type="radio" name="rating" value="2" <?php if($row->article_rating==2){echo "checked='checked'";}?> />
    						<input class="star {split:4}" type="radio" name="rating" value="3" <?php if($row->article_rating==3){echo "checked='checked'";}?> />
    						<input class="star {split:4}" type="radio" name="rating" value="4" <?php if($row->article_rating==4){echo "checked='checked'";}?> />
    						<input class="star {split:4}" type="radio" name="rating" value="5" <?php if($row->article_rating==5){echo "checked='checked'";}?> />
   	 						<input class="star {split:4}" type="radio" name="rating" value="6" <?php if($row->article_rating==6){echo "checked='checked'";}?> />
    						<input class="star {split:4}" type="radio" name="rating" value="7" <?php if($row->article_rating==7){echo "checked='checked'";}?> />
    						<input class="star {split:4}" type="radio" name="rating" value="8" <?php if($row->article_rating==8){echo "checked='checked'";}?> />
    						<input class="star {split:4}" type="radio" name="rating" value="9" <?php if($row->article_rating==9){echo "checked='checked'";}?> />
    						<input class="star {split:4}" type="radio" name="rating" value="10" <?php if($row->article_rating==10){echo "checked='checked'";}?> />
    						<input class="star {split:4}" type="radio" name="rating" value="11" <?php if($row->article_rating==11){echo "checked='checked'";}?> />
    						<input class="star {split:4}" type="radio" name="rating" value="12" <?php if($row->article_rating==12){echo "checked='checked'";}?> />
    						<input class="star {split:4}" type="radio" name="rating" value="13" <?php if($row->article_rating==13){echo "checked='checked'";}?> />
    						<input class="star {split:4}" type="radio" name="rating" value="14" <?php if($row->article_rating==14){echo "checked='checked'";}?> />
    						<input class="star {split:4}" type="radio" name="rating" value="15" <?php if($row->article_rating==15){echo "checked='checked'";}?> />
    						<input class="star {split:4}" type="radio" name="rating" value="16" <?php if($row->article_rating==16){echo "checked='checked'";}?> />
    						<input class="star {split:4}" type="radio" name="rating" value="17" <?php if($row->article_rating==17){echo "checked='checked'";}?> />
    						<input class="star {split:4}" type="radio" name="rating" value="18" <?php if($row->article_rating==18){echo "checked='checked'";}?> />
    						<input class="star {split:4}" type="radio" name="rating" value="19" <?php if($row->article_rating==19){echo "checked='checked'";}?> />
    						<input class="star {split:4}" type="radio" name="rating" value="20" <?php if($row->article_rating==20){echo "checked='checked'";}?> />
					   		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="hidden" name="username" value="<?php echo $this->uri->segment(3);?>">
							<input type="hidden" name="friend_name" value="<?php echo $row->article_username;?>">
							<input type="hidden" name="class_name" value="<?php echo $row->class_name; ?>">
							<input type="hidden" name="article_title" value="<?php echo $row->article_title; ?>">
							<input type="submit" value="Submit"  class="submit"/>
						</form>
   					</div><br>
   			<!--end rater star-->
			</div>
		</div>
	</div>
<?php endforeach;?>

	<div style="padding-top: 20px;" id="sidebar">
		<div class="sidebox">
			<h2 class="title">最新日志导读</h2>
		<?php foreach($article->result() as $row):?>
			<ul class="news_list">
				<li style="height: auto;">
					<a style="font-weight: bold;">
						<?php echo $row->article_username;?>
					</a>:
					<?php echo '<a href="'.base_url().'index.php/zone/show_article_all/'.$this->uri->segment(3).'/'.$row->article_title.'/'.$row->class_name.'">' ?> 
						<?php echo $row->article_title;?>
					</a>
				</li>
			</ul>
		<?php endforeach;?>
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