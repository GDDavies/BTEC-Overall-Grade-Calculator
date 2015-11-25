<!DOCTYPE html>
<html>
<head>
<head>
 
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
            <script src="http://malsup.github.com/jquery.form.js"></script> 
	</head>
</head>
<body>
    
    

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','root');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"AllUnitData");
$sql="SELECT * FROM mandatory_units_award WHERE sector_id = '".$q."'";
$result = mysqli_query($con,$sql);

?>
    
<div id="customers" class="alt">
    <br>
    <h3>Mandatory Units</h3>

<table class="alt">
    <thead>
<tr>
<th>Sector</th>
<th>Unit Name</th>
<th>GLH</th>
<th>Assessment</th>
<th>Unit Type</th>
</tr>
</thead>
    
<?php
while($row = mysqli_fetch_array($result)) {
    echo '<tbody>';
    echo '<tr>';
    echo '<td style="width:150px">' . $row['sector'] . '</td>';
    echo '<td style="width:500px">' . $row['unit_name'] . '</td>';
    echo '<td style="width:35px">' . $row['GLH'] . '</td>';
    echo '<td style="width:50px">' . $row['assessment_type'] . '</td>';
    echo '<td style="width:35px">' . $row['unit_type'] . '</td>';
    echo '</tr>';
    echo '</tbody>';
}
echo "</table>";
mysqli_close($con);
?>
    </table>
    </div>
<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','root');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"AllUnitData");
$sql="SELECT * FROM optional_units_award WHERE sector_id = '".$q."'";
$result = mysqli_query($con,$sql);
?>
<div id="customers" class="alt">
    <br>
    <h3>Optional Units</h3>

    <table class="alt">
    <thead
    <tr>
    <th>Sector</th>
    <th>Unit Name</th>
    <th>GLH</th>
    <th>Assessment</th>
    <th>Unit Type</th>
    <th>Select</th>
    </tr>
    </thead>

    <?php
while($row = mysqli_fetch_array($result)) {
    echo '<tbody>';
    echo '<tr>';
    echo '<td style="width:150px">' . $row['sector'] . '</td>';
    echo '<td style="width:500px">' . $row['unit_name'] . '</td>';
    echo '<td style="width:35px">' . $row['GLH'] . '</td>';
    echo '<td style="width:50px">' . $row['assessment_type'] . '</td>';
    echo '<td style="width:35px">' . $row['unit_type'] . '</td>';
    echo '<td class="center"><input type="checkbox" name="includeUnit"></td>';
    echo '<tr>';
    echo '</tbody>';
}
echo "</table>";
mysqli_close($con);
?>
    
    </table>


    
</body>
</html>