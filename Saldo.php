<?php
include_once("comprobar.php");
?>
 <div class="container" style="margin-left:35%;">

      <div class="starter-template">
        <h1>CatBank Balance page</h1>
        <p class="lead"><?php echo "".$_SESSION['NAME']."  ".$_SESSION['LNAME']." Tienes $:".$_SESSION['BALANCE'];?>  </p>
        <p class="lead" style="margin-left:5%"><?php echo " " . date("d/m/Y"). " ".date("h:i:sa") . "<br>"; ?></p>
      </div>
       <img src="../assets/fortune_cat.png" class="img-circle" alt="gato_fortuna" width="304" height="236">



    </div>
