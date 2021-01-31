<?php require 'header.php';
if(!((isset($_SESSION['username'])) && isset($_SESSION['password'])))
{
    header('location:index.php');
}

?>


<div class="container" >
  <div class="row" style="border-left:15px solid transparent;border-right:15px solid transparent;">
      <div class="col-lg-3 color-class" style="background-color:white;border-right:2px solid green;color:black;">
          <?php require 'admin_left_bar_menu.php'; ?>
      </div>

      <div class="col-lg-9 color-class" style="background-color:white;color:black;">
        <div style="padding:20px;">
          <br/><br/><br/>
          <center>
          <?php
            $iod = $_SESSION['id'];
            //echo $iod;
             $fet = "select * from staff_pics where rank = '$iod' order by id desc limit 1;";
             $ok = mysqli_query($con,$fet);
             if(mysqli_num_rows($ok)>0)
             {
                 while($data = mysqli_fetch_assoc($ok))
                 {
                   ?>
                  <a href="#" data-toggle="modal" data-target="#myModal"> <img src="<?php echo 'user_pics/'.$data['image']; ?>" style="height:200px;width:200px;border-radius:50%; border:1px solid black;"/></a>
                  <?php 
                }
             }
             else
             {
               ?>
                <a href="#" data-toggle="modal" data-target="#myModal"> <img src="user_pics/images.png" style="height:200px;width:200px;"/></a>
               <?php
             }
          ?>
        
          <h1 style="text-transform:capitalize;"><?php if($posi == 'admin') { echo $posi . "  ";} if(isset($_SESSION['username'])) { echo $_SESSION['username']; } ?></h1>
             
         <?php
               if($_SESSION['designation'] == 'admin')
               {
                   ?>
                     <h4><b>What would you like to have?</b></h4>
          <br/>
          <a href="admin_register.php" class="btn btn-success">Add New User</a>
          <a href="admin_view_details.php" class="btn btn-success">View User Details</a>
             <a href="admin_delete_user.php" class="btn btn-success">Delete User</a>
          <hr style="border:1px solid green;"/>
                  <?php
               }
             else
             {
                 if($_SESSION['designation'] == 'staff')
                 {
                     ?>
                          <h4><b>What would you like to have?</b></h4>
          <br/>
          <a href="manage_ground_booking.php" class="btn btn-success">Manage Ground Booking</a>
          <a href="manage_club_membership.php" class="btn btn-success">Manage Club Membership</a>
          <hr style="border:1px solid green;"/>
                     <?php
                 }
             }
             
             ?>
             
         
          <br/>
        

         </center>

        </div>
      </div>


  </div>
</div>
<br/>


<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content font_for_form" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:white;">Upload Pic</h4>
      </div>
      <div class="modal-body">
          <form class="form-group" method="POST" action="admin_home.php" enctype="multipart/form-data">
               <div class="form-group">
                   <input type="file" class="form-control" name="image"/>
            </div>
              <div class="form-group">
                 <input type="submit" value="Upload" class="btn btn-success" name="upload_image_user"/>
            </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<?php
   if(isset($_POST['upload_image_user']))
   {
      $target = "user_pics/".basename($_FILES['image']['name']);
      $image = $_FILES['image']['name'];
    
      $iid = $_SESSION['id'];
      //echo $iid;
       $add = "insert into staff_pics(rank,image) values('$iid','$image');";
       if(mysqli_query($con,$add))
       {
             if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
             {
                ?>
                  <script type="text/javascript">
                  location.reload();
                  </script>
                <?php
             }
       }
   }
?>


<?php require 'footer.php'; ?>
