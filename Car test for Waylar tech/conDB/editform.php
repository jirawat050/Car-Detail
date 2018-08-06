<?php
$con=mysqli_connect("localhost","root","","Waylar");
$idselect=$_GET['id'];
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $check ="SELECT * FROM car WHERE id = '$idselect' ";
  $checkfile=mysqli_query($con, $check);
  $checkcolum=mysqli_num_rows($checkfile);
  $row=mysqli_fetch_row($checkfile);


  
?>
<!DOCTYPE html>

<html >
<head>
  <meta charset="UTF-8">
  <title>Car System</title>


</head>

<body>
  <div class="login">
	<h1>Car</h1>
    <form method="post" action="edit.php" enctype="multipart/form-data">
        <input type="hidden" value="<?php echo $row[0]?>" name='id'>
        <input type="text" name="carname" placeholder="ชื่อรุ่น"   required="required" value="<?php echo $row[1]?>" />
    	<input type="text" name="idcar" placeholder="เลขทะเบียนรถ" maxlength="13"  required="required"value="<?php echo $row[2]?>" />
        <input type="text" name="distance" placeholder="ระยะทาง" required="required" value="<?php echo $row[3]?>" />
        <input type="number" name="astar" placeholder="เชื้อเพลิง" required="required" value="<?php echo $row[4]?>" />
       
        <input type="submit" name="submit" value="save">
    </form>
</div>
<br><br>
    <br>


</body>
</html>