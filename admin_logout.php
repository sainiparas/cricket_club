<?php
   session_start();
   if(!((isset($_SESSION['username'])) && isset($_SESSION['password'])))
   {
       header('location:index.php');
   }

   session_unset();
   session_destroy();
   header('location:admin_login.php');
 ?>
