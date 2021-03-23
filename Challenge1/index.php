<!DOCTYPE HTML>
<?php
  require("flag.php");
  if (isset($_GET['source'])) {
    highlight_file(__FILE__);
    die();
  }
  if (isset($_GET['anime_is_bae'])) {
    $your_entered_string = $_GET['anime_is_bae'];
    $intermediate_string = 'hellotherehooman';
    $final_string = preg_replace(
	    	"/$intermediate_string/", '', $your_entered_string);
    if ($final_string === $intermediate_string) {
      super_secret_function();
    }
  }
?>

<html>
  <head>
    <title>Challenge 1</title>
  </head>
  <body>
    <h2> Source code says it all</h2>
   <h2>HINT : see how preg_replace works</h2> 
    <p>Try to reach <code>super_secret_function()</code></p>
    <a target="_blank" href="?source">See the source code</a>

  </body>
</html>