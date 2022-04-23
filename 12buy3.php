<html>
  <head>
    <title>Buy 3</title>
<?php
require("lib/phpfunctions.php");

session_start();
if (!isset($_SESSION['username']))
    header("Location: 12phpsite.php");
?>
</head>
  <body>
<?php readfile('lib/header.html'); ?>
<p>this is the buy 3 page</p>
<?php readfile('lib/footer.html'); ?>
  </body>
</html>
