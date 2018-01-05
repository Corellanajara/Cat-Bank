<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php include("comprobar.php"); ?>
  </head>
  <body>
    <form class="" action="gd.php" method="get">
      <input type="hidden" name="id" value=<?php echo $_SESSION['IDCARD']?> >

      <input type="submit" value="Submit">


    </form>
  </body>
</html>
