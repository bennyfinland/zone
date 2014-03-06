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
		<img src="<?php echo base_url();?>system/application/views/image/blog.gif">日志&nbsp;-&nbsp;
		<?php 
			if(isset($click_class_name)){
				echo $click_class_name;
			}
			else{
				echo "全部日志";
			}
		?>
	</h2>
	<div class="tabs_header">
		<ul class="tabs">
			<li>
				<a href="<?php echo base_url();?>index.php/zone/article_all/<?php echo $this->uri->segment(3);?>">
					<span>大家最新日志</span>
				</a>
			</li>
			<li class="active">
				<a href="<?php echo base_url();?>index.php/zone/article/<?php echo $this->uri->segment(3);?>">
					<span>我的日志</span>
				</a>
			</li>
			<li class="null"><a href="<?php echo base_url();?>index.php/zone/creat_article/<?php echo $this->uri->segment(3);?>">发表新日志</a></li>
			<li class="null">
				<a href="<?php echo base_url();?>index.php/zone/creat_class/<?php echo $this->uri->segment(3);?>">创建新的分类</a>
			</li>
		</ul>
	</div>		

	<div style="width: 640px;" id="content">
		<div class="entry_list">
			<ul>
				<li>
					
				<?php foreach($article_info->result() as $row):?>
					<div class="avatardiv">
						<?php foreach($article_pic->result() as $rows):?>
							<div class="avatar48">
								<img src="<?php echo base_url();?>uploads/pic/<?php echo $rows->image;?>">
							</div>
						<?php endforeach;?>
					</div>		
				
					<div class="title">
						<h4>
							<?php echo '<a href="'.base_url().'index.php/zone/show_article/'.$this->uri->segment(3).'/'.$row->article_title.'/'.$row->class_name.'">' ?> 
								<?php echo $row->article_title;?>		
							</a>
						</h4>
						<div>
							<?php echo $row->article_username;?>&nbsp;
							<span class="gray"><?php echo $row->article_time;?></span>
						</div>
					</div>
					<div id="blog_article_683" class="detail image_right l_text s_clear">
						<?php echo $row->article_body;?>	
					</div>
					<div class="gray">
						分类: &nbsp;<?php echo $row->class_name;?>
					</div>
				<?php endforeach;?>
				
				</li>
			</ul>
		</div>
	</div>

	<div style="width: 150px;" id="sidebar">
		<div class="cat">
		<h3>日志分类</h3>
			<ul class="post_list line_list">
				<li class="all"><a href="<?php echo base_url();?>index.php/zone/article/<?php echo $this->uri->segment(3);?>">全部日志</a></li>
			<?php foreach($class_info->result() as $row):?>
				<li <?php if((isset($click_class_name))&&($click_class_name==$row->class_name)){echo "class='current'";}?> >
					<a href="<?php echo base_url();?>index.php/zone/delete_class/<?php echo $this->uri->segment(3);?>/<?php echo $row->class_name;?>" class="c_edit">
						<img src="<?php echo base_url();?>system/application/views/image/icon_del.gif">
					</a>
					<a href="<?php echo base_url();?>index.php/zone/show_class/<?php echo $this->uri->segment(3);?>/<?php echo $row->class_name;?>">
						<?php echo $row->class_name;?>
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