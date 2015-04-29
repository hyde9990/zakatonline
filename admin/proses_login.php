<?php

include 'config.php';
ob_start();
$username = $_POST['username'];
$password = $_POST['password'];
$query = mysql_query("SELECT * FROM $table where username='$username' and password='$password'");
$row = mysql_num_rows($query);
$result = mysql_fetch_array($query);

if ($row > 0) {
    session_start();
    $_SESSION[namauser] = $result;
?>
    <script type="text/javascript">alert("selamat datang admin");</script>
<?php

    echo "<meta http-equiv='refresh' content='0,home.php' />";
} else {
?>
    <script type="text/javascript">alert("password atau username yang anda masukkan salah,\nsilahkan coba lagi");</script>
<?php

    echo "<meta http-equiv='refresh' content='0,index.php' />";
}

//if (($username == "") && ($password == "")) {
//   print "<center>Check Kembali Username dan Password Anda !<br/>
//    <a href=index.php>Back to Login</a>";
//    exit;
//}
//if ($row != 0) {
//    if ($password != $result['password']) {
//	print "<script type=\"text/javascript\">alert (\"anda salah memasukkan password\")</script>";
//        header('Location: index.php');
//        exit;
//    } else {
//        print "<center>Selamat Datang $username<br><br/><br/><font size=5><a href=home.php>Masuk</a></font>";
//    }
//}
?>