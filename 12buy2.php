<html>
  <head>
    <title>Buy 2</title>
<?php
require("lib/phpfunctions.php");

session_start();
if (!isset($_SESSION['username']))
    header("Location: 12phpsite.php");
?>
</head>
  <body>
<?php readfile('lib/header.html'); ?>
<p>this is the second item site<p>
<?php readfile('lib/footer.html'); ?>


  </body>
</html>
