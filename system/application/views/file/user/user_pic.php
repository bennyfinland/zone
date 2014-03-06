<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta content="text/html; charset=utf-8" http-equiv="content-type">
		<title>芬兰校友-首页 - 时尚个性化的网络互动社区 </title>
<!--jquery-->
	<script src="<?php echo base_url();?>system/application/views/js/jquery.js" type="text/javascript"></script>
<!--logo-->
<link href= "<?php echo base_url();?>system/application/views/image/favicon.ico "  rel= "Shortcut Icon " />
<!--layout-->
<link href="<?php echo base_url();?>system/application/views/css/layout/user.css" type="text/css" rel="stylesheet">
<link href="<?php echo base_url();?>system/application/views/css/layout/main.css" type="text/css" rel="stylesheet">
<!--upload image layout-->
<link href="<?php echo base_url();?>system/application/views/css/file/pic/styles.css" type="text/css" rel="stylesheet">
	<script src="<?php echo base_url();?>system/application/views/js/upload_pic/ajaxupload.3.5.js" type="text/javascript"></script>

<script type="text/javascript" >
	$(function(){
		var btnUpload=$('#upload');
		var status=$('#status');
		new AjaxUpload(btnUpload, {
			action: '<?php echo base_url();?>index.php/zone/upload_pic/<?php echo $this->uri->segment(3);?>',
			name: 'photo',
			onSubmit: function(file, ext){
				 if (! (ext && /^(jpg|png|jpeg|gif)$/.test(ext))){ 
                    // extension is not allowed 
					status.html('<img src="<?php echo base_url();?>uploads/error.gif"></img>&nbsp&nbsp;&nbsp;Only JPG, PNG or GIF files are allowed');
					
					return false;
				}
				status.html('<img src="<?php echo base_url();?>system/application/views/image/loading1.gif"/>');
			},
			onComplete: function(file, response){
				//alert(response)
				//On completion clear the status
				status.text('');
				//Add uploaded file to list
				if(response==="success"){							
					status.html('<img src="<?php echo base_url();?>uploads/success.gif"></img>&nbsp&nbsp;&nbsp;Success<br>');
					
					$("#imgs").attr("src", function() { 
        				  return "<?php echo base_url();?>uploads/pic/" + file; 
       				 });
					 
				} else{
					$('<li></li>').appendTo('#files').text(file).addClass('error');
				}
			}
		});
		
	});
</script>
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
			<li class="active">
				<a href="<?php echo base_url();?>index.php/zone/user_pic/<?php echo $this->uri->segment(3);?>">
					<span>我的头像</span>
				</a>
			</li>
			<li>
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

	<form class="c_form" action="cp.php?ac=avatar&amp;ref" method="post">
		<table cellspacing="0" cellpadding="0" class="formtable">
			<caption>
				<h2>当前我的头像</h2>
				<p>如果您还没有设置自己的头像，系统会显示为默认头像，您需要自己上传一张新照片来作为自己的个人头像。</p>
			</caption>
			<tbody><tr>
				<td>
					<img src="<?php echo base_url();?>system/application/views/image/noavatar_big.gif?>"></td>
			</tr>
			</tbody>
		</table>

		<table cellspacing="0" cellpadding="0" class="formtable">
			<caption>
				<h2>设置我的新头像</h2>
				<p>请选择一个新照片进行上传编辑。</p>
			</caption>
		</table>
	</form>

<!--upload image-->
	<div id="container">
			<div id="demo_area">
				<div id="left_col">
					<fieldset>
						<legend>Standard Use</legend>
						<div id="upload" >
							<span>Upload File<span>
						</div>
					</fieldset>
					<br /><small style="font-weight: bold; font-style:italic; font-size:13;">Supported File Types: gif, jpg, png</small>
				</div>
				<div id="right_col">
					<div id="upload_area">
						Images Will Be uploaded here.<br>
						<span id="status" ></span><br>
						<img src="<?php echo base_url();?>uploads/noavatar_big.gif" id="imgs"><br>
					</div>
				</div>
				<div class="clear"> </div>
			</div>
	</div><br><br><br><br><br>
<!--end upload image-->
	
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