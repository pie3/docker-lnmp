<?php 

	phpinfo();


	echo "<br> <b>mysql connect test result:</b> <br>";




	$servername = "mysql5.7";
	$username = "root";
	$password = "mysql1810";
	$redisHost = "redis5.0.10"; // or 172.18.0.5 为本地 docker redis的 ip，可以进入docker redis后，查看 /etc/hosts 得知
	 
	try {
	    $conn = new PDO("mysql:host=$servername;", $username, $password);
	    echo "Mysql 连接成功<br>";


	    $redis = new Redis();
	    $redis->connect($redisHost, '6379');
	    $redis->set('name', 'Test');

	    echo '测试获取redis name 值：' . $redis->get('name');
	}
	catch(PDOException $e)
	{
	    echo $e->getMessage();
	}
?>


