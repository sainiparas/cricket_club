<?php

require 'db.php';



$id = $_POST['id'];
$up = "update batch_registration set status = 'approved' where id ='$id'";
if(mysqli_query($con,$up))
   {
		 echo "Request hasbeen approved successfully";
	   
   }
   else
   {
	   echo "Error occurred while approving the request";
   }
?>