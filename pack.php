<?php
session_start();
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "fitx";
			$conn = mysqli_connect($servername, $username, $password,'fitx');

			// Check connection
			if (!$conn) 
			{
			  echo "Sorry Connection not available";
			}
			if(isset($_POST["o"]))
			{
				
			}
			if(isset($_POST["o"]))
			{
					$str=$_POST["o"];
					$select="SELECT * from shopping WHERE Description like '%$str%' OR name like '%$str%'";
					$result=mysqli_query($conn,$select);
					
			}
			else
			{
				$str="";
				$select="SELECT * from shopping";
				$result=mysqli_query($conn,$select);
				
			}
?>
<html>
<head>
<meta charset="UTF-8">
<style>
@import url('https://fonts.googleapis.com/css2?family=Kirang+Haerang&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Satisfy&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Rajdhani&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Bangers&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Secular+One&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Racing+Sans+One&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Iceland&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Langar&display=swap');
.body {
	
}	
.back img {
	position: absolute;
	top: 0px;
	left: 0px;
	width: 100%;
	height: 100%;
	z-index: 1;
	user-select: none;
	mix-blend-mode: screen;
	object-fit: cover;
}
.black img
{
	position: absolute;
	top: 500px;
	left: 0px;
	width: 100%;
	height: 170.2%;
	z-index: 1;
	user-select: none;
	mix-blend-mode: screen;
	object-fit: cover;
}
.card {
  box-shadow: 0 0 8px 0 rgba(0, 0, 0, 1);
  background-color: rgba(255,255,255,1);
  z-index: 1000;
  width: 300px;
  margin: auto;
  position: relative;
  text-align: center;
  font-family: arial;
  padding:5px;
  height:560px;
  top: 800px;
  border-radius: 50px;
}

.price {
  color: grey;
  font-size: 22px;
}
a
{
	text-decoration:none;
	color:white;
}

.b  {
	height:25px;
	width:205px;
  border: none;
  outline: 0;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  font-size: 22px;
  position:absolute;
  top:515px;
  left: 45px;
  border-radius: 30px;
}

.b:hover {
  opacity: 0.7;
}

		.heading{
			font-family: 'Bangers', cursive;
			font-size:50px;
			z-index: 1000;
			color: #ffffff;
			letter-spacing: 1px;
			width: 700px;
			position: relative;
			top: 340px;
		}
.arrow img
{
	position: absolute;
	top: 600px;
	left: 320px;
}

.navbar
{
	position: absolute;
	top: 0px;
	left: -220px;
	width: 50%;
	padding: 30px 0px;
	display: flex;
	z-index: 1000;
	justify-content: right;
	font-family: 'Secular One', sans-serif;

}
.navbar ul
{
	display: flex;
	justify-content: center;
	align-items: center;
}
.navbar ul li
{
	list-style: none;
	margin-left: 20px;
}
.navbar ul li a
{
	text-decoration: none;
	padding: 6px 15px;
	color: #ffffff;
	border-radius: 20px;
}
.navbar ul li a:hover
{
	background: #a19b9b;
	color: #000000;
}
.mem h1
{
	position: absolute;
	top: 800px;
	left: 570px;
	font-family: 'Racing Sans One', cursive;
	z-index: 1000;
	color: #ffffff;
	font-size: 60px;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" />
</head>
<body>
<div class="back">
<img src="back.jpg">
</div>
<div class="black">
<img src="black.jpg">
</div>
<a href="#">
<div class="arrow">
<img  src="arrow.png">
</a>
</div>
<div class="mem">
<h1>Membership</h1>
</div>
<form method="post">
<div class="h">
<h1 class="heading" style="text-align:center">You can’t make yourself in better shape unless you are willing to start</h1>
</div>
<div class="navbar">
<ul>
<li><a href="FitX.html">Home</a></li>
<li><a href="cards.html">Eat Better</a></li>
<li><a href="Coaching.html">Manage Weight</a></li>
<li><a href="items.php">Live Well</a></li>

</ul>
</div>
</form>
<br>
<br>
<br>
<table width="100%" align="center">
<?php

while($row=mysqli_fetch_array($result))
{
?>
<tr>
<td><div class="card">
<br>
  <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" style="width:250px;height:250px;border-radius:8px;">
  <h1 style="font-family: 'Permanent Marker', cursive;"><?php echo $row['name']?></h1>

  <p class="price">Rs.<?php echo $row['price']?></p>
  <div style="height:300px;">
<p style="font-family: 'Langar', cursive;"><?php echo $row['discount']?></p>
  <p style="font-family: 'Langar', cursive;"><?php echo $row['line2']?></p>
  <p style="font-family: 'Langar', cursive;"><?php echo $row['line3']?></p>
  </div>
	<a style="font-family: 'Secular One', sans-serif;"href ="reg.php?id=<?php  echo $row['id']; ?> "><div class ="b">Buy Now</div></a>
	
</div>
<br>
</td>
<?php 
if($row=mysqli_fetch_array($result))
{
?>
<td><div class="card">
<br>
  <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" style="width:250px;height:250px;border-radius:8px;">
  <h1 style="font-family: 'Permanent Marker', cursive;"><?php echo $row['name']?></h1>

  <p class="price">Rs.<?php echo $row['price']?></p>
  <div style="height:300px;">
 <p style="font-family: 'Langar', cursive;"><?php echo $row['discount']?></p>
  <p style="font-family: 'Langar', cursive;"><?php echo $row['line2']?></p>
  <p style="font-family: 'Langar', cursive;"><?php echo $row['line3']?></p>
  </div>
	<a style="font-family: 'Secular One', sans-serif;"href ="reg.php?id=<?php  echo $row['id']; ?> "><div class ="b">Buy Now</div></a>
  
</div><br></td>
<?php 
}
else
{ break;}

if($row=mysqli_fetch_array($result))
{
?>
<td><div class="card">
<br>
  <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" style="width:250px;height:250px;border-radius:8px;">
  <h1 style="font-family: 'Permanent Marker', cursive;"><?php echo $row['name']?></h1>
  <p class="price">Rs.<?php echo $row['price']?></p>
  <div style="height:300px;">
  <p style="font-family: 'Langar', cursive;"><?php echo $row['discount']?></p>
  <p style="font-family: 'Langar', cursive;"><?php echo $row['line2']?></p>
  <p style="font-family: 'Langar', cursive;"><?php echo $row['line3']?></p>
  </div>
	<a style="font-family: 'Secular One', sans-serif;"href ="reg.php?id=<?php  echo $row['id']; ?> "><div class ="b">Buy Now</div></a>
</div><br></td>
<?php 
}
else
{ break;}

if($row=mysqli_fetch_array($result))
{
?>
<td><div class="card">
<br>
 <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" style="width:250px;height:250px;border-radius:8px;">
  <h1 style="font-family: 'Permanent Marker', cursive;"><?php echo $row['name']?></h1>

  <p class="price">Rs.<?php echo $row['price']?></p>
  <div style="height:300px;">
 <p style="font-family: 'Langar', cursive;"><?php echo $row['discount']?></p>
  <p style="font-family: 'Langar', cursive;"><?php echo $row['line2']?></p>
  <p style="font-family: 'Langar', cursive;"><?php echo $row['line3']?></p>
  </div>
	<a style="font-family: 'Rajdhani';"href ="reg.php?id=<?php  echo $row['id']; ?> "><div class ="b">Buy Now</div></a>
</div><br></td>
</tr>
<?php
}
}
?>
</table>
</body>
</html>
