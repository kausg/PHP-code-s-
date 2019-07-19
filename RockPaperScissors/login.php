<?php
if ( isset($_POST['cancel'] ) ) {
    // Redirect the browser to game.php
    header("Location: welcome.php");
    return;
}
$salt='x1y3z5ab4t';
$stored_hash="287e14577f370ed6e88d05ae3b323d9c";

$message=false;

if(isset($_POST['who']) && isset($_POST['pass'])){
    if ( strlen($_POST['who']) < 1 || strlen($_POST['pass']) < 1 ) {
        $message = "User name and password are required";
    }
    else{
        $check=hash('md5',$salt.$_POST['pass']);
        if( $check == $stored_hash){
            //Redirecting to game.php
            header("Location: game.php?name=".urlencode($_POST['who']));
            return;
        }
        else{
            $message="incorrect password";
        }
    }
}
?>
<html>
<h1>Please Log In</h1>
<body>
<?php
if($message !==false){
    echo('<p style="color: red;">'.htmlentities($message)."</p>\n");
}
?>
<form method="POST">
 <label for="user">User Name </label>
 <input type="text" name="who" id="user" size="40"> <br>
 <label for="password">Password &nbsp;&nbsp;</label> 
 <input type="password" name="pass" id="password" size="40"> <br>
 <input type="submit" value="Log In">
 <input type="submit" name="cancel" value="Cancel">
</form>
<!-- Password is Nostradamus -->
</body>
</html>


