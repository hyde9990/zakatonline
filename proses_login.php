<?php
include "auth.php";
include "config.php" ;

		$username=$_POST["username"];
		$password=$_POST["password"];
		//$pass=md5($pass_user);

		if($username !="" ){
			//lakukan login
			$hasil=login($username,$password);
			if($hasil==false){
                            ?>
                               <script type="text/javascript">alert("password atau username yang anda masukkan salah,\nsilahkan coba lagi");</script>
                               <meta http-equiv='refresh' content='0,index.php' />
                            <?php
			}
		}
	
	if($_SESSION['username']!=""){	
	$sqlp=mysql_fetch_array(mysql_query("SELECT*FROM petugas"));
	$sqlu=mysql_fetch_array(mysql_query("SELECT*FROM user"));
		if($_SESSION['username']==$sqlp[5]){
			$_SESSION['user']=$sqlp;
			header('Location: index.php');
		}
		if($_SESSION['username']==$sqlu[9]){
			$_SESSION['user']=$sqlu;
			header('Location: user/index.php');
		}
	}
?>    
