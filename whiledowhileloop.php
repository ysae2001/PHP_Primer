<?php 
    $title = "While / do While Loop";
    include 'includes/header.php';?>
    <h1>While / do While Loop</h1>
    <?php 
        $grade = 0;
        // INFINITE LOOP
        // while($grade < 10){
        //   echo '<p>I AM LESS THAN 10!</p>';
        // }
            //Pre-Condition Loop
         while($grade < 10){
            echo '<p>I AM LESS THAN 10!</p>';
            $grade++;
        }
        echo 'EXIT LOOP!';
    ?>

<h1>/Do-While Loop</h1>
    <?php
        //Post-Condition Loop
        $grade = 0;
        do{
            echo '<p>I AM DO WHILE LOOP</p>';
            $grade++;  
        }while($grade < 10);
        echo 'EXIT LOOP!';
    
    ?>

<?php require 'includes/footer.php' ?>