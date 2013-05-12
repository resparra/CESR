
<html>
<LINK href="style.css" rel="stylesheet" type="text/css">
<div id="banner">
<h1>CESR <font size="5" color="white">Center for Evaluation and Sociomedical Reaserch</font></h1>
</div>
<div id="container">
<form method="POST" action="project_report.php" id="tsform" onSubmit="alert('Data is being inserted');">

Project:
<select id="project" name="project" form="tsform">
<?php

$host="localhost";
$username="jmedina";
$passwd="jom901@gmail.com";
$db="jmedinadb";

$con=mysqli_connect($host, $username, $passwd , $db);

$result=mysqli_query($con, "SELECT p_id, p_name from Project");
while($row=mysqli_fetch_array($result))
  echo '<option value="'.$row[0].'">'.$row[1].'</option>';

mysqli_close($con);
?>
</select>

Select Year and Month:
<select id="year" name="year" form="tsform">
<?php
$years=array("2011", "2012", "2013");
foreach($years as $value)
    echo '<option value="'.$value.'">'.$value.'</option>';
?>
</select>

<select id="month" name="month" form="tsform">
<?php

//change by month and year data types in html
$months=array("01"=>"Jan", "02"=>"Feb", "03"=>"Mar", "04"=>"Apr", "05"=>"May", "06"=>"Jun", "07"=>"Jul", "08"=>"Aug", "09"=>"Sep", "10"=>"Oct", "11"=>"Nov", "12"=>"Dec");
foreach($months as $key=>$value)
    echo '<option value="'.$key.'">'.$value.'</option>';
?>
</select>
<input type="submit" value="Submit">
</form>
</div>
</html>
