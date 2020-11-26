<?php 

	phpinfo();


	echo "<br> <b>mysql connect test result:</b> <br>";

	$servername = "mysql5.7";
	$username = "root";
	$password = "mysql1810";
	 
	try {
	    $conn = new PDO("mysql:host=$servername;", $username, $password);
	    echo "Mysql连接成功<br>"; 

	    $redis = new redis();
	    $redis->connect('127.0.0.1', '6379');
	    $redis->set('name', 'Test');

	    echo '测试获取redis name 值：' . $redis->get('name');
	}
	catch(PDOException $e)
	{
	    echo $e->getMessage();
	}
?>


