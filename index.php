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











<html>
<head>



<!DOCTYPE html>
<html>
<title>Smart Contacts</title>
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

	<?php

	include 'connect.php';

	$license_plate=$_POST['license_plate'];



$sql = "SELECT * FROM `tbl_dmv` WHERE license_plate like \"$license_plate\"    ";


$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {



    ?>
    <h3>
SMS Sent successfully

     </h3>

    <?php
	$mail=$row["email"];
	$id=$row["id"];


	$message=$_POST['message'];
	$msg = "Your car with the license plate number $license_plate $message";


}}




$sql = "SELECT * FROM `tbl_phone_code` WHERE id like \"$id\"    ";


$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

 $phone_no=$row["phone"];


//Metro PCS
$phone_no="$phone_no@mymetropcs.com";
mail("$phone_no","Alert Message",$msg);


//T-Mobile
$phone_no="$phone_no@tmomail.net";
mail("$phone_no","Alert Message",$msg);

//Verizon Wireless
$phone_no="$phone_no@vtext.com";
mail("$phone_no","Alert Message",$msg);

//AT&T
$phone_no="$phone_no@txt.att.net";
mail("$phone_no","Alert Message",$msg);

//Sprint PCS
$phone_no="$phone_no@messaging.sprintpcs.com";
mail("$phone_no","Alert Message",$msg);

//Nextel
$phone_no="$phone_no@messaging.nextel.com";
mail("$phone_no","Alert Message",$msg);

//Cricket
$phone_no="$phone_no@mms.cricketwireless.net";
mail("$phone_no","Alert Message",$msg);

//US Cellular
$phone_no="$phone_no@email.uscc.net";
mail("$phone_no","Alert Message",$msg);

//Cingular (GSM)
$phone_no="$phone_no@cingularme.com";
mail("$phone_no","Alert Message",$msg);

//Cingular (TDMA)
$phone_no="$phone_no@mmode.com";
mail("$phone_no","Alert Message",$msg);



// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("$mail","Alert Message",$msg);

    }
} else {
    echo "0 results";
?>

<h3>
Sorry, this license plate is not found
</h3>

<?php
}

?>



<h3>
<form action="index.html" method="post">
<input type="submit"  value="Return to Main Screen" >
</form>
</h3>
</center>
</html>
