<!DOCTYPE html>
<html lang="review">
<head>
	<meta charset="UTF-8">
	<title>Hasil</title>
	<link rel="stylesheet" href="css/register.css">
</head>
<body>
<?php
$host= "localhost";
$user= "root";
$password= "";
$email=$_POST['email'];
$fullname=$_POST['fullname'];
$username=$_POST['username'];
$pw=$_POST['password'];
$pw=str_repeat("*",strlen("password"));


if($username)
{
$conn=mysqli_connect ($host,$user,$password);
mysqli_select_db ($conn,'dbigserver');
$sql="insert into tigserver values ('$email', '$fullname', '$username', '$password')";
$hasil=mysqli_query ($conn,$sql);
}

else{
	echo "Data Gagal Disimpan / Cobalah Cek data Terlebih Dahulu";
}
?>

<div id="shape">
<img src="img/font.png">
	<div class="hasil">
		<div class="email">
			E-mail : <?php echo" $email" ?><br>
		</div>

		<div class="fullname">
			Fullname : <?php echo "$fullname"; ?><br>
		</div>

		<div class="user">
			Username  : <?php echo "$username"; ?><br>
		</div>

		<div class="pw">
			Password : <?php echo "$pw"; ?><br>
		</div>


	</div>
</div>




</body>
</html>
