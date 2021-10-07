<?php
session_start();

include "../config.php";

// Dikirim dari form
$username=$_POST['user'];
$password=$_POST['pass'];
$query=mysql_query("SELECT * FROM tb_user WHERE user='$username' AND pass='$password'");
$jumlah=mysql_num_rows($query);
$a=mysql_fetch_array($query);

if($jumlah > 0){
	if($a['level']=='admin')
	{
	$_SESSION['level']=$a['level'];
	$_SESSION['kopid']=$a['kode_user'];
	$_SESSION['kopname']=$a['nama'];
	header("location:../index.php?pilih=home");
	}
	else if($a['level']=='user')
	{
	$_SESSION['level']=$a['level'];
	$_SESSION['kopid']=$a['kode_user'];
	$_SESSION['kopname']=$a['nama'];
	header("location:../index.php?pilih=home");
	}
	
}else{
?>
	<script>
		alert("Username Atau Password Salah");
		window.location="login.php";
	</script>
<?php
}
?>

