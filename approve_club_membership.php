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

 $del = "update club_membership set status = 'approved' where id = '$val' ";
  if(mysqli_query($con,$del))
  {
      header('location:manage_club_membership.php');
  }
  else {
    header('location:manage_club_membership.php');
  }

 ?>



<?php require 'footer.php'; ?>
