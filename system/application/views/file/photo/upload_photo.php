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
<!--validate-->
     <script src="<?php echo base_url();?>system/application/views/js/validate/jquery.validate.js" type="text/javascript"></script>

<script type="text/javascript" >
	$(function(){
		var btnUpload=$('#upload');
		var status=$('#status');
		new AjaxUpload(btnUpload, {
			action: '<?php echo base_url();?>index.php/zone/upload_photo_insert/<?php echo $this->uri->segment(3);?>',
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
				//On completion clear the status
				status.text('');
				//Add uploaded file to list
				if(response==="success"){							
					status.html('<img src="<?php echo base_url();?>uploads/success.gif"></img>&nbsp&nbsp;&nbsp;Success<br>');
			
					$("#img").attr("src", function() { 
        				  return "<?php echo base_url();?>uploads/photo/photo/" + file; 
       				 });
					$("#photo_name").attr("value", function() { 
        				  return file; 
       				 });
				} else{
					$('<li></li>').appendTo('#files').text(file).addClass('error');
				}
			}
		});
		
	});

$(document).ready(function() {
		
	$("#commentForm").validate({
	    success: "valid",
		rules: {
			 	photo_name: {
		 	     	required: true,
			     },
				 tags: {
		 	     	required: true,
					minlength: 2,
			     },
				 gruop_name: {
		 	     	required: true,
			     }		 
	   },			
		messages: {
				photo_name: {
					required: "请上传图片",
				},
				tags: {
					required: "请填写标签",
					minlength: "标签最少6位数",
				},
				gruop_name: {
					required: "请选择分组",
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
		border:0;	
	}
	label.valid {
		background: url(<?php echo base_url();?>system/application/views/image/r.gif) no-repeat;
		display: block;
		width: 16px;
		height: 16px;
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
			<span><a href="http://localhost/back-up/zone/">退出</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
        <td><a href="http://localhost/back-up/zone/">退出</a></td>
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
	<h2 class="title"><img src="<?php echo base_url();?>system/application/views/image/album.gif">相册</h2>
	<div class="tabs_header">
		<ul class="tabs">
			<li class="active">
				<a href="<?php echo base_url();?>index.php/zone/upload_photo/<?php echo $this->uri->segment(3);?>">
					<span>普通上传</span>
				</a>
			</li>
			<li>
				<a href="<?php echo base_url();?>index.php/zone/photo/<?php echo $this->uri->segment(3);?>">
					<span>返回我的相册</span>
				</a>
			</li>
			<li class="null">
				<?php echo anchor("zone/creat_album/".$user_name,"新建一个相册"); ?>
			</li>
		</ul>
	</div>

	<div class="c_form">
		<div class="borderbox">
			您当前图片空间还剩余容量 <strong>20 MB</strong>
			<p>
				<img class="magicicon" src="<?php echo base_url();?>system/application/views/image/attachsize.small.gif">
				<a onclick="ajaxmenu(event, this.id, 1)" href="magic.php?mid=attachsize" id="a_magic_attachsize">我要增加空间</a>
				(您可以购买道具“附件增容卡”来增加附件容量，上传更多的图片)
			</p>
		</div><br>

		<table cellspacing="0" cellpadding="0" class="formtable">
			<caption>
				<h2>选择图片</h2>
				<p>从电脑中选择你要上传的图片。 <br>
					<b>提示：</b><br>
					1、选择一张图片后，你可以继续选择下一张图片，这样就可以一次上传多张图片了。<br>
					2、只允许上传jpg、jpeg、gif、png标准格式的图片，并且单张图片大小不能超过500kb
				</p>
			</caption>
			<tbody id="attachbody"><tr>
				<td>
					<div id="upload" >
							<span>Upload File<span>
						</div>
				</td>
			</tr></tbody>
		</table>

		<?php 
			$attributes = array('class' => 'cmxform', 'id' => 'commentForm');
			echo form_open("zone/update_photo_insert",$attributes);
		?>
			<table cellspacing="0" cellpadding="0" class="formtable">
				<caption>
					<h2>
						<label>选择相片分组</label>
					</h2>
				</caption>

				<tbody id="selectalbum"><tr>
					<td>
						<table width="100%">
							<tbody><tr>
								<td>
									<p>为上传图片添加标签(Tags):</p>
									<p><input type="text" name="tags" id="tags" class="t_input"></p>
										<br><br>
									<p>选择相册:</p>
									<select id="gruop_name" name="gruop_name"  class="required">
										<option selected="" value="">
										<?php foreach($gruop_name->result() as $row):?>
											<option value="<?php echo $row->gruop_name;?>">
												<?php echo $row->gruop_name;?>
											</option>
										<?php endforeach;?>
									</select>
								</td>	
								<td rowspan=2>
									<div id="right_col">
										<div id="upload_area">
											Images Will Be uploaded here.<br>
											<span id="status" ></span><br>
											<img src="<?php echo base_url();?>uploads/noavatar_big2.jpg" id="img"><br><br>
											<input type="hidden" name="photo_name" id="photo_name" value="">
											<input type="hidden" name="user_name" id="user_name" value="<?php echo $this->uri->segment(3);?>">
										</div>
									</div>
								</td>
							</tr></tbody>
						</table>
					</td>
				</tr></tbody>
				<tbody><tr>
					<td><br>
						<input type="submit" class="button" value="开始上传" id="btnupload" name="uploadsubmit">
					</td>
				</tr></tbody>
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