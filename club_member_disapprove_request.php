<?php

require 'db.php';



$id = $_POST['rank'];
$up = "update club_membership set status = 'disapproved' where id ='$id'";
if(mysqli_query($con,$up))
   {
		 echo "Request hasbeen disapproved successfully";
	   
   }
   else
   {
	   echo "Error occurred while disapproving the request";
   }
?>