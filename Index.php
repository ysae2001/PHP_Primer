<?php 
     $title = "Index";
    include 'includes/header.php';?>
  <!-- basic HTML -->
      <h1>Hello World php test</h1>

      <?php 
      //Printing to HTML using echo
      echo ' hello php!';
      //you can echo html tags
      echo '<br/>';
      echo 'second line';
      echo '<br/>';
      
      //declare variable
      //variables need a '$' they are not strongly typed
        $name = 'Oliver Easy';
        $age =23;
        //echo variable - call it
        echo$name;
        
        echo '<h1>My Name is:'  .$name. '</h1>';
        echo '<h1>My Age is:'  .$age. '</h1>';
        //double qoutes negates the need for the break in conde and .
        echo "<h1>My Name is: $name </h1>";
      ?>
       <button type="button" class="btn btn-dark">CLICK ME!</button>
       
<?php require 'includes/footer.php' ?>