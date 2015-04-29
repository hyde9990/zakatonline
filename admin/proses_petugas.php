<?

include 'config.php';
$id_petugas = strip_tags($_POST['id_petugas']);
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$c_password = $_POST['c_password'];
if ($password != $c_password) {
    print "<script>alert('Silahkan check Password atau Confirm Password !');
		javascript:history.go(-1);</script>";
    exit;
}
if ((!empty($nama)) && (!empty($alamat)) && (!empty($tanggal_lahir)) && (!empty($jenis_kelamin)) && (!empty($username)) && (!empty($email)) && (!empty($password))) {
    $query = mysql_query("INSERT INTO $table2 (id_petugas,nama,alamat,tanggal_lahir,jenis_kelamin,username,email,password)
		values ('$id_petugas','$nama','$alamat','$tanggal_lahir','$jenis_kelamin','$username','$email','$password');");
    print "Successfully register<br><a href=home.php>Back to Halaman Akses</a>";
} else {
    print "<script>alert('Maaf, Data Harus Diisi Semua !');
		javascript:history.go(-1);</script>";
}
?>
<?

//error_reporting(0);
mysql_close($connect);
?>