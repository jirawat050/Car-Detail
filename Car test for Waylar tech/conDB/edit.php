<?php
include 'connection.php';

$carname =$_POST["carname"];
		$idcar =$_POST["idcar"];
        $distance=$_POST["distance"];
        $astar=$_POST["astar"];
        $id=$_POST['id'];
        $sql="UPDATE car SET carname="."'$carname',idcar ='$idcar',distance ='$distance',astar ='$astar' WHERE id=$id";

$result=mysqli_query($dbcon,$sql);
if($result){
	echo '<script language="javascript">';
	echo  'alert("ข้อมูลแก้ไขเรียบน้อย")';
	echo '</script>';
	$URL="../index.php";
echo "<script>location.href='$URL'</script>";
}
?>