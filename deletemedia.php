<?php 
     if (isset($_GET['path'])) {
         unlink($_GET['path']);
         header("Location: admin.php");
     }
?>
