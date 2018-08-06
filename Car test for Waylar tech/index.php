

<?php
$con=mysqli_connect("localhost","root","","Waylar");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT*FROM car ";

$result=mysqli_query($con,$sql)
  
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
    <form method="post" action="conDB/insert.php" enctype="multipart/form-data">
        <input type="hidden" value="<?php echo $row1['id']?>" name='id'>
        <input type="text" name="carname" placeholder="ชื่อรุ่น"   required="required" />
    	<input type="text" name="idcar" placeholder="เลขทะเบียนรถ" maxlength="13"  required="required" />
        <input type="text" name="distance" placeholder="ระยะทาง" required="required" />
        <input type="number" name="astar" placeholder="เชื้อเพลิง" required="required" />
       
        <input type="submit" name="submit" value="Send">
    </form>
</div>
<br><br>
    <br>
    <div id="testdiv">
    <div id="showdata">
  <table border='1'>
  <tr>
  <th>รุ่นรถ</th>
  <th>เลขทะเบียน</th>
  <th>ระยะทาง</th>
  <th>เชื้อเพลิง</th>
</tr>
<?php // Fetch one and one row
  while ($row=mysqli_fetch_row($result)){?>
<tr>

<td>

<?php echo $row[1]?></td>
  <td><?php echo $row[2]?></td>
  <td><?php echo $row[3]?></td>
  <td><?php echo $row[4]?></td>
  <td><a href="conDB/editform.php?id=<?php echo $row[0]?>">Edit</a></td>
  <td><a href="conDB/delete.php?id=<?php echo $row[0]?>">Delete</a></td>

  </tr>
  <?php } ?>
</body>
</html>
