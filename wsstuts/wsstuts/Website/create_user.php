
<?php
    session_start();
    if($_SESSION['login'] != "OK")
    {
    header('Location: login.php');
    exit();
    }
?>

    <html>
	<head>
		<title>Generic - Alpha by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="assets/css/ie8.css" />
        <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>
    <head>
        <title>Create User</title>
    </head>
    <body>
        <h1>Create a new user</h1>
        <p>Please enter details for the new user:</p>
        <form action="insert_user.php" method="post">
            <table>
                <tr>
                    <td align="right">Username: </td>
                    <td><input size="20" type="text" size="20" maxlength="15" name="new_username"></td>
                </tr>
                <tr>
                    <td align="right">Password: </td>
                    <td><input size="20" type="password" size="20" maxlength="15" name="new_password"></td>
                </tr>
                <tr>
                    <td> </td>
                    <td colspan="2" align="left"><input type="submit" value="Create user"></td>
                </tr>
            </table>
        </form>
    </body>
</html>