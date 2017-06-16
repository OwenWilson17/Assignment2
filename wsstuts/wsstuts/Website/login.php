<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Log In</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/ie8.css" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="">
					<h1><a href="index.html">Web Server Scripting</a> by Owen Wilson</h1>
					<nav id="nav">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li>
								<a href="#" class="icon fa-angle-down">Layouts</a>
								<ul>
									<li><a href="screen.html">P2 - System Checker</a></li>
									<li><a href="contact.html">P3 - Uploader</a></li>
									<li><a href="login.php">P4 - Login</a></li>
                                    <li><a href="errors.html">M4 - Error Handling</a></li>
									<li>
										<a href="#">Submenu</a>
										<ul>
											<li><a href="#">Option One</a></li>
											<li><a href="#">Option Two</a></li>
											<li><a href="#">Option Three</a></li>
											<li><a href="#">Option Four</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="login.php" class="button">Sign Up</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<section id="main" class="container">
					<div class="box">
						<span class="image featured"><img src="images/pic01.jpg" alt="" /></span>
					
                        
              
                        
                        
<?php
$user ="";
$pass ="";
$validated = false;

  $conn = @mysql_connect ("198.91.81.8", "owenwil2_admin", "multiuser1")
            or die ("Sorry - unable to connect to MySQL database.");
        
            $rs = @mysql_select_db ("owenwil2_admin", $conn) or die ("error");

if ($_POST)
{
    $user =$_POST['username'];
    $pass =$_POST['password'];
}

session_start();
if($user!=""&&$pass!="")
{
    if($user=="admin"&&$pass=="letmein") $validated =true;
    if($validated)
    {
        $_SESSION['login'] = "OK";
        $_SESSION['username'] = $user;
        $_SESSION['password'] = $pass;
        header('Location: protected.php');
    }
    else
    {
        $_SESSION['login'] ="";
        echo "Invalid Username or Password.";
    }
}
else $_SESSION['login'] = ""; 
?>

            <h1>Login Page</h1>
            <p>Please enter your details!</p>
                
                <form action="login.php" method="post">
                    <table>
                        <tr>
                            <td align="right">Username: </td>
                            <td><input type="text" size="20" maxlength="15" name="username"></td>
                        </tr>
                        <tr>
                            <td align="right">Password: </td>
                            <td><input type="password" size="20" maxlength="15" name="password"></td>
                        </tr>
                        <tr>
                            <td> </td>
                            <td colspan="2" align="left"><input type="submit" value="Login"></td>
                        </tr>
                    </table>
                </form>
            
            
					</div>
				</section>
			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>