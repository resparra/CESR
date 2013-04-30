<html>
<body>

<?php

$username="jmedina"; //figure out how to get these two variables
$passwd="jom901@gmail.com";
$db="jmedinadb";

//maybe not needed in AJAX????
$con=mysqli_connect("localhost", $username, $passwd ,$db);

if(mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: ". mysqli_connect_error();
  }
else
  {
  echo "Congratulations! You connected to MySQL";
  }
echo "<br/>";

//Inserting into database
//verify attributes
//need to add triggers
$sql="INSERT INTO Worktime (e_id, date, p_id, ph_id, t_name, topic, audience, modality)
VALUES
('$_POST[e_id]','$_POST[date]','$_POST[project]', '$_POST[phase]', '$_POST[hours]', '$_POST[topic]', '$_POST[audience]', '$_POST[modality]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

mysqli_close($con);



//for later

//check if an entry with same key already exists
//if it does, increment its time
//$result=mysqli_query($con, "SELECT * from Worktime WHERE project = $_POST['project'] AND phase = $_POST['phase'] AND task = $_POST['task']");
//if($result){
//  $row=mysqli_fetch_array($result);
//  $newTime=$row['hours'] + $_POST['hours'];
//  mysqli_query($con, "UPDATE Worktime SET hours = $newTime WHERE project = $_POST['project'] AND phase = $_POST['phase'] AND task = $_POST['task']);
//}
//else{
