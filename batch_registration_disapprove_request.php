<?php

require 'db.php';



$id = $_POST['rank'];
$up = "update batch_registration set status = 'disapproved' where id ='$id'";
if(mysqli_query($con,$up))
   {
		 echo "Request hasbeen disapproved successfully";
	   
   }
   else
   {
	   echo "Error occurred while disapproving the request";
   }
?>