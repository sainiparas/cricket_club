<?php
require 'header.php';

if((isset($_SESSION['username'])) && isset($_SESSION['password']))
{
    header('location:admin_home.php');
}
?>
<?php
  if(isset($_POST['btn-admin-login']))
  {
    $mis = true;
     if(isset($_POST['uname']))
     {
       $unaam = $_POST['uname'];
        if(empty($unaam))
        {
          $mis = false;
        }
     }

     if(isset($_POST['pword']))
     {
       $pword = convert_uuencode($_POST['pword']);
       if(empty($pword))
       {
          $mis = false;
       }
     }

     if($mis == true)
     {
        $select = "select * from admin_register where username = '$unaam' and password = '$pword'";
        $io = mysqli_query($con,$select);
        if(mysqli_num_rows($io)>0)
           {
               while($result = mysqli_fetch_assoc($io))
               {

                    $_SESSION['username'] = $unaam;
                    $_SESSION['password'] = $pword;
                    $_SESSION['id'] = $result['id'];
                    $_SESSION['designation'] = $result['position'];
                    header('location:admin_home.php');
               }
           }
           else
           {
             $no_user =  "No any user exists by given inputs";
           }

     }
     else {
       $non_empty =  "All fields are required";
     }
  }
?>

<div class="container">
    <div class="row">
        <div class="col-lg-offset-3 col-lg-6">
          <form class="form_admin" method="POST" action="admin_login.php">
             <h3><center>Login Here</center></h3><hr/>
             <div class="form-group">
                 <label>Username</label>
                 <input type="text" required class="form-control" placeholder="username" name="uname" maxlength="100"/>

             </div>
             <div class="form-group">
                 <label>Password</label>
                 <input type="password" required class="form-control" placeholder="password" name="pword" maxlength="50"/>
             </div>

             <div class="form-group">
                 <input type="submit" class="btn btn-danger" value="Login" name="btn-admin-login"/>
                <br/><br/>
                <span ><b><?php

                if(isset($no_user))
                {
                    echo "<span style='background-color:pink;color:red;padding:10px;border-radius:10px;'>" . $no_user . "</span><br/><br/>";
                }

                 if(isset($non_empty)){ echo "<span style='background-color:pink;color:red;padding:10px;border-radius:10px;'>" . $non_empty . "</span><br/><br/>"; } ?></b></span>
               
                <a href="password_reset.php" style="text-decoration:underline;color:royalblue;">Forgot Password</a>
             </div>
          </form>
        </div>
    </div>
</div>






<?php require 'footer.php'; ?>
