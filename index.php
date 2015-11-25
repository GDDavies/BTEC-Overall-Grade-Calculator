<html>
<head>
    <meta charset="utf-8">
		<title>BTEC (NQF) Overall Grade Calculator</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700|Questrial" rel="stylesheet" />
        <link href="default.css" rel="stylesheet" type="text/css" media="all" />
        <link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

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
    
<form>
<div class="wrapper">
<div id="welcome" class="container">
<select name="users" onchange="showUser(this.value)">
    <option value="">Select a Unit:</option>
    <option value="1">Animal Care</option>
    <option value="2">Application of Science</option>
    <option value="3">Art and Design</option>
    <option value="4">Business</option>
    <option value="5">Construction and the Built Environment</option>
    <option value="6">CPLD</option>
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
    </div>
</form>
<br>
    <div id="txtHint"><b></b></div></div>
    <div id="copyright">
	<p>Copyright (c) 2014 Pearson. All rights reserved. <a href="http://.com/">Jage's Journey</a> | Design by Jage.</p>
	<ul class="contact">
		<li><a href="#" class="icon icon-twitter"><span>Twitter</span></a></li>
		<li><a href="#" class="icon icon-facebook"><span></span></a></li>
		<li><a href="http://www.edexcel.com" class="icon icon-pqswebsite"><span></span></a></li>

	</ul>
</div>
    
</body>
</html>