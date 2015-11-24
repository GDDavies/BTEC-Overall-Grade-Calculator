<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
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

echo "<table>
<tr>
<th>Sector</th>
<th>Unit Name</th>
<th>GLH</th>
<th>Assessment Type</th>
<th>Unit Type</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['sector'] . "</td>";
    echo "<td>" . $row['unit_name'] . "</td>";
    echo "<td>" . $row['GLH'] . "</td>";
    echo "<td>" . $row['assessment_type'] . "</td>";
    echo "<td>" . $row['unit_type'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
    
<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','root');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"AllUnitData");
$sql="SELECT * FROM optional_units_award WHERE sector_id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Sector</th>
<th>Unit Name</th>
<th>GLH</th>
<th>Assessment Type</th>
<th>Unit Type</th>
<th>Select</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['sector'] . "</td>";
    echo "<td>" . $row['unit_name'] . "</td>";
    echo "<td>" . $row['GLH'] . "</td>";
    echo "<td>" . $row['assessment_type'] . "</td>";
    echo "<td>" . $row['unit_type'] . "</td>";
    echo'<td class="center"><input type="checkbox" name="includeUnit"></td>';
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>