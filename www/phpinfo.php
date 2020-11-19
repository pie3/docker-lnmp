<?php 

	phpinfo();


	echo "<br> <b>mysql connect test result:</b> <br>";

	$servername = "mysql5.7";
	$username = "root";
	$password = "mysql1810";
	 
	try {
	    $conn = new PDO("mysql:host=$servername;", $username, $password);
	    echo "连接成功<br>"; 
	}
	catch(PDOException $e)
	{
	    echo $e->getMessage();
	}
?>


