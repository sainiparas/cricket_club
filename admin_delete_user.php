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
          <br/>
            <h1 style="text-transform:capitalize;">Delete User</h1>
              <hr style="border:1px solid green;"/>
            <br/>
             <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                 <div class="form-group">
                     <input type="text" class="form-control" placeholder="Search" name="search_user" id='search_user' />
                     <br/>
                     <input type="submit" class="btn btn-success" value="Search" id='search-user-admin' name="search-user-admin"/>
                 </div>
             </form>
               <hr style="border:1px solid green;"/>
               <div class='status_delete_record'> 
                  <?php
                    if(isset($_POST['search-user-admin']))
                    {
                       if(isset($_POST['search_user']))
                       {
                         $search_user = $_POST['search_user'];
                       
                       }


                       $su = "select * from admin_register where username like '$search_user%'";
                       $kl = mysqli_query($con,$su);

                       if(mysqli_num_rows($kl)>0)
                         {
                             while($fie = mysqli_fetch_assoc($kl))
                                {
                                  ?>

                                  <table class='table'>
                                    <tr>
                                       <td class='bg-success'>Username</td><td><?php echo $fie['username']; ?></td>
                                       
                                    </tr>
                                    <tr>
                                       <td class='bg-success'>Date of Joining</td><td><?php echo $fie['date_of_joining']; ?></td>
                                       
                                    </tr>
                                    <tr>
                                       <td class='bg-success'>Phone</td><td><?php echo $fie['phone']; ?></td>
                                       
                                    </tr>
                                    <tr>
                                       <td class='bg-success'>Gender</td><td><?php echo $fie['gender']; ?></td>
                                       
                                    </tr>
                                    <tr>
                                       <td class='bg-success'>Address</td><td><?php echo $fie['address']; ?></td>
                                       
                                    </tr>
                                    <tr>
                                       <td class='bg-success'>Position</td><td><?php echo $fie['position']; ?></td>
                                       
                                    </tr>
                                  
                                    <tr>
                                      <td colspan='2'>
                                       <center>
                                          <input type='submit' class='btn btn-danger' data-id='<?php echo $fie['id'] . "<br/><hr/>"; ?>' value='Delete User' id='delete-user-record'/>
                                       </center>
                                      </td>
                                    </tr>
                                  </table>


                                  <?php
                                }
                         }
                         else
                         {
                           echo "<h3><center><b>Sorry no any user exits</b></center></h3>";
                         }
                    }
                  ?>
               </div>
            
        </div>
      </div>


  </div>
</div>
<br/>


<script type='text/javascript'>
   $(document).ready(function()
   {
       $(document).on("click","#delete-user-record",function()
       {
         iiid = $(this).data("id");
        // alert(id);
           $.ajax({
                 url : "admin_user_delete_ajax.php",
                 type :"POST",
                 data : {id:iiid},
                 success : function($data)
                             {
                          alert($data);     
                          location.reload();
                             }
           });
       });
   });
</script>




<?php require 'footer.php'; ?>
