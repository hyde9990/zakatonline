<?php
$link=mysqli_connect("localhost", "root", "", "ta44");
header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Content-Type: application/force-download");
header("Content-Type: application/octet-stream");
header("Content-Type: application/download");
header("Content-Disposition: attachment;filename=". "kkkk". date('Ymd'). ".sql ");
header("Content-Transfer-Encoding: binary ");

echo "create database if not exists 'ta44';\r\n";
echo "\r\n";
echo "use 'ta44';\r\n";
echo "\r\n";

foreach($_POST['tabel'] as $index=>$eko){
$m = "SHOW TABLE STATUS FROM ta44 where Name='$eko'";
$n = mysqli_query($link,$m);

while ($datao = mysqli_fetch_array($n))
{
$table=$datao[0];
echo "/*Table structure for table '$table' */\r\n";
echo "\r\n";
echo "DROP TABLE IF EXISTS '$table';\r\n";
echo "\r\n";
echo "CREATE TABLE '$table' (\r\n";
$sql0="desc $table";
$res0= mysqli_query($link,$sql0);
$jum0=mysqli_num_rows($res0);
$j=0;
$key=0;
while($row0= mysqli_fetch_row($res0)){
 $j++;
 if($jum0==$j and $key==0)
 {
  if($row0[2]=='NO')
  {
   echo "'$row0[0]' $row0[1] NOT NULL);\r\n";
  }
  else
  {
   echo "'$row0[0]' $row0[1] default NULL);\r\n";
  }
 }
 else
 {
  if($row0[2]=='NO')
  {
   echo "'$row0[0]' $row0[1] NOT NULL,\r\n";
  }
  else
  {
   echo "'$row0[0]' $row0[1] default NULL,\r\n";
  }
 }
 if($row0[3]=='PRI')
 {
  $key=$key+1;
 }
}
$sql1= "desc $table";
$res1= mysqli_query($link,$sql1);
$k=0;
while ($row1= mysqli_fetch_row($res1))
{
 if($row1[3]=='PRI')
 {
  $k++;
  if($key-1==0)
  {
   echo "PRIMARY KEY  ('$row1[0]')\r\n";
   echo ");\r\n";
  }
  else if($k>1 and $k<$key)
  {
   echo "'$row1[0]',";
  }
  else if($k==$key)
  {
   echo "'$row1[0]')\r\n";
   echo ");\r\n";
  }
  else
  {
   echo "PRIMARY KEY  ('$row1[0]',";
  }
 }
  }
echo "\r\n";
  $sql= "SELECT * FROM $table";
$res= mysqli_query($link,$sql);
while($row= mysqli_fetch_row($res)){
echo "INSERT INTO '$table' VALUES('".implode("','",$row)."');\r\n";
}
}
echo "\r\n";
}
?>
