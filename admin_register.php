<?php require 'header.php';
if(!((isset($_SESSION['username'])) && isset($_SESSION['password'])))
{
    header('location:index.php');
}


if(isset($_POST['btn-submit-register']))
{
    $input = true;

    if(isset($_POST['username']))
      {
          $username = $_POST['username'];
         
      }

      if(empty($_POST['username']))
      {
        $input = false;
        $euser = "username is required";
      }

      if(isset($_POST['password']))
      {
        $password = $_POST['password'];
        
      }

      if(empty($_POST['password']))
      {
        $input = false;
        $epassword = "password is  required";
      }

      if(isset($_POST['cpassword']))
       {
         $cpassword = $_POST['cpassword'];
        
       }

       if(empty($_POST['cpassword']))
       {
         $input = false;
         $ecpassword = "password is  required";
       }

       if($password == $cpassword)
       {
         $password = convert_uuencode($password);
       }
       else
       {
         $input  = false;
         $epass = "Password donot match";
       }

       if(isset($_POST['date_of_joining']))
       {
         $date = $_POST['date_of_joining'];
         //echo $date;
       }

       if(empty($_POST['date_of_joining']))
       {
         $input = false;
         $edate  = "Date of joining is required";
       }

       if(isset($_POST['email']))
       {
         $email = $_POST['email'];
         //echo $date;
       }

       if(empty($_POST['email']))
       {
         $input = false;
         $eemail  = "email id is required";
       }

       if(isset($_POST['phone']))
       {
         $phone = $_POST['phone'];
         //echo $phone;
       }

       if(empty($_POST['phone']))
       {
         $input = false;
         $ephone  = "phone no. is required";
       }



       if(isset($_POST['gender']))
       {
         $gender = $_POST['gender'];
         //echo $phone;
       }

       if(empty($_POST['gender']))
       {
         $input = false;
         $egender  = "gender is required";
       }

       if(isset($_POST['address']))
       {
         $address = $_POST['address'];
         //echo $phone;
       }

       if(empty($_POST['address']))
       {
         $input = false;
         $eaddress  = "address is required";
       }

       if(isset($_POST['desig']))
       {
         $desig = $_POST['desig'];
         //echo $phone;
       }


       if($input != false)
       {
           $add = "insert into admin_register(username,password,date_of_joining,email,phone,gender,address,position) values('$username','$password','$date','$email','$phone','$gender','$address','$desig');";

           if(mysqli_query($con,$add))
             {
               $winner = "User <u>"  . $username ."</u> hasbeen registered successfully";
             }
       }
       else
       {
           $winner = "Some fields are left empty";
       }

}


?>






 <div class="container" >
   <div class="row" style="border-left:15px solid transparent;border-right:15px solid transparent;">
       <div class="col-lg-3 color-class" style="background-color:white;border-right:2px solid green;color:black;">
           <?php require 'admin_left_bar_menu.php'; ?>
       </div>

       <div class="col-lg-9 color-class" style="background-color:white;color:black;">
         <div style="padding:20px;">
           <div class="color-class col-lg-offset-2 col-lg-8" style="background-color:lightgreen; text-align: center;border-left:30px solid transparent;border-radius:10px;">


         <center>  <span style="font-family:cambria;color:black;font-size:15px;"> <?php
               if(isset($winner))
                  {
                      echo $winner;
                  }
             ?>
           </span></center>
          </div>
           <br/>
        
             <form method='POST' action='<?php $_SERVER['PHP_SELF']; ?>'>
             <h2 class='bg-success'>&nbsp;Register Here</h2><hr/>
               
                         <div class='form-group'>
                            <label>Username</label>
                            <input type='text' class='form-control' required name='username' placeholder='username'/>
                            <div class='error-empty-field-empty'>
                              <?php
                               if(isset($euser))
                                {
                                  echo $euser . "<br/>";
                                }
                              ?>
                            </div>
                         </div>

                         <div class='form-group'>
                           <label>Password</label>
                           <input type='password' class='form-control' required name='password' placeholder='password'/>
                           <div class='error-empty-field-empty'>
                              <?php
                               if(isset($epassword))
                                {
                                  echo $epassword . "<br/>";
                                }
                              ?>
                            </div>
                         </div>
                      
                         <div class='form-group'>
                           <label>Confirm Password</label>
                           <input type='password' class='form-control' required name='cpassword' placeholder='password'/>
                           <div class='error-empty-field-empty'>
                              <?php

                               if(isset($ecpassword))
                                 {
                               echo $ecpassword . "<br/>";
                                  }
                              
                               if(isset($epass))
                                {
                                  echo $epass . "<br/>";
                                }
                              ?>
                            </div>
                         </div>
                      
                      <div class='form-group'>
                         <label>Date of Joining</label>
                         <input type='date' name='date_of_joining' required class='form-control' placeholder="Date of Joining"/>
                         <div class='error-empty-field-empty'>
                              <?php

                               if(isset($edate))
                                 {
                               echo $edate . "<br/>";
                                  }
                              
                              ?>
                            </div>
                      </div>
                     
                      <div class='form-group'>
                         <label>Email</label>
                         <input type='email' name='email' class='form-control' required placeholder="email"/>
                         <div class='error-empty-field-empty'>
                              <?php

                               if(isset($eemail))
                                 {
                               echo $eemail . "<br/>";
                                  }
                              
                              ?>
                            </div>
                      </div>
                    
                      <div class='form-group'>
                         <label>Phone</label>
                         <input type='text' maxlength="12"  required name='phone' class='form-control' placeholder="phone"/>
                         <div class='error-empty-field-empty'>
                              <?php

                               if(isset($ephone))
                                 {
                               echo $ephone . "<br/>";
                                  }
                              
                              ?>
                            </div>
                      </div>
                   
                      <div class='form-group'>
                         <label>Gender</label>
                         <select name='gender'  class='form-control'>
                           <option value='male'>Male</option>
                           <option value='Female'>Female</option>
                           <option value='Other'>Other</option>
                          
                         </select>
                         <div class='error-empty-field-empty'>
                              <?php

                               if(isset($egender))
                                 {
                               echo $egender . "<br/>";
                                  }
                              
                              ?>
                            </div>
                      </div>
                     
                      <div class='form-group'>
                         <label>Address</label>
                         <input type='text' required  name='address' class='form-control' placeholder="address"/>
                         <div class='error-empty-field-empty'>
                              <?php

                               if(isset($eaddress))
                                 {
                               echo $eaddress . "<br/>";
                                  }
                              
                              ?>
                            </div>
                         
                      </div>
                   
                      <div class='form-group'>
                         <label>Position</label>
                         <select name='desig' class='form-control'>
                           <option value='Staff'>Staff</option>
                           <option value='admin'>Admin</option>
                           
                          
                         </select>
                      </div>
                   
                      <input type='submit' class='btn btn-danger' name='btn-submit-register'/>
               
             </form>
       










         </div>
       </div>


   </div>
 </div>
 <br/>
























 <div class="container">
   <div class="row div_border" >


   </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-offset-2 col-lg-8">
                </div>
    </div>
</div>




<?php require 'footer.php'; ?>
