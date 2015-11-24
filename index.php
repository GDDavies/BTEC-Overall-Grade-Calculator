<html>
<head>
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","getunit.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>

<form>
<select name="users" onchange="showUser(this.value)">
    <option value="">Select a Unit:</option>
    <option value="1">Animal Care</option>
    <option value="2">Application of Science</option>
    <option value="3">Art and Design</option>
    <option value="4">Business</option>
    <option value="5">CPLD</option>
    <option value="6">Construction and the Built Environment</option>
    <option value="7">Creative Digital Media Production</option>
    <option value="8">Engineering</option>
    <option value="9">Health and Social Care</option>
    <option value="10">Hospitality</option>
    <option value="11">Information and Creative Technology</option>
    <option value="12">Music</option>
    <option value="13">Performing Arts</option>
    <option value="14">Principles of Applied Science</option>
    <option value="15">Public Services</option>
    <option value="16">Sport</option>
    <option value="17">Travel and Tourism</option>
  </select>
</form>
<br>
<div id="txtHint"><b>Person info will be listed here...</b></div>

</body>
</html>