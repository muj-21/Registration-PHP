<html>
<body>
<?php

$conn = new mysqli('localhost', 'root', '');

if ($conn->connect_error){
	die("Connection failed:" .$conn->connect_error);
	
}
echo "Database Connected Successfully" ;

mysqli_close($conn);
?>
</body>
</html>