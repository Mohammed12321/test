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

</body>
</html>



</br></br></br></br></br></br>
</head>
<body>





<?php
include 'connect.php';
$license_plate=$_POST['license_plate'];

$id=$_POST['id'];
$phone=$_POST['phone'];



if(isset($_POST['delete']))
{
$sql = "DELETE FROM `tbl_dmv` where(license_plate=\"$license_plate\")";
$result = $con->query($sql);
$value="Deleted successfully";
}


if(isset($_POST['insert_edit']))
{

$sql = "INSERT INTO `tbl_dmv`(`id`, `license_plate`) VALUES (\"$id\",\"$license_plate\")";
$result = $con->query($sql);
$value="New license plate added successfully";

}


if(isset($_POST['change']))
{
$phone=$_POST['phone'];
$sql = "UPDATE `tbl_phone_code` SET `phone`=\"$phone\" WHERE (id=\"$id\")";
$result = $con->query($sql);
$value="Telephone number changed successfully";

}


//header ("refresh:1; url=edit_test.php");

?>

<center><?php echo "$value";?></center>

<form action="edit_test.php" method="post">
<input type="hidden" size="40" value="<?php echo"$id"; ?>" name="id" style="width:320px; height: 50px;" ></br>
<input type="hidden" size="40" value="<?php echo"$phone"; ?>" name="phone" style="width:320px; height: 50px;" ></br>

<input type="submit"  value="Return to edit menu" style="width:320px; height: 50px;">
</form>
