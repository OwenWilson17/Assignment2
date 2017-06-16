<?php

$user = "";
$pass = "";   
$validate = false;   


if ($_POST)
    
{
    $user = $_POST['username'];
    $pass = $_POST['password'];
}

session_start();

if ($user!=""&&$pass!="")
    
{

if($user=="username"&&$pass=="password") $validated = true;
if($validated)
    
{
    $_SESSION['login'] = "OK";
    $_SESSION['username'] = $user;
    $_SESSION['password'] = $pass;
    header('Location: protected.php');   
}
    else
        
    {
        $SESSION_['login'] = "";
        echo "Invalid username or password.";
    }
    
}
    
else $_SESSION['login'] = "";

?>

<html>

<head>
    
<title>Login</title>
    
</head>    

    <body>

        <h1>Login Page</h1>
        
        <p>Please enter your (unsecure) username and password</p>
        
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
        
    </body>

</html>