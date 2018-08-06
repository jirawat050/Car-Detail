<?php
include 'connection.php';
$id = $_GET['id'];
$sql = "delete from car where id=$id";
$result=mysqli_query($dbcon,$sql);
if($result){
	echo '<script language="javascript">';
	echo  'alert("ข้อมูลถูกลบเรียบแล้ว")';
	echo '</script>';
	$URL="../index.php";
echo "<script>location.href='$URL'</script>";
}
?>