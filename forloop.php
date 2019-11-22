<?php 
    $title = "For Loop";
    include 'includes/header.php';?>
      <h1>For Loop</h1>
    <?php 
       // For Loop
        for($count =0; $count <10; $count++){
            echo '<p>HELLO WORLD</p>';
        }
        //count of the loops
        for($count = 0; $count < 10; $count++){
            echo "<p>The Count is: $count</p>";
        }
    
    ?>

<?php require 'includes/footer.php' ?>