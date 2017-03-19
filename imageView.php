<!DOCTYPE html>

<html>
	<head>
		
		<title>
		My upload
		</title>
	</head>
	
	<body>
	
	
	<?php
	include("connection.php");
	
	$sql= "select * from image_table order by id desc";
	$result=mysqli_query($conn, $sql);
	while($row=mysqli_fetch_array($result))
	{
	?>
	<br>
		<img src="uploads/<?php echo $row['name']?>" width="20%" height="auto">
	<?php
	}

	?>

</body>

</html>