<!DOCTYPE html>
<html>
<header>
    <title>Kaya Ota</title>
</header>
<body>
<h1>Kaya Ota</h1>
<?php 
$name = "
**    ** 
**   **  
**  **   
*****    
**  **   
**   **  
**    ** 
";
$my_hash = hash('sha256', 'Kaya Ota');
?>
<pre>
    <?php
     echo $name;
    ?>
</pre>
<pre>
<?php 
  echo $my_hash;
?>
</pre>
<a href="fail.php"> Clieck here to jump fail.php</a>
<a href="check.php"> Clieck here to jump check.php</a>


</body>
</html>