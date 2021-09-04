<!DOCTYPE html>
<html>
<header>
    <title>Kaya Ota</title>
</header>
<body>
<h1>Kaya Ota</h1>
<?php 
$my_name = "Kaya Ota";
$my_letter = "
**    ** 
**   **  
**  **   
*****    
**  **   
**   **  
**    ** 
";
$my_hash = hash('sha256', $my_name);
?>

<pre>
ASCII ART of Kaya's K:
    <?php
     echo $my_letter;
    ?>
</pre>
<br>
<pre>
The SHA256 hash of "<?php echo $my_name?> " is
<?php 
  echo $my_hash;
?>
</pre>
<a href="fail.php"> Clieck here to jump fail.php</a>
<br>
<a href="check.php"> Clieck here to jump check.php</a>


</body>
</html>