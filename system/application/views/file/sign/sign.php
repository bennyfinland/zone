<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta content="text/html; charset=utf-8" http-equiv="content-type">
		<title>芬兰校友-首页 - 时尚个性化的网络互动社区 </title>
<!--logo-->
<link href= "<?php echo base_url();?>system/application/views/image/favicon.ico "  rel= "Shortcut Icon " />

<!--layout-->
<link href="<?php echo base_url();?>system/application/views/css/layout/user.css" type="text/css" rel="stylesheet">
<link href="<?php echo base_url();?>system/application/views/css/layout/main.css" type="text/css" rel="stylesheet">
<!--doing-->
<link href="<?php echo base_url();?>system/application/views/css/layout/doing.css" type="text/css" rel="stylesheet">

<!--jquery-->
	<script src="<?php echo base_url();?>system/application/views/js/jquery.js" type="text/javascript"></script>
<!--text count-->
	<script src="<?php echo base_url();?>system/application/views/js/text_count/jQuery.artTxtCount.js" type="text/javascript"></script>

<script>
$(document).ready(function() {
	
//text count
	$('.post_doing').each(function(){
		$(this).find('#sign').artTxtCount($(this).find('.tips'), 50);
	});	

//face box	
	$('.face').toggle(function(){
			$('.facebox').show(); 
	 },function(){
	       $('.facebox').hide();
	});	
	
	$('.click_face').click(function(){
			var image = $(this).attr("src");
			var old_message = $('#sign').html();
				
			$('#sign').html(old_message+'<img src="'+image+'">');		
			$('.facebox').hide(); 
	});	
	
//delete return and spacebar 
	   $('body').bind('keydown',function(event){
	   		if (event.keyCode == 13) {
				return false;   
	   		}
	   });
	   $('body').bind('keydown',function(event){
	   		if (event.keyCode == 32) {
				return false;   
	   		}
	   });
 
//sign include pics and words     
		var sign = $('#sign').html();		
		if(sign==""){
			$('#add').attr({'disabled':'disabled'});
		}
		
		
	  $('#add').click(function(){
	  		var sign = $('#sign').html();
			var user_name = $('#user_name').val();
			$('#signs').val(sign);	
			var sign = $('#signs').html();
			
			$.ajax({
			   type: "POST",
  			   url: "<?php echo base_url();?>index.php/zone/sign_insert",
   			   data: "user_name="+user_name+"&sign="+sign,
				 success: function(data){
    		   		$("#show").html(data);
  		 	   }	
 			});
	  });                                          	
	 
});
</script>




<style>
/* demo */
#demo .tips,#demo .tip { color:#999; padding:0 5px; }
#demo .tips strong { color:#1E9300; }
#demo .tips .js_txtFull strong { color:#F00; }
.face:hover{cursor:pointer;}
#sign br{display:none;}
#sign:hover{cursor:text;}
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
	
	<!--face box-->		
	<div id="doingface_menu" class="facebox" style="position: absolute; left: 307px; top: 232px; display:none;">
		<ul>
			<li><img style="cursor: pointer; position: relative;" src="<?php echo base_url();?>system/application/views/image/face/1.gif" class="click_face" name="[1]"></li>
			<li><img style="cursor: pointer; position: relative;" src="<?php echo base_url();?>system/application/views/image/face/2.gif" class="click_face" name="[2]"></li>
			<li><img style="cursor: pointer; position: relative;" src="<?php echo base_url();?>system/application/views/image/face/3.gif" class="click_face" name="[3]"></li>
			<li><img style="cursor: pointer; position: relative;" src="<?php echo base_url();?>system/application/views/image/face/4.gif" class="click_face" name="[4]"></li>
			<li><img style="cursor: pointer; position: relative;" src="<?php echo base_url();?>system/application/views/image/face/5.gif" class="click_face" name="[5]"></li>
			<li><img style="cursor: pointer; position: relative;" src="<?php echo base_url();?>system/application/views/image/face/6.gif" class="click_face" name="[6]"></li>
			<li><img style="cursor: pointer; position: relative;" src="<?php echo base_url();?>system/application/views/image/face/7.gif" class="click_face" name="[7]"></li>
			<li><img style="cursor: pointer; position: relative;" src="<?php echo base_url();?>system/application/views/image/face/8.gif" class="click_face" name="[8]"></li>
			<li><img style="cursor: pointer; position: relative;" src="<?php echo base_url();?>system/application/views/image/face/9.gif" class="click_face" name="[9]"></li>
			<li><img style="cursor: pointer; position: relative;" src="<?php echo base_url();?>system/application/views/image/face/10.gif" class="click_face" name="[10]"></li>
			<li><img style="cursor: pointer; position: relative;" src="<?php echo base_url();?>system/application/views/image/face/11.gif" class="click_face" name="[11]"></li>
			<li><img style="cursor: pointer; position: relative;" src="<?php echo base_url();?>system/application/views/image/face/12.gif" class="click_face" name="[12]"></li>
			<li><img style="cursor: pointer; position: relative;" src="<?php echo base_url();?>system/application/views/image/face/13.gif" class="click_face" name="[13]"></li>
			<li><img style="cursor: pointer; position: relative;" src="<?php echo base_url();?>system/application/views/image/face/14.gif" class="click_face" name="[14]"></li>
			<li><img style="cursor: pointer; position: relative;" src="<?php echo base_url();?>system/application/views/image/face/15.gif" class="click_face" name="[15]"></li>
			<li><img style="cursor: pointer; position: relative;" src="<?php echo base_url();?>system/application/views/image/face/16.gif" class="click_face" name="[16]"></li>
			<li><img style="cursor: pointer; position: relative;" src="<?php echo base_url();?>system/application/views/image/face/17.gif" class="click_face" name="[17]"></li>
			<li><img style="cursor: pointer; position: relative;" src="<?php echo base_url();?>system/application/views/image/face/18.gif" class="click_face" name="[18]"></li>
			<li><img style="cursor: pointer; position: relative;" src="<?php echo base_url();?>system/application/views/image/face/19.gif" class="click_face" name="[19]"></li>
			<li><img style="cursor: pointer; position: relative;" src="<?php echo base_url();?>system/application/views/image/face/20.gif" class="click_face" name="[20]"></li>
			<li><img style="cursor: pointer; position: relative;" src="<?php echo base_url();?>system/application/views/image/face/21.gif" class="click_face" name="[21]"></li>
			<li><img style="cursor: pointer; position: relative;" src="<?php echo base_url();?>system/application/views/image/face/22.gif" class="click_face" name="[22]"></li>
			<li><img style="cursor: pointer; position: relative;" src="<?php echo base_url();?>system/application/views/image/face/23.gif" class="click_face" name="[23]"></li>
			<li><img style="cursor: pointer; position: relative;" src="<?php echo base_url();?>system/application/views/image/face/24.gif" class="click_face" name="[24]"></li>
			<li><img style="cursor: pointer; position: relative;" src="<?php echo base_url();?>system/application/views/image/face/25.gif" class="click_face" name="[25]"></li>
			<li><img style="cursor: pointer; position: relative;" src="<?php echo base_url();?>system/application/views/image/face/26.gif" class="click_face" name="[26]"></li>
			<li><img style="cursor: pointer; position: relative;" src="<?php echo base_url();?>system/application/views/image/face/27.gif" class="click_face" name="[27]"></li>
			<li><img style="cursor: pointer; position: relative;" src="<?php echo base_url();?>system/application/views/image/face/28.gif" class="click_face" name="[28]"></li>
			<li><img style="cursor: pointer; position: relative;" src="<?php echo base_url();?>system/application/views/image/face/29.gif" class="click_face" name="[29]"></li>
			<li><img style="cursor: pointer; position: relative;" src="<?php echo base_url();?>system/application/views/image/face/30.gif" class="click_face" name="[30]"></li>
		</ul>
	</div>
	
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
	<h2 class="title"><img src="<?php echo base_url();?>system/application/views/image/doing.gif">记录</h2>
	<div class="tabs_header">
		<ul class="tabs">
			<li>
				<a href="<?php echo base_url();?>index.php/zone/sign_all/<?php echo $this->uri->segment(3);?>">
					<span>大家最新的记录</span>
				</a>
			</li>
			<li class="active">
				<a href="<?php echo base_url();?>index.php/zone/sign/<?php echo $this->uri->segment(3);?>">
					<span>我的记录</span>
				</a>
			</li>
		</ul>
	</div>

	<div id="content">	
	<div id="demo">	
		<?php 
			$attributes = array('class' => 'post_doing', 'id' => 'doingform');
			echo form_open("zone/sign_insert",$attributes);
		?>	
			<img align="absmiddle" src="<?php echo base_url();?>system/application/views/image/facelist.gif" class="face">
			<span class="tip" style="margin-left:5%;">禁止空格,回车(不能发送单一图片)</span>
			<span class="tips" style="margin-left:30%;"></span><br>
			<div style="width: 438px; height: 72px; outline:none; overflow:auto;" contentEditable="true" name="sign" id="sign"></div>
			<input type="hidden" name="user_name" id="user_name" value="<?php echo $this->uri->segment(3);?>">
			<input type="hidden" name="signs" id="signs" value="">
			<button type="submit" class="post_button" name="add" id="add" onfocus="this.blur()">发布</button>		
		</form><br>
	</div>
	
				
	<?php foreach($sign_info->result() as $row):?>
		<div class="doing_list">
			<ol>
				<li>
					<?php foreach($sign_pic->result() as $rows):?>
						<div class="avatar48">
							<img src="<?php echo base_url();?>uploads/pic/<?php echo $rows->image;?>">
						</div>
					<?php endforeach;?>
					<div class="doing">
						<div class="doingcontent">
							<span>发表于:</span>
							<span class="gray">
								(<?php echo $row->sign_time;?>)
							</span>
							<a class="re gray" href="<?php echo base_url();?>index.php/zone/sign_delete/<?php echo $this->uri->segment(3);?>/<?php echo $row->sign_id;?> ">
								&nbsp;删除
							</a>
						</div>

						<div id="docomment_200" class="sub_doing">
							<ol>
								<li style="padding-left: 0em;">
									<span>
										<?php echo $row->sign_username;?>
									</span>:  
									<span class="doingtime">
										<?php echo $row->sign_body;?>
									</span> 
								</li>
							</ol>
						</div>
					</div>					
				</li>
			</ol>
		</div>
	<?php endforeach;?>	
		
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