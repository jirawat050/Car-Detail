<?php
include 'connection.php';
if(isset($_POST['submit'])){
        $target = "name/".basename($_FILES['file']['name']);
        $file = $_FILES['file']['name'];
		$carname =$_POST['carname'];
		$idcar =$_POST['idcar'];
        $distance=$_POST['distance'];
		$astar=$_POST['astar'];
    
  	    $check ="SELECT * FROM car WHERE id = '$id' ";
		$checkfile=mysqli_query($dbcon, $check);
		$checkcolum=mysqli_num_rows($checkfile);
		if($checkcolum > 0){

			$sql="UPDATE car SET carname='".$carname."',idcar='".$idcar."', distance='".$distance."', astar='".$astar."' ";


			$result = mysqli_query($dbcon,$sql);
			echo '<script language="javascript">';
				echo  'alert("อัพโหลดไฟล์เสร็จสิ้น")';
				echo '</script>';
				$URL="../index.php";
			echo "<script>location.href='$URL'</script>";
			
			if(move_uploaded_file($_FILES['file']['tmp_name'], $target)){
				echo '<script language="javascript">';
				echo  'alert("อัพโหลดไฟล์เสร็จสิ้น")';
				echo '</script>';
				$URL="../index.php";
			echo "<script>location.href='$URL'</script>";
			}
		}
		else{
		$sql = "INSERT INTO car (carname,idcar,distance,astar) VALUES ('$carname','$idcar','$distance','$astar')";
		$result = mysqli_query($dbcon,$sql);
		echo '<script language="javascript">';
				echo  'alert("อัพโหลดไฟล์เสร็จสิ้น")';
				echo '</script>';
				$URL="../index.php";
			echo "<script>location.href='$URL'</script>";
	
		if(move_uploaded_file($_FILES['file']['tmp_name'], $target)){
			echo '<script language="javascript">';
			echo  'alert("อัพโหลดไฟล์เสร็จสิ้น")';
			echo '</script>';
			$URL="../index.php";
		echo "<script>location.href='$URL'</script>";
		}
	}

mysqli_close($dbcon);

	}
?>
