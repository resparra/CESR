<html>
<body>
<div>
<?php

$username="jmedina";
$passwd="jom901@gmail.com";
$db = "jmedinadb";
$host="localhost";

$con=mysqli_connect($host, $username, $passwd , $db);

if(mysqli_connect_errno($con)){
  echo "Failed to connect to MySQL: ". mysqli_connect_error();
  }
else{
  echo "Congratulations! You connected to MySQL";
  }
echo "<br/><br/>";


$id=$_POST['id'];
$pr=$_POST['proyecto'];
$start=$_POST['anho'].'-'.$_POST['mes'].'-'.'01';
$end=$_POST['anho'].'-'.$_POST['mes'].'-'.'31';

$info_query = "SELECT * FROM WorkerPro WHERE w_id='$id' AND p_id='$pr' AND date>='$start' AND date<='$end' ";

$result = mysqli_query($con, $info_query);
?>
</div>

<div align="center">
<table border="1">

<tr>
  <td>DATE</td><td>PROJECT ID</td><td>PHASE ID</td><td>TASK</td>
  <td>COMMENT</td><td>HOURS</td><td>MODALITY</td><td>AUDIENCE</td>
</tr>
<?php while($row=mysqli_fetch_array($result)): ?>
<tr>
<td><?php echo $row['date'] ?></td>
<td><?php echo $row['p_id'] ?></td>
<td><?php echo $row['ph_id'] ?></td>
<td><?php echo $row['t_name'] ?></td>
<td><?php echo $row['comment'] ?></td>
<td><?php echo $row['hours'] ?></td>
<td><?php echo $row['modality'] ?></td>
<td><?php echo $row['audience'] ?></td>
</tr>
<?php endwhile ?>
</table>
</div>
<?php mysqli_close($con);
?>

<br><br><br>

<div align="center">
<form method="POST" action="timesheet2.php" onSubmit="alert('Going Back!')">
<input type="submit" value="Return">
</form>
</div>

</body>
</html>
                                          
