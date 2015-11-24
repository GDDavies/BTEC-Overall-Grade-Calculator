<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
		<title></title>
			<meta name="keywords" content="" />
			<meta name="description" content="" />
				<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700|Questrial" rel="stylesheet" />
				<link href="default.css" rel="stylesheet" type="text/css" media="all" />
				<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
            <script src="http://malsup.github.com/jquery.form.js"></script> 
	</head>
	
<body>    
    
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
        	<!--<span class="icon icon-cog"></span>-->
			<h1><a href="#">BTEC (NQF) Firsts<br>Overall Grade Calculator</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li class="active"><a href="#" accesskey="1" title="">Calculator</a></li>
				<li><a href="#" accesskey="2" title="">Guidance</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="wrapper">
	<div id="welcome" class="container">
   	<form method="post" class="sectors" name="sectorSelect">
		<select name="sector" id="sectorSelector">
		<option value="">Please choose a sector</option>
        <option value="Animal Care">Animal Care</option>
		<option value="Application of Science">Application of Science</option>
        <option value="Art and Design">Art and Design</option>
		<option value="Business">Business</option>
		<option value="CPLD">CPLD</option>
        <option value="Construction and the Built Environment">Construction and the Built Environment</option>
        <option value="Creative Digital Media Production">Creative Digital Media Production</option>
        <option value="Engineering">Engineering</option>
        <option value="Health and Social Care">Health and Social Care</option>
        <option value="Hospitality">Hospitality</option>
        <option value="Information and Creative Technology">Information and Creative Technology</option>
        <option value="Music">Music</option>
        <option value="Performing Arts">Performing Arts</option>
        <option value="Principles of Applied Science">Principles of Applied Science</option>
        <option value="Public Services">Public Services</option>
        <option value="Sport">Sport</option>
        <option value="Travel and Tourism">Travel and Tourism</option>
		</select>
        <input type="submit">
        </form>
        
<?php 
$selection= $_POST['sector'];

mysql_connect("localhost", "root", "root") or
    die("Could not connect: " . mysql_error());
mysql_select_db("MandatoryUnitDataAward");

$result = mysql_query("SELECT id, sector, unit_name, GLH FROM mandatory_unit_data_award WHERE sector = '$selection'");
?>
<div id="customers" class="alt">
    <br>
    <h3>Mandatory Units</h3>
    <br>
        <table class="alt">
                <thead>
                <tr>
                <th>ID</th>
                <th>Sector </th>
                <th>Unit Name </th>
                <th>GLH </th>
                </tr>
                </thead>
<?php
while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
    echo'<tbody>';
                echo'<tr>'; 
                echo'<td style="width:50px">'. $row[0].'</td>';
                echo'<td style="width:150px">'. $row[1].'</td>';
                echo'<td style="width:500px">'. $row[2].'</td>';
                echo'<td style="width:35px">'. $row[3].'</td>';
                echo'<tr>';
                echo'</tbody>';
}        
    ?>
         </table>
        </div>
<?php
$selection= $_POST['sector'];

mysql_connect("localhost", "root", "root") or
    die("Could not connect: " . mysql_error());
mysql_select_db("AllUnitData");

$result = mysql_query("SELECT id, sector, unit_name, GLH FROM optional_units_award WHERE sector = '$selection'");
?>
<div id="customers" class="alt">
    <br>
    <h3>Optional Units</h3>
    <br>
        <table class="alt">
                <thead>
                <tr>
                <th>ID</th>
                <th>Sector </th>
                <th>Unit Name </th>
                <th>GLH </th>
                <th>Select</th>
                </tr>
                </thead>
<?php
while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
    echo'<tbody>';
                echo'<tr>'; 
                echo'<td style="width:50px">'. $row[0].'</td>';
                echo'<td style="width:150px">'. $row[1].'</td>';
                echo'<td style="width:500px">'. $row[2].'</td>';
                echo'<td style="width:35px">'. $row[3].'</td>';
                echo'<td class="center"><input type="checkbox" name="includeUnit"></td>';
                echo'<tr>';
                echo'</tbody>';
}

    if(isset($_POST['includeUnit'])){
    echo'<h3>Checked</h3>';
    }else{
    echo'<h3>Unchecked</h3>';
    }
    ?>


<?php

mysql_free_result($result);

?>
    </table>    
	</div>
    </div>
    </div>
    
    <script> 
        $(".sectors").change(function () {      //.sectors is class type of html
     
        var value = document.getElementById("sectors");
        var sector = document.sectorSelect.sectorSelector.value;        
        
        
        
        });    
    </script>
    
<div id="copyright">
	<p>Copyright (c) 2014 Pearson. All rights reserved. <a href="http://fotogrph.com/">Fotogrph</a> | Design by JG<a href="http://www.google.com" rel="nofollow">Google</a>.</p>
	<ul class="contact">
		<li><a href="#" class="icon icon-twitter"><span>Twitter</span></a></li>
		<li><a href="#" class="icon icon-facebook"><span></span></a></li>
		<li><a href="http://www.edexcel.com" class="icon icon-pqswebsite"><span></span></a></li>

	</ul>
</div>
</body>


</html>