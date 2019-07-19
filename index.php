<?php
 $oldguess= '';
 $message=false;
 if( isset($_POST['guess'])) {
     $oldguess = $_POST['guess']+0;
     if( $oldguess == 43){
         $message="great!";
     }
     else if($oldguess < 42){
         $message="low";
     }
     else{
         $message="high";
     }
 }

?>

<html>
    <head>
        <title>Guessing Game</title>
    </head>
    <body>
        <p>Guessing Game</p>
        <?php
        if($message !==false){
            echo("<p>$message</p>\n");
        }
        ?>
        <form method="post">
            <p>
                <label for="guess">Enter a guess</label>
                <input type="text" name="guess" id="guess" size="40"
                value="<?= htmlentities($oldguess) ?>"/>
            </p>
            <input type="submit">
        </form>
    </body>
</html>