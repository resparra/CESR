<HTML>
<head>
<title>FINAL PROJECT</title>
<LINK href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="banner">
<h1>CESR <font size="5" color="white">Center for Evaluation and Sociomedical Reaserch</font></h1>
</div>
<div id="container">
<form method="Post" action="insert_data.php" id="carform">

Project:
<select name="project" form="project">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
</select>

Phase:
<select name="phase" form="project">
<option value="1">1: Contracting Process</option>
<option value="2">2: Program Management Design </option>
<option value="3">3: Implementation</option>
<option value="4">4: Report</option>
<option value="5">5: Close Project</option>
</select>

<?php

$val=array(1,0,1,1,0,0,0,0,1,1,1,0,1,0,0,1,1,0,1);
$tasks=array("Communication with client", "Consulting team meeting", "Development of proposal", "Lit review", "Networking", "Contracting", "Budget", "IRB", "Data Management", "Data Collection", "Development/Editing of documents", "Project Staff Training", "Training", "Technical or Programmatic Assistance", "Evaluation", "Program Development", "Invoicing-Fiscal Report", "Dissemination");

echo "Tasks: 
<select name='task' form='project'>";
for($k=0; $k<19; $k++)
  if($val[$k])
    echo "<option value='{$k}'>{$k}: {$tasks[$k]}</option>";
echo "</select>";
?>

<br><br>

Hours:
<select name ="Hours" form ="project">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option><br><br>
</select>
<select name = "Fractions" form="project">
<option value=".00">.00</option>
<option value=".25">.25</option>
<option value=".50">.50</option>
<option value=".75">.75</option><br><br>
</select>

Topic/Detail:
<select name="Topic" form="project">
<option value="0">New</option>
<option value="1">Renewal</option>
<option value="2">Application</option>
<option value="3">Amendment</option>
<option value="4">Renewal</option>
</select>

Audience:
<select name="Audience" form="project">
<option value="NA">N/A</option>
<option value="Client">Client</option>
<option value="Stakeholder">Stakeholder</option>
<option value="CIES staff">CIES staff</option>
<option value="Participant">Participant</option>
<option value="Other">Other</option>
</select>

Modality:
<select name="Modality" form="project">
<option value="NA">N/A</option>
<option value="F2F">Face to Face</option>
<option value="Phone">Phone</option>
<option value="Email">Email</option>
<option value="Web Base">Web Base</option>
<option value="Other">Other</option>
</select>

<input type="submit" value="Submit">
</form>

</div>
<div id="footer">
</div>
</body>
</HTML>
