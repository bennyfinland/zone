<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Untitled Document</title>
<!--jquery-->
	<script src="../../js/jquery.js" type="text/javascript"></script>
<!--password strength-->
     <script type="text/javascript" src="../../js/password/jquery.pstrength-min.1.2.js"></script>
<!--validate-->
     <script src="../../js/validate/jquery.validate.js" type="text/javascript"></script>
<!--layout-->
<link type="text/css" href="../../css/layout/sign_up.css" rel="stylesheet" />
	
<script type="text/javascript">	 
// check the data....(register)
$(document).ready(function() {
	
	//password strength
	$('.password').pstrength();
	
	$("#commentForm").validate({
	    success: "valid",
		rules: {
			    re_name: {
		 	     	required: true,
					minlength: 5,
			    	remote: {
						url: "check.php",
						type: "post",
						data: { //要传递的数据，默认已传递应用此规则的表单项  
							re_name: function(){
								return $("#re_name").val();
							}
						}
					}	
			     },
				
			    re_email: "required",
		     	re_password: {
		 	     	required: true,
			    	minlength: 6,
					number: true,
			    },
	  },			
		messages: {
				re_name: {
					required: "请输入用户名",
					remote: "用户名已存在",
					minlength: "用户名最少5位数"
				},
				re_email: {
					required: "请输入邮箱",
				},
				re_password: {
					required: "请输入密码",
					minlength: "密码最少6位数",
					number: "请输入数字"
				},
			}		
	});


	

});
</script>

<!--for check-->
<style>
	label.error {
		background: url(../../image/e.gif) no-repeat;
		padding-left: 16px;		
	}
	label.valid {
		background: url(../../image/r.gif) no-repeat;
		display: block;
		width: 16px;
		height: 16px;
	}
</style>	
	</head>
	
	<body>

<!--body-->
<div id="body">
	<div id="title">
		<a>个人空间注册&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="http://localhost/back-up/CodeIgniter/" style=" text-decoration: none;">退出</a>
		</a><hr style="color=#888888">
	</div>
	<!--register-->
	<form class="cmxform" id="commentForm" method="post" action="insert.php">
	    <p>
			<label for="re_name">用户名: </label>
			<input id="re_name" name="re_name" class="required" minlength="5" />
		</p><br>
		<p>
			<label for="re_password">密码:</label>
			<input id="re_password" name="re_password" type="password" class="password"/>
		</p><br>
	    <p>
			<label for="re_email">邮件: </label>
			<input id="re_email" name="re_email" class="required email" />
		</p><br>
		<p>
			<input class="button" type="submit" value="提交" id="submit"/>
			<input type="hidden" name="id">
		</p>
    </form>
	<!--end register-->
</div>
<!--end body-->
	</body>
</html>
