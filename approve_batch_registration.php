<?php require 'header.php';
if(!((isset($_SESSION['username'])) && isset($_SESSION['password'])))
{
    header('location:index.php');
}


$posi = $_SESSION['designation'];

?>


<?php
 if(isset($_GET['id']))
 {
    $val =   $_GET['id'];
    echo $val;
 }

 $del = "update batch_registration set status = 'approved' where id = '$val' ";
  if(mysqli_query($con,$del))
  {
      header('location:manage_batch_registration.php');
  }
  else {
    header('location:manage_batch_registration.php');
  }

 ?>



<?php require 'footer.php'; ?>
