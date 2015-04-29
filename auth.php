<?php
session_start();
include "config.php";
function login($username,$password){
	switch ($_POST["submit"]!=""){
	case 'a':
		$username=$_POST["username"];
		$password=$_POST["password"];
		//$pass=md5($pass_user);
		$sqlp="SELECT * FROM petugas WHERE username='$username' and password='$password';";
		$result=mysql_query($sqlp)or die("<meta http-equiv=refresh http-equiv=0,index.php />");
		$rows=mysql_fetch_array($result);
		if($rows['username']==$username){
			$_SESSION['user']=$rows;
			$_SESSION['jabatan']="petugas";
			echo "<meta http-equiv=refresh content=0;petugas/index.php>";
			return true;
		}
		
	case 'b':
		$username=$_POST["username"];
		$password=$_POST["password"];
		//$pass=md5($pass_user);
		$sqlu="SELECT * FROM user WHERE username='$username' and password='$password';";
		$result=mysql_query($sqlu)or die("anda bukan user");
		$rows=mysql_fetch_array($result);
		if($rows['username']==$username){
			$_SESSION['user']=$rows;
			$_SESSION['jabatan']="user";
			echo "<meta http-equiv=refresh content=0;user/index.php>";
			return true;
		}
			
	default:
		return false;
	}
}
	
?>