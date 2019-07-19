<html>
    <h1>Sign Up</h1>
    <body>
        <form method="get">
            <label for="username">Enter a user name :</label> <br>
            <input type="text" name="username" id="username" placeholder="Enter username" size="40"> <br>
            <label for="password">Enter password</label> <br>
            <input type="password" name="password" id="password" placeholder="Enter password" size="40"> <br>
            <label for="check">Please confirm your password</label> <br>
            <input type="password" name="check" id="check" placeholder="Re-enter your password" size="40"> <br>
            <?php if($_GET['password'] !== $_GET['check'] ){ echo("Passwords dont match");} ?> <br>
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