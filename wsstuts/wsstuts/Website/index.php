<?php
    $browser = $_SERVER['HTTP_USER_AGENT'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $conn = @mysql_connect ( "198.91.81.8", "owenwil2_stats", "webstats1") or die           (mysql_error());
    $rs = @mysql_select_db ( "owenwil2_webstat", $conn ) or die (mysql_error());
    $sql = "INSERT INTO stats(ip,browser,ondate)
    VALUES('$ip', '$browser', now())";
    $rs = mysql_query( $sql, $conn ) or die (mysql_error());
?>


<html>

<head>

<title>Hello World!</title>

</head>

<body>

<h1>Hello World!</h1>

<p>This is the home page of the "Hello World!" web

site.</p>

</body>

</html>

