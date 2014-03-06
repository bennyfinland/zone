<?php
include("../../conn.php");
$name=$_POST["re_name"];
$pwd=$_POST["re_password"];
$email=$_POST["re_email"];


//md5
$nameMD=substr(md5($name),0,16);
$captcha=substr(md5($pwd),0,16);
$time =  date('Y-m-j'); 

mysql_query("insert into whip66_account(id,name,nameMD,pwd,email,captcha,active,time) values 
           ('',N'$name','$nameMD','$pwd','$email','$captcha','0','$time')");
		   
//# Is the OS Windows or Mac or Linux
		if(strtoupper(substr(PHP_OS,0,3)=='WIN')){
			$end="\r\n";
		}elseif(strtoupper(substr(PHP_OS,0,3)=='MAC')){
			$end="\r";
		}else{
			$end="\n";
		}

$subject = "Welcome";
$message = "Welcome to our website!
 Your account has been successfully created with the following details:
  <br>&nbsp;&nbsp;&nbsp;&nbsp;Name: $name
  <br>&nbsp;&nbsp;&nbsp;&nbsp;Password: $pwd
  <br>&nbsp;&nbsp;&nbsp;&nbsp;Email: $email
  <br><br>&nbsp;&nbsp;&nbsp;&nbsp;Please click on the link to activate your account.\n
  http://www.cylyc.com/liyicheng/whip66/file/sign_up/check.php?nameMD=$nameMD&captcha=$captcha
";
$from = "yichengli6@gmail.com";

		$settings = "From: <".$from.">".$end;
		$settings .= "Return-Path: ".$from.$end;
		$settings .= 'MIME-Version: 1.0'.$end;
		$settings .= "Content-Type: text/html; charset=utf-8".$end;
		$settings .= "Content-Transfer-Encoding: 8bit".$end.$end;

//send mail
if(mail($email,$subject,$message,$settings)){
	header('Location:../../index.php?wait=2');
}
else{
	echo "not";
}

?>
