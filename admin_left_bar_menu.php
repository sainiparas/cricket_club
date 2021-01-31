
<?php
   $posi = $_SESSION['designation'];
   if($posi == 'admin')
   {
     ?>
     <h3 style="display:block;background-color:lightgray;">&nbsp;&nbsp;Users</h3>
     <ul class="ul_li_admin">
         <li><a href="admin_register.php">Add New User</a></li>
         <li><a href="admin_view_details.php">View User Details</a></li>
         <li><a href="admin_delete_user.php">Delete User</a></li>
     </ul>

     <?php
   }
   else{
     ?>
      
<h3 style="display:block;background-color:lightgray;">&nbsp;&nbsp;Facility Management</h3>
<ul class="ul_li_admin">
    <li><a href="manage_ground_booking.php">Manage Ground Booking</a></li>
    <li><a href="manage_club_membership.php">Manage Club Membership</a></li>
    <li><a href="manage_batch_registration.php">Manage Batch Admission</a></li>
      <li><a href="admin_notices.php">News & Notices</a></li>
</ul>


     <?php
   }
 ?>


<h3 style="display:block;background-color:lightgray;">&nbsp;&nbsp;Profile</h3>
<ul class="ul_li_admin">
    <li><a href="admin_logout.php">Logout</a></li>
</ul>
