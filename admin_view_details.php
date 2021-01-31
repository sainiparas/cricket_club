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
            <h1 style="text-transform:capitalize;">View User Details</h1>
              <hr style="border:1px solid green;"/>
            <br/>
             <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                 <div class="form-group">
                     <input type="text" class="form-control" placeholder="Search" name="search_user" id="search_user"/>
                     <div class='error-empty-field-empty'>
                       <?php
                         if(isset($POST['evu']))
                         echo $evu;
                       ?>
                     </div>
                     <br/>
                     <input type="submit" class="btn btn-success" value="Search" id='search-user-admin' name="search-user-admin"/>
                 </div>
             </form>
               <hr style="border:1px solid green;"/>
               <div class='divi-user-details'>
           <?php    
if(isset($_POST['search-user-admin']))
{
    if(isset($_POST['search_user']))
    {
      $search_user = $_POST['search_user'];
      $select = "select * from admin_register where username = '$search_user'";
      $man = mysqli_query($con,$select);
      if(mysqli_num_rows($man)>0)
        {
            while($rec = mysqli_fetch_assoc($man))
              {
                ?>

                <table class='table'>
                   <tr>
                      <td class='bg-danger'>Username<td><td><?php   echo   ucfirst($rec['username']); ?></td>
                  
                   </tr>
                   <tr>
                   <td class='bg-danger'>Date of Joining<td><td><?php   echo $rec['date_of_joining']; ?></td>
                     
                   </tr>
                   <tr>
                   <td class='bg-danger'>Gender<td><td><?php   echo $rec['phone']; ?></td>
                     
                   </tr>
                   <tr>
                   <td class='bg-danger'>Address<td><td><?php   echo $rec['gender']; ?></td>
                    
                   </tr>
                   <tr>
                   <td class='bg-danger'>Position<td><td><?php   echo $rec['address']; ?></td>
                   </tr>
                   <tr>
                   <td class='bg-danger'>Position<td><td><?php   echo $rec['position']; ?></td>
                   </tr>
             </table>

                <?php
              }
        }
        else
        {
          echo "Sorry No any record exists";
        }
    }

    if(empty($_POST['search_user']))
    {
      $evu = "username is required";
    }

  
}
?>

               </div>
            
        </div>
      </div>


  </div>
</div>
<br/>






<?php require 'footer.php'; ?>
