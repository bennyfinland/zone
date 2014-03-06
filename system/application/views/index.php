<?php 
	session_start();
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Untitled Document</title>
<!--logo-->
<link href= "<?php echo base_url();?>system/application/views/image/favicon.ico "  rel= "Shortcut Icon " />
<!--jquery-->
	<script src="<?php echo base_url();?>system/application/views/js/jquery.js" type="text/javascript"></script>
<!--validate-->
     <script src="<?php echo base_url();?>system/application/views/js/validate/jquery.validate.js" type="text/javascript"></script>

<!--layout-->
<link type="text/css" href="<?php echo base_url();?>system/application/views/css/layout/index.css" rel="stylesheet" />


<script type="text/javascript">	 
// check the data....(register)
$(document).ready(function() {
		
	$("#commentForm").validate({
	    success: "valid",
		rules: {
			 	user_name: {
		 	     	required: true,
					minlength: 5,
			    	remote: {
						url: "index.php/zone/login_name",
						type: "post",
						data: {
							user_name: function(){
								return $("#user_name").val();
							}
						}
					}	
			     },
				 user_pwd: {
		 	     	required: true,
					minlength: 6,
					number: true,
			    	remote: {
						url: "index.php/zone/login_pwd",
						type: "post",
						data: {
							user_pwd: function(){
								return $("#user_pwd").val();
							},
							user_name: function(){
								return $("#user_name").val();
							}
						}
					}	
			      },	
	   },			
		messages: {
				user_name: {
					required: "User name input",
					remote: "User name not exist",
					minlength: "5 digit numbers at least"
				},
				user_pwd: {
					required: "Password input",
					remote: "Password wrong",
					minlength: "6 digit numbers at least",
					number: "Numbers input"
				},
			
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
		display: block;
		width: 16px;
		height: 16px;
	}
</style>	

	</head>
	<body>

<!--logn in-->
<div id="logn_in">
	<div id="title">
		<a>register  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="system/application/views/file/sign_up/sign_up.php" style=" text-decoration: none;">SIGN UP</a>
			 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<?php
				if(isset($_GET["wait"])&& ($_GET["wait"]==2)){
					echo "Loading.....";
				}
			?>
		</a><hr style="color=#888888;">	
	</div>

	<form action="index.php/zone/main/" method="post" class="cmxform" id="commentForm"  >
		<p>
			<label for="user_name">User</label>
			<input id="user_name" name="user_name" class="required" minlength="5" />
		</p>
		<p>
			<label for="user_pwd">Password</label>
			<input id="user_pwd" name="user_pwd" type="password" class="required" minlength="6" />
		</p>
		<input class="button" type="submit" value="submit" />
	</form>
	
</div>
<!--end logn in-->
	
	</body>
</html>
