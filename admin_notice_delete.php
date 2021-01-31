<?php
require 'db.php';
$iid = $_POST['iiid'];
$del = "delete from notice_board where id ='$iid'";
if(mysqli_query($con,$del))
   {
       echo "Notice hasbeen deleted successfully";
   }
   else
   {
       echo "Error occurred while deleting the notice";
   }
?>