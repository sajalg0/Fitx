<html>
<head>
<meta charset="UTF-8">
<script>
	function validate()
	{
		if(document.myForm.t1.value=="")
		{
			document.myForm.t1.focus();
			return false;
		}
		if(document.myForm.t2.value=="")
			{
			document.myForm.t2.focus();
			return false;
		}
		if(document.myForm.t3.value=="")
			{
			document.myForm.t3.focus();
			return false;
		}
		if(document.myForm.t4.value=="")
			{
			document.myForm.t4.focus();
			return false;
		}
		if(document.myForm.t5.value=="")
			{
			document.myForm.t5.focus();
			return false;
		}
		if(document.myForm.t6.value=="")
			{
			document.myForm.t6.focus();
			return false;
		}
		
		
		return true;
	}
</script>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Kalam:wght@400&display=swap');
	.btn{
	position:relative;
	color:black;
	font-family: 'Kalam', cursive;
	font-size:20px;
	left:150px;
	border-radius:0px;
	padding: 1px 70px;
	background-color:#2a3542;
	border:none;
	color:white;
	cursor:pointer;
	}
	.btn:hover{
	background-color:#2E4053 ;
	}
	.l
	{
		color:black;
		font-family: 'Kalam', cursive;
		font-size:20px;
		
	}
	.i{
	position:absolute;
	color:black;
	font-family: 'Kalam', cursive;
	border-radius:10px;
	left:750px;
	outline:none;
	height:35px;
	border:1.9px solid;
	
	}
	div{
	padding:20px;
	margin-left:380px;
	margin-top:100px;
	box-shadow: 0 0 8px 0 rgba(0, 0, 0, 1);
	border-radius:8px;
	width:40%;
	height:80%;
	}
	.file{
	position:relative;
	color:black;
	font-family: 'Kalam', cursive;
	font-size:20px;
	left:120px;
	}
</style>
</head>
<body>
<div>
<form action="add.php" method="post" enctype="multipart/form-data" onsubmit="return(validate())" name="myForm"><br>
<label class="l">Item Id:</label>
<input type="text" name="t1" class="i"><br><br><br>
<label class="l">Item Name:</label>
<input type="text" name="t2" class="i"><br><br><br>
<label class="l">Item Description:</label>
<input type="text" name="t3" class="i" ><br><br><br>
<label class="l">Item Description(line2):</label>
<input type="text" name="t5" class="i" ><br><br><br>
<label class="l">Item Description(line3):</label>
<input type="text" name="t6" class="i" ><br><br><br>
<label class="l">Item Price:</label>
<input type="text" name="t4" class="i"><br><br><br>
<input type="file" name="image"  class="file"><br><br><br>
<input type="submit" name="ADD" value="ADD" class="btn">
</form>
</div>
</body>
</html>
<?php
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
			if(isset($_POST['ADD']))
			{
				$id=$_POST['t1'];
				$pname=$_POST['t2'];
				$pdes=$_POST['t3'];
				$pdes1=$_POST['t5'];
				$pdes2=$_POST['t6'];
				$pp=$_POST['t4'];
				
				if(empty($_FILES['image']['tmp_name']))
				{
					echo "<script>
					alert('Please insert image');
					</script>";
				}
				else
				{
					$file=addslashes(file_get_contents($_FILES['image']['tmp_name']));
					$sql = "INSERT INTO shopping1(id,name,image,price,discount,line2,line3) VALUES ($id,'$pname','$file',$pp,'$pdes','$pdes1','$pdes2')";

					$result = mysqli_query($conn,$sql);

					if($result)
					{
						
						echo "<script>
						alert('Item is added sucessfully');
						</script>";
					}
					else
					{
						echo "<script>
						alert('sorry');
						</script>";
					}
				}
			}
			
?>