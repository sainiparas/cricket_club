<?php

require 'db.php';
$id = $_POST['id'];
$dial = "select * from admin_register where id = '$id'";
$nj = mysqli_query($con,$dial);

if(mysqli_num_rows($nj)>0)
   {
        while($gt = mysqli_fetch_assoc($nj))
        {
             $posi = $gt['position'];
             if($posi == 'admin')
                {
                  echo "Admin cannot be deleted";
                }
                else
                {
                  $del = "delete from admin_register where id = '$id'";
                  if(mysqli_query($con,$del))
                      {
                        echo "User hasbeen deleted Successfully";
                        //header('location:admin_delete_user.php');
                      }
                      else
                      {
                        echo "Error occurred while deleting the user";
                      }
                }
        }
   }
   

?>
