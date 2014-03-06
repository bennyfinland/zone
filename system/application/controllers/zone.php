<?php
class zone extends Controller {
	function zone(){
 		parent::Controller();
		$this->load->helper("url");
		$this->load->helper("form"); 
		$this->load->helper('file');
		$this->load->database();
		$this->load->helper('date');
	}

//load index page for user to login	
	function index(){
		$this->load->view("index");
	}

//check user name and pwd
	function login_name(){
		if(isset($_POST["user_name"])){
			$user_name=$_POST["user_name"];
			$valid='TRUE';
			$data["check_name"]=$this->db->query("SELECT * FROM user_account WHERE user_name='$user_name'"); 
			if($data["check_name"]->num_rows() > 0){
     			echo "true";
			}
			else{
				echo "false";
			}
		}
	}
	function login_pwd(){		
		$user_name=$_POST["user_name"];
   		$user_pwd=$_POST["user_pwd"];
   		$valid='TRUE';
		$data["check_pwd"]=$this->db->query("SELECT * FROM user_account WHERE user_name='$user_name' and user_pwd='$user_pwd' and active=1");
		if($data["check_pwd"]->num_rows() > 0){
   			echo "true";
		}
		else{
			echo "false";
		}	
	}
	
//main page 
	function main(){
		$user_name=$_POST["user_name"];		
		//select zone_game,zone_gift,zone_notice from database
		$data["zone_notice"]=$this->db->query('SELECT * FROM zone_notice order by notice_id desc limit 0,4'); 
		$data["zone_game"]=$this->db->query('SELECT * FROM zone_game order by game_id desc limit 0,6'); 
		$data["zone_gift"]=$this->db->query('SELECT * FROM zone_gift order by gift_id desc limit 0,6'); 
		//user_info	
		$data["user_time"]=$this->db->query("SELECT * FROM user_account where user_name='$user_name'");
		$data["user_info"]=$this->db->query("SELECT * FROM user_info where user_name='$user_name'");
		$data["sign_info"]=$this->db->query("SELECT * FROM sign where sign_username='$user_name' order by sign_id desc limit 0,1");  
		//poll_info
		$data["poll_info"]=$this->db->query("SELECT * FROM poll where poll_username='$user_name' order by poll_id desc limit 0,2");  	
		//article_info
		$data["article_info"]=$this->db->query("SELECT * FROM article where article_username='$user_name' order by article_id desc limit 0,2");  		
		//other user
		$data["other_user"]=$this->db->query("SELECT * FROM user_account order by user_id desc limit 0,4");
		
		//select user image
		$data["user_image"]=$this->db->query("SELECT image FROM user_account WHERE user_name='$user_name'"); 
		$data["user_name"]=$_POST["user_name"];	
		$this->load->view("file/main/main",$data);
	}

//back to user page
	function user_page(){
		$user_name=$this->uri->segment(3);	
		//select zone_game,zone_gift,zone_notice from database
		$data["zone_notice"]=$this->db->query('SELECT * FROM zone_notice order by notice_id desc limit 0,4'); 
		$data["zone_game"]=$this->db->query('SELECT * FROM zone_game order by game_id desc limit 0,6'); 
		$data["zone_gift"]=$this->db->query('SELECT * FROM zone_gift order by gift_id desc limit 0,6'); 
		//user_info	
		$data["user_time"]=$this->db->query("SELECT * FROM user_account where user_name='$user_name'");
		$data["user_info"]=$this->db->query("SELECT * FROM user_info where user_name='$user_name'");
		$data["sign_info"]=$this->db->query("SELECT * FROM sign where sign_username='$user_name' order by sign_id desc limit 0,1");  
		//poll_info
		$data["poll_info"]=$this->db->query("SELECT * FROM poll where poll_username='$user_name' order by poll_id desc limit 0,2");  	
		//article_info
		$data["article_info"]=$this->db->query("SELECT * FROM article where article_username='$user_name' order by article_id desc limit 0,2");  		
		//other user
		$data["other_user"]=$this->db->query("SELECT * FROM user_account order by user_id desc limit 0,4");
	
		//select user image
		$data["user_image"]=$this->db->query("SELECT image FROM user_account WHERE user_name='$user_name'"); 
		$data["user_name"]=$this->uri->segment(3);	
		$this->load->view("file/main/main",$data);
	}

//********************user_info************************//

//user_show_info
	function user_show_info(){
		$data["user_name"]=$this->uri->segment(3);	
		$data["show_info"]=$this->db->query('SELECT * FROM user_info WHERE user_name='.$this->uri->segment(3).''); 
		$data["show_email"]=$this->db->query('SELECT * FROM user_account WHERE user_name='.$this->uri->segment(3).''); 
		$this->load->view("file/user/user_show_info",$data);
	}
//user pic    
	function user_pic(){
		$data["user_name"]=$this->uri->segment(3);	
		$this->load->view("file/user/user_pic",$data);
	}

//user_contact
	function user_contact(){
		$data["user_name"]=$this->uri->segment(3);
		$data["user_email"]=$this->db->query('SELECT * FROM user_account WHERE user_name='.$this->uri->segment(3).''); 	
		$this->load->view("file/user/user_contact",$data);
	}
//user_contact_insert
	function user_contact_insert(){
		$data = array('user_phone'=>$_POST["mobile"],'user_qq'=>$_POST["qq"]); 
		$user_name=$_POST["user_name"];
		$this->db->where('user_name',$user_name);
		$this->db->update('user_info', $data); 
		
		redirect("zone/wait_contact/".$_POST["user_name"]); 
	}
//wait_contact
	function wait_contact(){
		$data["user_name"]=$this->uri->segment(3);
		$this->load->view("file/wait/wait_contact",$data);
	}

//user_info
	function user_info(){
		$data["user_name"]=$this->uri->segment(3);	
		$this->load->view("file/user/user_info",$data);
	}
//user_info_insert
	function user_info_insert(){
		$data = array('user_nick_name'=>$_POST["nick_name"],'user_sex'=>$_POST["sex"],'user_marry'=>$_POST["marry"],
					  'user_country'=>$_POST["province"],'user_city'=>$_POST["city1"],'user_city2'=>$_POST["city2"],
					  'user_brithday'=>$_POST["datepicker"]); 
		$user_name=$_POST["user_name"];
		$this->db->where('user_name',$user_name);
		$this->db->update('user_info', $data); 
		
		redirect("zone/wait_info/".$_POST["user_name"]); 
	}
//wait_info
	function wait_info(){
		$data["user_name"]=$this->uri->segment(3);
		$this->load->view("file/wait/wait_info",$data);
	}
	
//user_credit
	function user_credit(){
		$data["user_name"]=$this->uri->segment(3);
		$this->load->view("file/user/user_credit",$data);
	}
//user_credit_rule
	function user_credit_rule(){
		$data["user_name"]=$this->uri->segment(3);
		$this->load->view("file/user/user_credit_rule",$data);
	}

//user_pwd
	function user_pwd(){
		$data["user_name"]=$this->uri->segment(3);
		$this->load->view("file/user/user_pwd",$data);
	}
//user_change_pwd
	function user_change_pwd(){
		$user_name=$this->uri->segment(3);
		$user_pwd=$_POST["user_pwd"];
   		$valid='TRUE';
		$data["check_pwd"]=$this->db->query("SELECT * FROM user_account WHERE user_name='$user_name' and user_pwd='$user_pwd' and active=1");
		if($data["check_pwd"]->num_rows() > 0){
   			echo "true";
		}
		else{
			echo "false";
		}	
	}
//user_upadte_change_pwd
	function user_upadte_change_pwd(){
		$data = array('user_pwd'=>$_POST["password"]); 
		$user_name=$_POST["user_name"];
		$this->db->where('user_name',$user_name);
		$this->db->update('user_account',$data); 
		
		redirect("zone/wait_pwd/".$_POST["user_name"]); 
	}
//wait_pwd
	function wait_pwd(){
		$data["user_name"]=$this->uri->segment(3);
		$this->load->view("file/wait/wait_pwd",$data);
	}

//********************user info  upload_image************************//
//upload_pic
	 function upload_pic() {
        $config['upload_path']	= "./uploads/pic/";
        $config['allowed_types']= 'gif|jpg|png|jpeg';
        $config['max_size']     = '2000';
        $config['max_width']  	= '2000';
        $config['max_height']  	= '2000';
 
        $this->load->library('upload', $config);
 
        if ($this->upload->do_upload("photo")) {
            $data=$this->upload->data();
      
	  	    $this->load->library('image_lib') ;

            $img['width']   = 200;
            $img['height']  = 200;
            $img['image_library'] = 'GD2';
            $img['quality']      = '100%' ;
            $img['source_image'] = "./uploads/pic/".$data['file_name'] ;
			$img['maintain_ratio'] = FALSE;  
         
            $this->image_lib->initialize($img);
            $this->image_lib->resize();
            $this->image_lib->clear() ;
			// insert into db
			$image=$data['file_name'];
			$user_name=$this->uri->segment(3);
			
			$data["pic"]=$this->db->query("SELECT * FROM user_account WHERE user_name='$user_name'");
			foreach($data["pic"]->result_array() as $row){
				unlink($_SERVER['DOCUMENT_ROOT'].'/liyicheng/zone/uploads/pic/'.$row["image"]); 
			} 
			
			$data["update_pic"]=$this->db->query("UPDATE user_account SET image='$image' WHERE user_name='$user_name'");
			
			echo "success"; 
        }
        else {
            echo "error";
        }
    }

//********************photo************************//
//photo
	function photo(){
		$data["user_name"]=$this->uri->segment(3);
		$gruop_username=$this->uri->segment(3);
	    $data["gruop"]=$this->db->query("SELECT * FROM photo_gruop WHERE gruop_username='$gruop_username' order by  gruop_id desc");
		$this->load->view("file/photo/photo",$data);
	}
	
//photo_all
	function photo_all(){
		$data["user_name"]=$this->uri->segment(3);
		$data["gruop"]=$this->db->query("SELECT * FROM photo_gruop order by  gruop_id desc limit 0,20");
		
		$this->load->view("file/photo/photo_all",$data);
	}

//creat album
	function creat_album(){
		$data["user_name"]=$this->uri->segment(3);
		$this->load->view("file/photo/creat_album",$data);
	}
//creat album gruop
	function creat_album_gruop(){
		$gruop_name=$_POST["gruop_name"];
		$gruop_username=$_POST["gruop_username"];
		$data["photo_gruop"]=$this->db->query("insert into photo_gruop (gruop_id,gruop_name,gruop_username,gruop_pic) values ('','$gruop_name','$gruop_username','no_photo.png')");
	
		redirect("zone/photo/".$_POST["gruop_username"]); 
	}
//creat album gruop.......  check_gruop_name
	function check_gruop_name(){
		if(isset($_POST["gruop_name"])){
			$gruop_name=$_POST["gruop_name"];
			$gruop_username=$this->uri->segment(3);
			$valid='TRUE';
			$data["gruop_name"]=$this->db->query("SELECT * FROM photo_gruop WHERE gruop_name='$gruop_name' and gruop_username='$gruop_username'"); 
			if($data["gruop_name"]->num_rows() > 0){
     			echo "false";
			}
			else{
				echo "true";
			}
		}
	}

//upload_photo
	function upload_photo(){
		$gruop_username=$this->uri->segment(3);
	    $data["gruop_name"]=$this->db->query("SELECT * FROM photo_gruop WHERE gruop_username='$gruop_username'");
		
		$data["user_name"]=$this->uri->segment(3);
		$this->load->view("file/photo/upload_photo",$data);
	}
	
//upload_photo_insert
	function upload_photo_insert() {
        $config['upload_path']	= "./uploads/photo/real/";
        $config['allowed_types']= 'gif|jpg|png|jpeg';
        $config['max_size']     = '2000';
        $config['max_width']  	= '2000';
        $config['max_height']  	= '2000';
 
        $this->load->library('upload', $config);
 
        if ($this->upload->do_upload("photo")) {
            $data=$this->upload->data();
      		
			//path
			$source             = "./uploads/photo/real/".$data['file_name'] ;
			$destination_photo	= "./uploads/photo/photo/" ;
            $destination_show	= "./uploads/photo/show_photo/" ;
  		
	  	    $this->load->library('image_lib') ;
			chmod($source, 0777) ;
			 $img['image_library'] = 'GD2';
	   		 $img['create_thumb']  = TRUE;
	  		 $img['maintain_ratio']= TRUE;
 

			//width 100, height 100
            $img['width']   = 100;
            $img['height']  = 100;
            $img['quality']      = '100%' ;
            $img['source_image'] = $source;
         	$img['new_image']    = $destination_photo ;
		 
            $this->image_lib->initialize($img);
            $this->image_lib->resize();
            $this->image_lib->clear() ;	
			
			//width 400, height 400
			$img['width']   = 400;
            $img['height']  = 400;
            $img['quality']      = '100%' ;
            $img['source_image'] = $source;
			$img['new_image']    = $destination_show ;
         
            $this->image_lib->initialize($img);
            $this->image_lib->resize();
            $this->image_lib->clear() ;
			
			echo "success"; 
        }
        else {
            echo "error";
        }
    }
//update_photo_insert	
	function update_photo_insert(){
		$photo_username=$_POST["user_name"];
		$photo_name=$_POST["photo_name"];
		$photo_title=$_POST["tags"];
		$gruop_name=$_POST["gruop_name"];
		$data["update_photo"]=$this->db->query("insert into photo (photo_id,photo_name,photo_username,photo_title,gruop_name) values ('','$photo_name','$photo_username','$photo_title','$gruop_name')");
		
		redirect("zone/wait_photo/".$_POST["user_name"]); 
	}
//wait_photo
	function wait_photo(){
		$data["user_name"]=$this->uri->segment(3);
		$this->load->view("file/wait/wait_photo",$data);
	}
	
//show_photo
	function show_photo(){
		$gruop_name=$this->uri->segment(4);
		$user_name=$this->uri->segment(3);
		if($this->uri->segment(5)==""){
			$data["gruop_name"]=$this->uri->segment(4);
			$data["gruop_photo"]=$this->db->query("SELECT * FROM photo WHERE photo_username='$user_name' and gruop_name='$gruop_name'");
			$data["photo_total"]=$this->db->query("SELECT * FROM photo WHERE photo_username='$user_name' and gruop_name='$gruop_name'");
		}
		if($this->uri->segment(5)!=""){
			$username_all=$this->uri->segment(5);
			$data["gruop_photo"]=$this->db->query("SELECT * FROM photo WHERE photo_username='$username_all' and gruop_name='$gruop_name'");
			$data["photo_total"]=$this->db->query("SELECT * FROM photo WHERE photo_username='$username_all' and gruop_name='$gruop_name'");
			$data["gruop_name"]=$this->uri->segment(5);
		}
		
		$data["user_name"]=$this->uri->segment(3);
		
		
		$this->load->view("file/photo/show_photo",$data);
	}
	
//photo_management
	function photo_management(){
		$gruop_name=$this->uri->segment(4);
		$gruop_username=$this->uri->segment(3);
		$data["gruop_photo"]=$this->db->query("SELECT * FROM photo WHERE photo_username='$gruop_username' and gruop_name='$gruop_name'");
		
		$data["gruop_name"]=$this->uri->segment(4);
		$data["user_name"]=$this->uri->segment(3);
		$photo_username=$this->uri->segment(3);
		$data["photo_total"]=$this->db->query("SELECT * FROM photo WHERE photo_username='$photo_username' and gruop_name='$gruop_name'");
		
		$this->load->view("file/photo/photo_management",$data);
	}
	
//photo_preview
	function photo_preview(){
		$user_name=$this->uri->segment(3);
		$photo_name=$this->uri->segment(4);
		$gruop_name=$this->uri->segment(5);
		$data["upload"]=$this->db->query("UPDATE photo_gruop SET gruop_pic='$photo_name' WHERE gruop_username='$user_name' and gruop_name='$gruop_name'");
		
		redirect("zone/photo/".$user_name); 
	}
	
//photo_delete
	function photo_delete(){
		$user_name=$this->uri->segment(3);
		$photo_name=$this->uri->segment(4);
		$gruop_name=$this->uri->segment(5);
		$data["check_pic"]=$this->db->query("select * FROM photo_gruop WHERE gruop_name='$gruop_name' and gruop_username='$user_name' and gruop_pic='$photo_name'");
		$data["upload"]=$this->db->query("select * FROM photo WHERE gruop_name='$gruop_name' and photo_username='$user_name' and photo_name='$photo_name'");
		$data["delete"]=$this->db->query("DELETE FROM photo WHERE gruop_name='$gruop_name' and photo_username='$user_name' and photo_name='$photo_name'");
		$data["photo_total"]=$this->db->query("SELECT * FROM photo WHERE photo_username='$user_name' and gruop_name='$gruop_name'");
		
		if($data["check_pic"]->num_rows() > 0){
			$data["check_pic"]=$this->db->query("UPDATE photo_gruop SET gruop_pic='no_photo.png' WHERE gruop_username='$user_name' and gruop_name='$gruop_name'");
		}
	
		if($data["upload"]->num_rows() > 0){
			unlink($_SERVER['DOCUMENT_ROOT'].'/liyicheng/zone/uploads/photo/real/'.$photo_name); 
			unlink($_SERVER['DOCUMENT_ROOT'].'/liyicheng/zone/uploads/photo/photo/'.$photo_name); 
			unlink($_SERVER['DOCUMENT_ROOT'].'/liyicheng/zone/uploads/photo/show_photo/'.$photo_name); 
			$data["gruop_photo"]=$this->db->query("SELECT * FROM photo WHERE photo_username='$user_name' and gruop_name='$gruop_name'");
			$data["gruop_name"]=$this->uri->segment(5);
			$data["user_name"]=$this->uri->segment(3);
			$this->load->view("file/photo/photo_management",$data);
		}
		else{
			$data["gruop_photo"]=$this->db->query("SELECT * FROM photo WHERE photo_username='$user_name' and gruop_name='$gruop_name'");
			$data["gruop_name"]=$this->uri->segment(5);
			$data["user_name"]=$this->uri->segment(3);
			$this->load->view("file/photo/photo_management",$data);
		}
	}
	
//album_delete
	function album_delete(){
		$user_name=$this->uri->segment(3);
		$gruop_name=$this->uri->segment(4);
		$data["gruop_photo"]=$this->db->query("SELECT * FROM photo WHERE photo_username='$user_name' and gruop_name='$gruop_name'");
		$data["delete_gruop"]=$this->db->query("DELETE FROM photo_gruop WHERE gruop_name='$gruop_name' and gruop_username='$user_name'");
		$data["delete_photo"]=$this->db->query("DELETE FROM photo WHERE gruop_name='$gruop_name' and photo_username='$user_name'");
		
		foreach($data["gruop_photo"]->result_array() as $row){
			unlink($_SERVER['DOCUMENT_ROOT'].'/liyicheng/zone/uploads/photo/real/'.$row["photo_name"]); 
			unlink($_SERVER['DOCUMENT_ROOT'].'/liyicheng/zone/uploads/photo/photo/'.$row["photo_name"]); 
			unlink($_SERVER['DOCUMENT_ROOT'].'/liyicheng/zone/uploads/photo/show_photo/'.$row["photo_name"]); 	
		}
		
		redirect("zone/photo/".$user_name); 
	}
	
//******************  article  ***************************//

//article 
	function article(){
		$data["user_name"]=$this->uri->segment(3);
		$class_username=$this->uri->segment(3);
		$data["class_info"]=$this->db->query("SELECT * FROM article_class WHERE class_username='$class_username'"); 
		$data["article_info"]=$this->db->query("SELECT * FROM article WHERE article_username='$class_username' order by article_id desc"); 
		$data["article_pic"]=$this->db->query("SELECT * FROM user_account WHERE user_name='$class_username'"); 
			
		$this->load->view("file/article/article",$data);
	}
	
//article_all 
	function article_all(){
		$data["user_name"]=$this->uri->segment(3);
		$data["article_info"]=$this->db->query("SELECT * FROM article order by article_id desc limit 0,10"); 
		
		$this->load->view("file/article/article_all",$data);
	}

//creat_class 
	function creat_class (){
		$data["user_name"]=$this->uri->segment(3);
		$this->load->view("file/article/creat_class",$data);
	}

//check_class_name
	function check_class_name(){
		if(isset($_POST["class_name"])){
			$class_name=$_POST["class_name"];
			$class_username=$this->uri->segment(3);
			$valid='TRUE';
			$data["class_name"]=$this->db->query("SELECT * FROM article_class WHERE class_name='$class_name' and class_username='$class_username'"); 
			if($data["class_name"]->num_rows() > 0){
     			echo "false";
			}
			else{
				echo "true";
			}
		}
	}

//class_name_insert
	function class_name_insert(){
		$class_name=$_POST["class_name"];
		$class_username=$_POST["class_username"];
		$data["class_gruop"]=$this->db->query("insert into article_class (class_id,class_name,class_username) values ('','$class_name','$class_username')");
	
		redirect("zone/article/".$_POST["class_username"]); 
	}
	
//show_class
	function show_class(){
		$class_username=$this->uri->segment(3);
		$class_name=$this->uri->segment(4);
		$data["user_name"]=$this->uri->segment(3);
		$data["click_class_name"]=$this->uri->segment(4);
		$data["class_info"]=$this->db->query("SELECT * FROM article_class WHERE class_username='$class_username'"); 
		$data["article_info"]=$this->db->query("SELECT * FROM article WHERE article_username='$class_username' and class_name='$class_name' order by article_id desc"); 
		$data["article_pic"]=$this->db->query("SELECT * FROM user_account WHERE user_name='$class_username'"); 
			
		$this->load->view("file/article/article",$data);
	}
	
//delete_class
	function delete_class(){
		$class_username=$this->uri->segment(3);
		$class_name=$this->uri->segment(4);
		$data["user_name"]=$this->uri->segment(3);
		$data["click_class_name"]=$this->uri->segment(4);
		$data["delete_class"]=$this->db->query("DELETE FROM article_class WHERE class_username='$class_username' and class_name='$class_name'"); 
		$data["delete_article"]=$this->db->query("DELETE FROM article WHERE article_username='$class_username' and class_name='$class_name'"); 
		
		$data["class_info"]=$this->db->query("SELECT * FROM article_class WHERE class_username='$class_username'"); 
		$data["article_info"]=$this->db->query("SELECT * FROM article WHERE article_username='$class_username' order by article_id desc"); 
		$data["article_pic"]=$this->db->query("SELECT * FROM user_account WHERE user_name='$class_username'"); 
		
		$this->load->view("file/article/article",$data);
	}
	
//creat_article
	function creat_article(){
		$class_username=$this->uri->segment(3);
		$data["user_name"]=$this->uri->segment(3);
		$data["class"]=$this->db->query("SELECT * FROM article_class WHERE class_username='$class_username'"); 
		$this->load->view("file/article/creat_article",$data);
	}
	
//check_article_title
	function check_article_title(){
		if(isset($_POST["title"])){
			$article_title=$_POST["title"];
			$article_username=$this->uri->segment(3);
			$valid='TRUE';
			$data["article_name"]=$this->db->query("SELECT * FROM article WHERE article_title='$article_title' and article_username='$article_username'"); 
			if($data["article_name"]->num_rows() > 0){
     			echo "false";
			}
			else{
				echo "true";
			}
		}
	}
	
//article_insert
	function article_insert(){
		$article_title=$_POST["title"];
		$article_username=$_POST["username"];
		$article_body=$_POST["editor_kama"];
		$class_name=$_POST["class_name"];
		
		$datestring = "%Y-%m-%d  %h:%i";
		$time = time();
		$article_time=mdate($datestring, $time);
		
		$data["insert_article"]=$this->db->query("insert into article (article_id,article_title,article_body,article_username,article_time,class_name) values ('','$article_title','$article_body','$article_username','$article_time','$class_name')");
		$data["user_name"]=$_POST["username"];
		$this->load->view("file/wait/wait_article_delete",$data);
	}
	
//show article
	function show_article(){
		$article_username=$this->uri->segment(3);
		$article_title=$this->uri->segment(4);
		$class_name=$this->uri->segment(5);
		if($this->uri->segment(6)==""){
			$data["article_info"]=$this->db->query("SELECT * FROM article WHERE article_title='$article_title' and article_username='$article_username' and class_name='$class_name'"); 
		}
		if($this->uri->segment(6)!=""){
			$article_username=$this->uri->segment(6);
			$data["article_info"]=$this->db->query("SELECT * FROM article WHERE article_title='$article_title' and article_username='$article_username' and class_name='$class_name'"); 
		}
		
		
		$data["article_info"]=$this->db->query("SELECT * FROM article WHERE article_title='$article_title' and article_username='$article_username' and class_name='$class_name'"); 
		$data["user_name"]=$this->uri->segment(3);
		$data["article"]=$this->db->query("SELECT * FROM article order by  article_id desc limit 0,5"); 
		
		$this->load->view("file/article/show_article",$data);
	}

//show article_all
	function show_article_all(){
		$article_username=$this->uri->segment(3);
		$article_title=$this->uri->segment(4);
		$class_name=$this->uri->segment(5);
		$data["article_info"]=$this->db->query("SELECT * FROM article WHERE article_title='$article_title' and class_name='$class_name'"); 
		$data["user_name"]=$this->uri->segment(3);
		$data["article"]=$this->db->query("SELECT * FROM article order by  article_id desc limit 0,5"); 
		
		$this->load->view("file/article/show_article_all",$data);
	}

//article_rating_all
	function article_rating_all(){
		$rating=$_POST["rating"];
		$class_name=$_POST["class_name"];
		$article_title=$_POST["article_title"];	
		$article_username=$_POST["username"];
		$friend_name=$_POST["friend_name"];
		
		if($friend_name==""){
			$old_rating=$this->db->query("SELECT article_rating FROM article WHERE article_title='$article_title' and article_username='$article_username' and class_name='$class_name'"); 
		}
		if($friend_name!=""){
			$old_rating=$this->db->query("SELECT article_rating FROM article WHERE article_title='$article_title' and article_username='$friend_name' and class_name='$class_name'"); 
		}
		
		
		foreach($old_rating->result_array() as $row){
			$old_rating=$row["article_rating"];
			if($old_rating==0){
				$new_rating=$rating;
			}
			if($old_rating!=0){
				$new_rating=(($old_rating+$rating)/2);
			}
		}
			
			if($new_rating==1){
				$data["article_upload"]=$this->db->query("UPDATE article SET article_rating='1' WHERE class_name='$class_name' and article_title='$article_title'");
			}
			else if($new_rating==1.5){
				$data["article_upload"]=$this->db->query("UPDATE article SET article_rating='2' WHERE class_name='$class_name' and article_title='$article_title'");
			}
			else if($new_rating==2.5){
				$data["article_upload"]=$this->db->query("UPDATE article SET article_rating='3' WHERE class_name='$class_name' and article_title='$article_title'");		
			}
			else if($new_rating==3.5){
				$data["article_upload"]=$this->db->query("UPDATE article SET article_rating='4' WHERE class_name='$class_name' and article_title='$article_title'");
			}
			else if($new_rating==4.5){
				$data["article_upload"]=$this->db->query("UPDATE article SET article_rating='5' WHERE class_name='$class_name' and article_title='$article_title'");
			}
			else if($new_rating==5.5){
				$data["article_upload"]=$this->db->query("UPDATE article SET article_rating='6' WHERE class_name='$class_name' and article_title='$article_title'");
			}
			else if($new_rating==6.5){
				$data["article_upload"]=$this->db->query("UPDATE article SET article_rating='7' WHERE class_name='$class_name' and article_title='$article_title'");
			}
			else if($new_rating==7.5){
				$data["article_upload"]=$this->db->query("UPDATE article SET article_rating='8' WHERE class_name='$class_name' and article_title='$article_title'");
			}
			else if($new_rating==8.5){
				$data["article_upload"]=$this->db->query("UPDATE article SET article_rating='9' WHERE class_name='$class_name' and article_title='$article_title'");
			}
			else if($new_rating==9.5){
				$data["article_upload"]=$this->db->query("UPDATE article SET article_rating='10' WHERE class_name='$class_name' and article_title='$article_title'");		
			}
			else if($new_rating==10.5){
				$data["article_upload"]=$this->db->query("UPDATE article SET article_rating='11' WHERE class_name='$class_name' and article_title='$article_title'");		
			}
			else if($new_rating==11.5){
				$data["article_upload"]=$this->db->query("UPDATE article SET article_rating='12' WHERE class_name='$class_name' and article_title='$article_title'");		
			}
			else if($new_rating==12.5){
				$data["article_upload"]=$this->db->query("UPDATE article SET article_rating='13' WHERE class_name='$class_name' and article_title='$article_title'");	
			}
			else if($new_rating==13.5){
				$data["article_upload"]=$this->db->query("UPDATE article SET article_rating='14' WHERE class_name='$class_name' and article_title='$article_title'");
			}
			else if($new_rating==14.5){
				$data["article_upload"]=$this->db->query("UPDATE article SET article_rating='15' WHERE class_name='$class_name' and article_title='$article_title'");
			}
			else if($new_rating==15.5){
				$data["article_upload"]=$this->db->query("UPDATE article SET article_rating='16' WHERE class_name='$class_name' and article_title='$article_title'");
			}
			else if($new_rating==16.5){
				$data["article_upload"]=$this->db->query("UPDATE article SET article_rating='17' WHERE class_name='$class_name' and article_title='$article_title'");	
			}
			else if($new_rating==17.5){
				$data["article_upload"]=$this->db->query("UPDATE article SET article_rating='18' WHERE class_name='$class_name' and article_title='$article_title'");		
			}
			else if($new_rating==18.5){
				$data["article_upload"]=$this->db->query("UPDATE article SET article_rating='19' WHERE class_name='$class_name' and article_title='$article_title'");
			}
			else if($new_rating==19.5){
				$data["article_upload"]=$this->db->query("UPDATE article SET article_rating='20' WHERE class_name='$class_name' and article_title='$article_title'");		
			}
			else if($new_rating==20){
				$data["article_upload"]=$this->db->query("UPDATE article SET article_rating='20' WHERE class_name='$class_name' and article_title='$article_title'");
			}
			else{
				$data["article_upload"]=$this->db->query("UPDATE article SET article_rating='$new_rating' WHERE class_name='$class_name' and article_title='$article_title'");
			}
			
		$data["article_title"]=$_POST["article_title"];
		$data["class_name"]=$_POST["class_name"];
		$data["user_name"]=$_POST["username"];
		$data["friend_name"]=$_POST["friend_name"];
		
		
		$this->load->view("file/wait/wait_article_all",$data);
	}

//article_rating
	function article_rating(){
		$rating=$_POST["rating"];
		$class_name=$_POST["class_name"];
		$article_title=$_POST["article_title"];	
		$article_username=$_POST["username"];
		$friend_name=$_POST["friend_name"];
		
		if($friend_name==""){
			$old_rating=$this->db->query("SELECT article_rating FROM article WHERE article_title='$article_title' and article_username='$article_username' and class_name='$class_name'"); 
		}
		if($friend_name!=""){
			$old_rating=$this->db->query("SELECT article_rating FROM article WHERE article_title='$article_title' and article_username='$friend_name' and class_name='$class_name'"); 
		}
		
		
		foreach($old_rating->result_array() as $row){
			$old_rating=$row["article_rating"];
			if($old_rating==0){
				$new_rating=$rating;
			}
			if($old_rating!=0){
				$new_rating=(($old_rating+$rating)/2);
			}
		}
			
			if($new_rating==1){
				$data["article_upload"]=$this->db->query("UPDATE article SET article_rating='1' WHERE class_name='$class_name' and article_title='$article_title'");
			}
			else if($new_rating==1.5){
				$data["article_upload"]=$this->db->query("UPDATE article SET article_rating='2' WHERE class_name='$class_name' and article_title='$article_title'");
			}
			else if($new_rating==2.5){
				$data["article_upload"]=$this->db->query("UPDATE article SET article_rating='3' WHERE class_name='$class_name' and article_title='$article_title'");		
			}
			else if($new_rating==3.5){
				$data["article_upload"]=$this->db->query("UPDATE article SET article_rating='4' WHERE class_name='$class_name' and article_title='$article_title'");
			}
			else if($new_rating==4.5){
				$data["article_upload"]=$this->db->query("UPDATE article SET article_rating='5' WHERE class_name='$class_name' and article_title='$article_title'");
			}
			else if($new_rating==5.5){
				$data["article_upload"]=$this->db->query("UPDATE article SET article_rating='6' WHERE class_name='$class_name' and article_title='$article_title'");
			}
			else if($new_rating==6.5){
				$data["article_upload"]=$this->db->query("UPDATE article SET article_rating='7' WHERE class_name='$class_name' and article_title='$article_title'");
			}
			else if($new_rating==7.5){
				$data["article_upload"]=$this->db->query("UPDATE article SET article_rating='8' WHERE class_name='$class_name' and article_title='$article_title'");
			}
			else if($new_rating==8.5){
				$data["article_upload"]=$this->db->query("UPDATE article SET article_rating='9' WHERE class_name='$class_name' and article_title='$article_title'");
			}
			else if($new_rating==9.5){
				$data["article_upload"]=$this->db->query("UPDATE article SET article_rating='10' WHERE class_name='$class_name' and article_title='$article_title'");		
			}
			else if($new_rating==10.5){
				$data["article_upload"]=$this->db->query("UPDATE article SET article_rating='11' WHERE class_name='$class_name' and article_title='$article_title'");		
			}
			else if($new_rating==11.5){
				$data["article_upload"]=$this->db->query("UPDATE article SET article_rating='12' WHERE class_name='$class_name' and article_title='$article_title'");		
			}
			else if($new_rating==12.5){
				$data["article_upload"]=$this->db->query("UPDATE article SET article_rating='13' WHERE class_name='$class_name' and article_title='$article_title'");	
			}
			else if($new_rating==13.5){
				$data["article_upload"]=$this->db->query("UPDATE article SET article_rating='14' WHERE class_name='$class_name' and article_title='$article_title'");
			}
			else if($new_rating==14.5){
				$data["article_upload"]=$this->db->query("UPDATE article SET article_rating='15' WHERE class_name='$class_name' and article_title='$article_title'");
			}
			else if($new_rating==15.5){
				$data["article_upload"]=$this->db->query("UPDATE article SET article_rating='16' WHERE class_name='$class_name' and article_title='$article_title'");
			}
			else if($new_rating==16.5){
				$data["article_upload"]=$this->db->query("UPDATE article SET article_rating='17' WHERE class_name='$class_name' and article_title='$article_title'");	
			}
			else if($new_rating==17.5){
				$data["article_upload"]=$this->db->query("UPDATE article SET article_rating='18' WHERE class_name='$class_name' and article_title='$article_title'");		
			}
			else if($new_rating==18.5){
				$data["article_upload"]=$this->db->query("UPDATE article SET article_rating='19' WHERE class_name='$class_name' and article_title='$article_title'");
			}
			else if($new_rating==19.5){
				$data["article_upload"]=$this->db->query("UPDATE article SET article_rating='20' WHERE class_name='$class_name' and article_title='$article_title'");		
			}
			else if($new_rating==20){
				$data["article_upload"]=$this->db->query("UPDATE article SET article_rating='20' WHERE class_name='$class_name' and article_title='$article_title'");
			}
			else{
				$data["article_upload"]=$this->db->query("UPDATE article SET article_rating='$new_rating' WHERE class_name='$class_name' and article_title='$article_title'");
			}
			
		$data["article_title"]=$_POST["article_title"];
		$data["class_name"]=$_POST["class_name"];
		$data["user_name"]=$_POST["username"];
		$data["friend_name"]=$_POST["friend_name"];
		
		
		$this->load->view("file/wait/wait_article",$data);
	}
	
//article_edit
	function article_edit(){
		$article_username=$this->uri->segment(3);
		$article_title=$this->uri->segment(4);
		$class_name=$this->uri->segment(5);
		$data["article_edit"]=$this->db->query("SELECT * FROM article WHERE article_title='$article_title' and article_username='$article_username' and class_name='$class_name'"); 
	
		$data["user_name"]=$this->uri->segment(3);
		$this->load->view("file/article/article_edit",$data);
	}

//check_article_title_edit
	function check_article_title_edit(){
			$old_title=$_POST["old_title"];
			$article_title=$_POST["title"];
			if($old_title==$article_title){
				echo "true";
			}
			
			$article_username=$this->uri->segment(3);
			$valid='TRUE';
			$data["article_name"]=$this->db->query("SELECT * FROM article WHERE article_title='$article_title' and article_username='$article_username'"); 
			if($data["article_name"]->num_rows() > 0){
     			echo "false";
			}
			else{
				echo "true";
			}
	}
	
//update_edit
	function update_edit(){
		$article_title=$_POST["title"];
		$old_title=$_POST["old_title"];
		$article_username=$_POST["username"];
		$article_body=$_POST["editor_kama"];
		$class_name=$_POST["class_name"];
				
		$data["upload_edit"]=$this->db->query("UPDATE article SET article_title='$article_title',article_body='$article_body' WHERE class_name='$class_name' and article_title='$old_title' and article_username='$article_username'");
		
		$data["article_title"]=$_POST["title"];
		$data["class_name"]=$_POST["class_name"];
		$data["user_name"]=$_POST["username"];
		$this->load->view("file/wait/wait_article",$data);		
	}
	
//article_delete
	function article_delete(){
		$article_username=$this->uri->segment(3);
		$article_title=$this->uri->segment(4);
		$class_name=$this->uri->segment(5);
	
		$data["article_delete"]=$this->db->query("DELETE FROM article WHERE article_username='$article_username' and class_name='$class_name' and article_title='$article_title'"); 
		
		$data["user_name"]=$this->uri->segment(3);
		$this->load->view("file/wait/wait_article_delete",$data);
	}
	
//******************   sign  **********************//

//sign
	function sign(){
		$user_name=$this->uri->segment(3);
		$data["sign_info"]=$this->db->query("SELECT * FROM sign WHERE sign_username='$user_name' order by sign_id desc"); 
		$data["sign_pic"]=$this->db->query("SELECT * FROM user_account WHERE user_name='$user_name'"); 
		
		$data["user_name"]=$this->uri->segment(3);
		$this->load->view("file/sign/sign",$data);
	}

//sign_all
	function sign_all(){
		$user_name=$this->uri->segment(3);
		$data["sign_info"]=$this->db->query("SELECT * FROM sign  order by sign_id desc limit 0,10"); 
			
		$data["user_name"]=$this->uri->segment(3);
		$this->load->view("file/sign/sign_all",$data);
	}

//sign_insert	
	function sign_insert(){
		$user_name=$_POST["user_name"];
		$sign=$_POST["sign"];
		
		$datestring = "%Y-%m-%d  %h:%i";
		$time = time();
		$sign_time=mdate($datestring, $time);
		
		if(($sign!="")&&($user_name!="")){
			$data["sign_insert"]=$this->db->query("insert into sign (sign_id,sign_body,sign_username,sign_time) values ('','$sign','$user_name','$sign_time')");
		}

		redirect("zone/wait_sign/".$user_name);
	}
	
//wait_sign
	function wait_sign(){
		$data["user_name"]=$this->uri->segment(3);
		$this->load->view("file/wait/wait_sign",$data);
	}

//wait_sign_null
	function wait_sign_null(){
		$data["user_name"]=$this->uri->segment(3);
		$this->load->view("file/wait/wait_sign_null",$data);
	}

//sign_delete
	function sign_delete(){
		$user_name=$this->uri->segment(3);
		$sign_id=$this->uri->segment(4);
		$data["sign_delete"]=$this->db->query("DELETE FROM sign WHERE sign_username='$user_name' and sign_id='$sign_id'");
		$data["sign_info"]=$this->db->query("SELECT * FROM sign WHERE sign_username='$user_name' order by sign_id desc"); 
		$data["sign_pic"]=$this->db->query("SELECT * FROM user_account WHERE user_name='$user_name'"); 
			
		$data["user_name"]=$this->uri->segment(3);
		$this->load->view("file/sign/sign",$data);
	}

//******************** poll **************************//

//poll_all
	function poll_all(){
		$user_name=$this->uri->segment(3);	
		$data["poll"]=$this->db->query("SELECT * FROM poll order by poll_id desc limit 0,5"); 
		
		$data["user_name"]=$this->uri->segment(3);
		$this->load->view("file/poll/poll_all",$data);
	}
	
//poll
	function poll(){
		$user_name=$this->uri->segment(3);
		$data["poll_pic"]=$this->db->query("SELECT * FROM user_account WHERE user_name='$user_name'"); 
		$data["poll"]=$this->db->query("SELECT * FROM poll WHERE poll_username='$user_name' order by poll_id desc limit 0,5"); 
		
		$data["user_name"]=$this->uri->segment(3);
		$this->load->view("file/poll/poll",$data);
	}

//creat_poll
	function creat_poll(){
		$data["user_name"]=$this->uri->segment(3);
		$this->load->view("file/poll/creat_poll",$data);
	}
	
//check_question_name
	function check_question_name(){
		if(isset($_POST["poll_question"])){
			$poll_question=$_POST["poll_question"];
			$poll_username=$this->uri->segment(3);
			$valid='TRUE';
			$data["poll_question"]=$this->db->query("SELECT * FROM poll WHERE poll_question='$poll_question' and poll_username='$poll_username'"); 
			if($data["poll_question"]->num_rows() > 0){
     			echo "false";
			}
			else{
				echo "true";
			}
		}
	}
			
//insert_poll
	function insert_poll(){
		$user_name=$_POST["user_name"];
		$poll_question=$_POST["poll_question"];
		
		$datestring = "%Y-%m-%d  %h:%i";
		$time = time();
		$poll_time=mdate($datestring, $time);
				
		$data["poll_insert"]=$this->db->query("insert into poll (poll_id,poll_question,poll_total_vote,poll_username,poll_time) values ('','$poll_question','0','$user_name','$poll_time')");
		
		if((isset($_POST["option1"])) && ($_POST["option1"]!="")){
			$option1=$_POST["option1"];
			$data["vote_insert"]=$this->db->query("insert into poll_vote (vote_id,vote_question,vote_option,vote_vote,vote_username) values ('','$poll_question','$option1','0','$user_name')");
		}
		if((isset($_POST["option2"])) && ($_POST["option2"]!="")){
			$option2=$_POST["option2"];
			$data["vote_insert"]=$this->db->query("insert into poll_vote (vote_id,vote_question,vote_option,vote_vote,vote_username) values ('','$poll_question','$option2','0','$user_name')");
		}
		if((isset($_POST["option3"])) && ($_POST["option3"]!="")){
			$option3=$_POST["option3"];
			$data["vote_insert"]=$this->db->query("insert into poll_vote (vote_id,vote_question,vote_option,vote_vote,vote_username) values ('','$poll_question','$option3','0','$user_name')");
		}
		if((isset($_POST["option4"])) && ($_POST["option4"]!="")){
			$option4=$_POST["option4"];
			$data["vote_insert"]=$this->db->query("insert into poll_vote (vote_id,vote_question,vote_option,vote_vote,vote_username) values ('','$poll_question','$option4','0','$user_name')");
		}
		if((isset($_POST["option5"])) && ($_POST["option5"]!="")){
			$option5=$_POST["option5"];
			$data["vote_insert"]=$this->db->query("insert into poll_vote (vote_id,vote_question,vote_option,vote_vote,vote_username) values ('','$poll_question','$option5','0','$user_name')");
		}
		if((isset($_POST["option6"])) && ($_POST["option6"]!="")){
			$option6=$_POST["option6"];
			$data["vote_insert"]=$this->db->query("insert into poll_vote (vote_id,vote_question,vote_option,vote_vote,vote_username) values ('','$poll_question','$option6','0','$user_name')");
		}
		if((isset($_POST["option7"])) && ($_POST["option7"]!="")){
			$option7=$_POST["option7"];
			$data["vote_insert"]=$this->db->query("insert into poll_vote (vote_id,vote_question,vote_option,vote_vote,vote_username) values ('','$poll_question','$option7','0','$user_name')");
		}
		if((isset($_POST["option8"])) && ($_POST["option8"]!="")){
			$option8=$_POST["option8"];
			$data["vote_insert"]=$this->db->query("insert into poll_vote (vote_id,vote_question,vote_option,vote_vote,vote_username) values ('','$poll_question','$option8','0','$user_name')");
		}
		if((isset($_POST["option9"])) && ($_POST["option9"]!="")){
			$option9=$_POST["option9"];
			$data["vote_insert"]=$this->db->query("insert into poll_vote (vote_id,vote_question,vote_option,vote_vote,vote_username) values ('','$poll_question','$option9','0','$user_name')");
		}
			
		redirect("zone/poll/".$user_name);
	}
	
//delete_poll
	function delete_poll(){
		$user_name=$this->uri->segment(3);
		$poll_question=$this->uri->segment(4);
		$data["delete_poll"]=$this->db->query("DELETE FROM poll WHERE poll_username='$user_name' and poll_question='$poll_question'");
		$data["delete_vote"]=$this->db->query("DELETE FROM poll_vote WHERE vote_username='$user_name' and vote_question='$poll_question'");
		
		$user=$this->db->query("SELECT * FROM poll_user WHERE poll_user_question='$poll_question'"); 
			foreach($user->result_array() as $row){
				  if($user==$user_name){
					  $data["update_poll"]=$this->db->query("UPDATE poll SET poll_total_vote='$new_poll' WHERE 	poll_question='$poll_question' and poll_username='$user_name'");
				  }
			}
		
		$data["delete_user"]=$this->db->query("DELETE FROM poll_user WHERE poll_user_username='$user_name' and poll_user_question='$poll_question'");
		
		redirect("zone/poll/".$user_name);
	}

//show_poll
	function show_poll(){
		$poll_question=$this->uri->segment(4);
		$user_name=$this->uri->segment(3);
		if($this->uri->segment(5)!=""){
			$data["friend_name"]=$this->uri->segment(5);
			$friend_name=$this->uri->segment(5);
			$data["poll_info"]=$this->db->query("SELECT * FROM poll WHERE poll_question='$poll_question' and poll_username='$friend_name'"); 
			$data["poll_new"]=$this->db->query("SELECT * FROM poll order by poll_id desc limit 0,5"); 
			$data["poll_pic"]=$this->db->query("SELECT * FROM user_account WHERE user_name='$friend_name'"); 
			$data["poll_user"]=$this->db->query("SELECT * FROM poll_user WHERE poll_user_question='$poll_question' and poll_user_username='$user_name' order by poll_user_id desc limit 0,10"); 
		}
		if($this->uri->segment(5)==""){
			$data["poll_info"]=$this->db->query("SELECT * FROM poll WHERE poll_question='$poll_question' and poll_username='$user_name'"); 
			$data["poll_new"]=$this->db->query("SELECT * FROM poll order by poll_id desc limit 0,5"); 
			$data["poll_pic"]=$this->db->query("SELECT * FROM user_account WHERE user_name='$user_name'"); 
			$data["poll_user"]=$this->db->query("SELECT * FROM poll_user WHERE poll_user_question='$poll_question' and poll_user_username='$user_name' order by poll_user_id desc limit 0,10"); 
		}
			
		$data["poll_question"]=$this->uri->segment(4);
		$data["user_name"]=$this->uri->segment(3);
		
		$this->load->view("file/poll/show_poll",$data);
	}

//insert_vote
	function insert_vote(){
		$poll_question=$_POST["poll_question"];
		$user_name=$_POST["user_name"];
		$user_ip=$_SERVER["REMOTE_ADDR"];  // get user ip
		$datestring = "%Y-%m-%d  %h:%i";
		$time = time();
		$vote_time=mdate($datestring, $time);

		if($_POST["friend_name"]!="null"){
			$friend_name=$_POST["friend_name"];
			if(isset($_POST["poll_option"])){
				$data["friend_name"]=$this->uri->segment(5);
				$poll_option=$_POST["poll_option"];
		
				$data["user_insert"]=$this->db->query("insert into poll_user (poll_user_id,poll_user_ip,poll_user_time,poll_user_question,poll_user_option,poll_user_username) values ('','$user_ip','$vote_time','$poll_question','$poll_option','$user_name')");
				//update database
				$data["select_poll"]=$this->db->query("SELECT * FROM poll WHERE poll_question='$poll_question' and poll_username='$friend_name'"); 
				foreach($data["select_poll"]->result_array() as $row){
					  $new_poll=$row["poll_total_vote"]+1;
					  $data["update_poll"]=$this->db->query("UPDATE poll SET poll_total_vote='$new_poll' WHERE 	poll_question='$poll_question' and poll_username='$friend_name'");
				}
			
				$data["select_vote"]=$this->db->query("SELECT * FROM poll_vote WHERE vote_question='$poll_question' and vote_username='$friend_name' and vote_option='$poll_option'"); 
				foreach($data["select_vote"]->result_array() as $row){
					  $new_vote=$row["vote_vote"]+1;
					  $data["update_vote"]=$this->db->query("UPDATE poll_vote SET vote_vote='$new_vote' WHERE vote_question ='$poll_question' and vote_username='$friend_name' and vote_option='$poll_option'");
				}	
			}
			//update poll
			$total=$this->db->query("SELECT * FROM poll WHERE poll_question='$poll_question' and poll_username='$friend_name'"); 	
			$data["option"]=$this->db->query("SELECT * FROM poll_vote WHERE vote_question='$poll_question' and vote_username='$friend_name'"); 
			foreach($total->result_array() as $row_total){
				echo $row_total["poll_total_vote"].'|';
				foreach($data["option"]->result_array() as $row_option){
					echo (($row_option["vote_vote"]*100)/$row_total["poll_total_vote"]).'|';
				}
			}
			foreach($data["option"]->result_array() as $row_option){
					echo '#'.$row_option["vote_vote"];
				}	
		}
		if($_POST["friend_name"]=="null"){
			if(isset($_POST["poll_option"])){
				$poll_option=$_POST["poll_option"];			
				$data["user_insert"]=$this->db->query("insert into poll_user (poll_user_id,poll_user_ip,poll_user_time,poll_user_question,poll_user_option,poll_user_username) values ('','$user_ip','$vote_time','$poll_question','$poll_option','$user_name')");
				//update database
				$data["select_poll"]=$this->db->query("SELECT * FROM poll WHERE poll_question='$poll_question' and poll_username='$user_name'"); 
				foreach($data["select_poll"]->result_array() as $row){
					  $new_poll=$row["poll_total_vote"]+1;
					  $data["update_poll"]=$this->db->query("UPDATE poll SET poll_total_vote='$new_poll' WHERE 	poll_question='$poll_question' and poll_username='$user_name'");
				}
			
				$data["select_vote"]=$this->db->query("SELECT * FROM poll_vote WHERE vote_question='$poll_question' and vote_username='$user_name' and vote_option='$poll_option'"); 
				foreach($data["select_vote"]->result_array() as $row){
					  $new_vote=$row["vote_vote"]+1;
					  $data["update_vote"]=$this->db->query("UPDATE poll_vote SET vote_vote='$new_vote' WHERE vote_question ='$poll_question' and vote_username='$user_name' and vote_option='$poll_option'");
				}	
			}
			
			//update poll
			$total=$this->db->query("SELECT * FROM poll WHERE poll_question='$poll_question' and poll_username='$user_name'"); 	
			$data["option"]=$this->db->query("SELECT * FROM poll_vote WHERE vote_question='$poll_question' and vote_username='$user_name'"); 
			foreach($total->result_array() as $row_total){
				echo $row_total["poll_total_vote"].'|';
				foreach($data["option"]->result_array() as $row_option){
					echo round(($row_option["vote_vote"]*100)/$row_total["poll_total_vote"],0).'%|';
				}
			}
			foreach($data["option"]->result_array() as $row_option){
					echo '#'.$row_option["vote_vote"];
			}
		}		
	}

}
?>
