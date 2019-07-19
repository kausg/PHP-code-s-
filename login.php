<?php
 $user='';
 $pass='';
 $message=false;
 if( isset($_GET['username']))
?>

<html>
    <h1>Log-in Page</h1>
    <body>
        <form method="get">
            <label for="username">Enter user name :</label> <br>
            <input type="text" name="username" id="username" placeholder="Enter username" size="40"> <br>
            <label for="password">Enter password</label> <br>
            <input type="password" name="password" id="password" placeholder="Enter password" size="40"> <br>
            <input type="submit"> <br>
        </form>
        <pre>
            $_GET:
           <?php
            print_r($_GET);
           ?>
        </pre>
    </body>
</html>