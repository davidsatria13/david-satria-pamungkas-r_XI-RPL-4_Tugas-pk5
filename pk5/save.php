<CENTER><table>
<?php
$host="localhost"; //HANIFRAKA
$user="root";
$password="";
$nomortelepon=$_POST ['nomortelepon'];
$email=$_POST ['email'];
$namalengkap=$_POST ['namalengkap'];
$namapengguna=$_POST ['namapengguna'];
$password=$_POST ['password'];
$password= str_repeat("*",strlen($password));
echo "<h3>MENYIMPAN DATA</h3><HR>";
echo "<tr>
		<td>nomor telepon</td>
		<td>$nomortelepon</td>
		</tr>";
echo "<tr>
		<td>email</td>
		<td>$email</td>
		</tr>";
echo "<tr>
		<td>nama lengkap</td>
		<td>$namalengkap</td>
		</tr>";
echo "<tr>
		<td>nama pengguna</td>
		<td>$namapengguna</td>
		</tr>";
echo "<tr>
		<td>password</td>
		<td>$password</td>
		</tr>";
echo "<TR><TD COLSPAN=3><hr>";
echo "</table><hr>";
if($nik)
{
	$conn=mysql_connect($host,$user,$password);
	mysql_select_db("dbkaryawan");
	$sql="insert into tkaryawan values ('$nomortelepon','$email','$namalengkap','$namapengguna,'$password')";
	$hasil=mysql_query($sql,$conn); echo "Data berhasil disimpan";
}
?>
</CENTER>