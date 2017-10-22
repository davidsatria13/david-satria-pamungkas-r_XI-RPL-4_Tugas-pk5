<<!DOCTYPE html>
<html>
<head>
	<title>Success</title>
</head>
<body>
<div id="kotak">
<div class="logo"><img src="logo2.png"/></div>
<table align="center">
<hr width="100%">
<?php
$host= "localhost";
$user= "root";
$nomortelepon=$_POST ['nomortelepon'];
$email=$_POST ['email'];
$namalengkap=$_POST ['namalengkap'];
$namapengguna=$_POST ['namapengguna'];
$password=$_POST ['password'];
$password= str_repeat("*",strlen($password));
if($namapengguna)
{
$conn=mysqli_connect ($host,$user,$password);
mysqli_select_db ($conn,'data instagram');
$sql="insert into tbform values ('$email', '$namalengkap', '$namapengguna', '$password')";
$hasil=mysqli_query ($conn,$sql);
}
else{
	echo "Gagal Disimpan";
}
echo "<tr><td>nomor telepon</td>
		  <td>:</td> 
		  <td>$nomortelepon</td>
	  </tr>";
echo "<tr><td>email</td>
          <td>:</td>
          <td>$email</td>
      </tr>";
echo "<tr><td>nama lengkap</td>
          <td>:</td>
          <td>$namalengkap</td>
      </tr>";
echo "<tr><td>namapengguna</td>
		  <td>:</td>
		  <td>$namapengguna</td>
	  </tr>";
	  echo "<tr><td>password</td>
		  <td>:</td>
		  <td>$password</td>
	  </tr>";
?>
</table>
</body>
</html>