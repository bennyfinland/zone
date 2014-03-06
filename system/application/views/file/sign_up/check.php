<?php
if(isset($_POST["re_name"])){
   $re_name=$_POST["re_name"];
   $valid='TRUE';
   $sql="SELECT * FROM whip66_account WHERE name='$re_name'";
   $file=mysql_query($sql, $conn);
   $row=mysql_fetch_assoc($file);
		if($row["id"]){
     		echo "false" ;
		}
		else{
			echo "true";
		}
}

if(isset($_POST["user_name"])){
   $user_name=$_POST["user_name"];
   $valid='TRUE';
   $sql="SELECT * FROM whip66_account WHERE name='$user_name'";
   $file=mysql_query($sql, $conn);
   $row=mysql_fetch_assoc($file);
		if(!$row["id"]){
     		echo "false" ;
		}
		else{
			echo "true";
		}
}


if(isset($_GET["nameMD"])&&isset($_GET["captcha"])) {
  $nameMD=$_GET["nameMD"];
  $captcha=$_GET["captcha"];

  $sql="SELECT * FROM whip66_account WHERE nameMD='$nameMD'";
  $file=mysql_query($sql, $conn);
  $row=mysql_fetch_assoc($file);
  $name=$row["name"];
	if($captcha=$row["captcha"]){
    	header('Location:../bbs/main.php?name='.$name);
    	mysql_query("UPDATE whip66_account SET active = 1 WHERE name='$name'");
	}
	else {
		echo "something wrong with the system..... sorry";
	}
}


?>
