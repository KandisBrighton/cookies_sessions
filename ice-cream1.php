<?php   // Kandis Brighton Sessions Assn 9b  2/29/16 
  if (isset($_POST['btnSubmit'])) {
	$name = $_POST['name'];
	$flavor = $_POST['flavor'];
	session_start();  
	$_SESSION['name'] = $name;  
	$_SESSION['flavor'] = $flavor;
	echo "<a href='ice-cream2.php'>Click to see the values that were stored in Sessions.</a>";
	exit;
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Ice Cream</title>
  </head>
  <body>
     <form method="post" action="">
	    <label>Name:
          <input type="text" name="name" value="">
        </label><br>
        
        <label>Favorite Ice Cream Flavor:
          <input type="text" name="flavor" value="">
        </label><br>
        <input type="submit" value="Submit" name="btnSubmit">
      </form>
   </body>
</html>    