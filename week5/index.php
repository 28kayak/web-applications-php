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
<?php 
  echo $my_hash;
?>
<a href="week5/fail.php"> Clieck here to jump fail.php</a>
<a href="week5/check.php"> Clieck here to jump check.php</a>


</body>
</html>