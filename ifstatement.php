<?php 
    $title = "IF/Else Statements";
    include 'includes/header.php';?>
   <h1>PHP Primer - IF/Else Statements</h1>
    <?php
    //An If Statement that will carry out an action based on the the value of the variable.

    echo '<h2>If Statement</h2>';

    $grade =51;
    // Main operators used with if statement ===, ==, >, <, <=, >=
    if($grade >= 50){

        echo '<h3 style="color: green">YOU HAVE PASSED!!!</h3>';
    }
    else{
        echo '<h3 style="color: red">YOU HAVE FAILED!!!</h3>';
    }
    $grade ='A';
    //iF-Else
    if($grade == 'A'){
       echo '<h2 style="color: green">YOU ARE A SUPERSTAR!</h2>';
    }
    elseif ($grade == 'B') {
        // Second condition
        echo '<h2 style="color: blue">YOU DID WELL!</h2>';
    }
    else{
        echo '<h2 style="color: red">YOU HAVE FAILED!</h2>';
    }

    ?>
<?php require 'includes/footer.php' ?>