<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="index.html">Home</a>
  <a href="phone.php">Edit</a>

</div>

<div id="main">

  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>

</body>
</html>








<!DOCTYPE html>
<html>
<head>

<script>
function validateForm() {
 var x1 = document.forms["myForm"]["code"].value;
var x2 = document.forms["myForm"]["sent_code"].value;


if (x1==x2)
{}
else{

        alert("Wrong code please try again");
        document.getElementById("code_id").style.color = "red";
        return false;

}
}
</script>
</head>
<body>



</body>
</html>





<?php

include 'connect.php';

$phone=$_POST['phone'];

$phone_search=$phone;


$code=(rand(1000,9999));

	$message=$_POST['message'];
	$msg = "Your Code is $code";


//Metro PCS
$phone="$phone@mymetropcs.com";
mail("$phone","SMS Message",$msg);


//T-Mobile
$phone="$phone@tmomail.net";
mail("$phone","SMS Message",$msg);

//Verizon Wireless
$phone="$phone@vtext.com";
mail("$phone","SMS Message",$msg);

//AT&T
$phone="$phone@txt.att.net";
mail("$phone","SMS Message",$msg);

//Sprint PCS
$phone="$phone@messaging.sprintpcs.com";
mail("$phone","SMS Message",$msg);

//Nextel
$phone="$phone@messaging.nextel.com";
mail("$phone","SMS Message",$msg);

//Cricket
$phone="$phone@mms.cricketwireless.net";
mail("$phone","SMS Message",$msg);

//US Cellular
$phone="$phone@email.uscc.net";
mail("$phone","SMS Message",$msg);

//Cingular (GSM)
$phone="$phone@cingularme.com";
mail("$phone","SMS Message",$msg);

//Cingular (TDMA)
$phone="$phone@mmode.com";
mail("$phone","SMS Message",$msg);




?>


<html>
<head>



<!DOCTYPE html>
<html>
<title>Enter Code</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<style>
body  {
    background-image: url("Images/395E5427-542A-42B0-93E0-66C7E17EDCE0.jpeg");
    background-size: cover;
}
</style>

<center>

<h3>
</br></br></br>
<form action="edit_test.php" name="myForm"  onsubmit="return validateForm()" method="post">

<input type="text" size="40" placeholder ="Enter the sent code" id="code_id" name="code" style="width:250px; height: 40px;" required></br>
<input type="hidden" size="40" value ="<?php echo $code; ?>" name="sent_code" style="width:320px; height: 50px;" required>
<input type="hidden" size="40"   value= "<?php echo "$phone_search"; ?>"   name="phone" style="width:320px; height: 50px;" >
<input type="hidden" size="40"   value= "<?php echo "$id"; ?>" id="demo" name="id" style="width:320px; height: 50px;" ></br>

<input type="submit" value="Insert code"  name="insert" style="width:250px; height: 40px;">

</form>
</h3>
</center>
</html>
