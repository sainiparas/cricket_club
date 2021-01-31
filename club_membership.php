<?php require 'header.php';
if((isset($_SESSION['username'])) && isset($_SESSION['password']))
{
    header('location:admin_home.php');
}?>

<?php
  if(isset($_POST['btn-club-membership']))
  {
      $error = true;

      if(isset($_POST['membership']))
      {
        $membership = $_POST['membership'];
        //echo $membership . "<br/>";
      }

      if(isset($_POST['applicant_name']))
      {
        $applicant_name =   $_POST['applicant_name'];
        //echo $applicant_name;
      }

      if(isset($_POST['email']))
      {
        $email = $_POST['email'];
        //echo $email;
      }

      if(isset($_POST['gender']))
      {
        $gender = $_POST['gender'];
        //echo $gender;
      }

      if(isset($_POST['father_husband_name']))
      {
        $hubby = $_POST['father_husband_name'];
        //echo $hubby;
      }

      if(isset($_POST['address']))
      {
        $address = $_POST['address'];
        //echo $address . "<br/>";
      }

      if(isset($_POST['birth_date']))
      {
        $birth_date = date($_POST['birth_date']);

        //echo $birth_date . "<br/>";
      }

      if(isset($_POST['phone']))
      {
        $phone = $_POST['phone'];
        //echo $phone;
      }

      if(isset($_POST['phone_emergency']))
      {
        $phone_emergency = $_POST['phone_emergency'];
        //echo $phone_emergency;
      }

      if(isset($_POST['any_details']))
      {
        $detail = $_POST['any_details'];
        //echo $detail;
      }

      if(empty($_POST['membership']))
      {
        $error = false;
        $emem = "Membership is Required";
      }

      if(empty($_POST['applicant_name']))
      {
        $error = false;
        $eappli = "Applicant Name is required";
      }

      if(empty($_POST['email']))
      {
        $error = false;
        $eemail = "Email Id is required";
      }

      if(empty($_POST['gender']))
      {
        $error = false;
        $egen = "Gender is required";
      }

      if(empty($_POST['father_husband_name']))
      {
        $error = false;
        $ehub = "Father or Husband Name is required";
      }

      if(empty($_POST['address']))
      {
         $error = false;
         $eadd = "Address is required";
      }

      if(empty($_POST['birth_date']))
      {
        $error = false;
        $ebirth = "Birth date is required";
      }

      if(empty($_POST['phone']))
      {
        $error = false;
        $ephone = "Phone no. is required";
      }

      if(empty($_POST['phone_emergency']))
      {
        $error = false;
        $p_emerg = "Emergency Contact No. is required";
      }

    if($error == true)
    {

          $insert  = "insert into club_membership(applicant_name,email,gender,address,father_husband_name,birth_date,phone,phone_emergency,other_details,membership)
                   values('$applicant_name','$email','$gender','$address','$hubby','$birth_date','$phone','$phone_emergency','$detail','$membership');";

          if(mysqli_query($con,$insert))
             {
                $win =  "Application hasbeen received Successfully";
             }
             else {
               $win =  "Error occurred while adding  of the record";
             }
    }
    else {
      $win =  "Some field are left empty";
    }

  }

 ?>







<div class="container">
  <div class="row div_border" >
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 color-class" style="background-color:lightgreen;">
      <center>  <span style="font-family:cambria;color:black;font-size:15px;"> <?php
            if(isset($win))
               {
                   echo $win;
               }
          ?>
        </span></center>
       </div>
  </div>


  <div class="row div_border" >
      <div class="col-lg-12 color-class" style="background-color:green;">
        <br/>
        <h3><b><center>Club Membership</center></b></h3>
        <hr/>
         <form class="fform-apply-for col-lg-offset-2 col-lg-8" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                 <label>Membership</label>
               
                      <select class="form-control" name="membership">
                           <option value="3 Month" active>3 Month</option>
                           <option value="6 Month">6 Month</option>
                           <option value="12 Month">12 Month</option>
                      </select>
                      <div class='error-empty-field'>
                
                 <?php 
                     if(isset($emem))
                     {
                       echo $emem;
                     }
                 ?>
                 
                 </div>
               

            </div>

            <div class="form-group">
                 <label >Applicant Name</label>
                
                     <input type="text" maxlength="100" required class="form-control" name="applicant_name" placeholder="Applicant Name"/>
                     <div class='error-empty-field'>
                
                 <?php 
                     if(isset($eappli ))
                     {
                       echo $eappli;
                     }
                 ?>
                 
                 </div>
            </div>

            <div class="form-group">
                 <label >Email</label>

                
                     <input type="email" maxlength="30" required placeholder="" name="email" class="form-control"/>
                     <div class='error-empty-field'>
                
                 <?php 
                     if(isset($eemail ))
                     {
                       echo $eemail;
                     }
                 ?>
                 
                 </div>
               

            </div>

            <div class="form-group">
                 <label >Gender</label>
                <br/>
                    <div class="radio-inline"><label><input type="radio" name="gender" value="Male"/>Male</label></div>
                    <div class="radio-inline"><label><input type="radio" name="gender" value="Female"/>Female</label></div>
                    <div class="radio-inline"><label><input type="radio" name="gender" value="Other"/>Other</label></div>
                    <div class="radio-inline"><label><input type="radio" name="gender" value="Not to Specify"/>Not to Specify</label></div>
                    <div class='error-empty-field'>
                
                 <?php 
                     if(isset($egen ))
                     {
                       echo $egen;
                     }
                 ?>
                 
                 </div>
               
            </div>

            <div class="form-group">
                 <label>Address</label>
               
                     <textarea rows="5" class="form-control" required maxlength="300" style="resize:none;" name="address" placeholder="Address"></textarea>
                     <div class='error-empty-field'>
                
                 <?php 
                     if(isset($eadd ))
                     {
                       echo $eadd;
                     }
                 ?>
                 
                 </div>
               
            </div>

            <div class="form-group">
                 <label >Father/Husband Name</label>
                 
                     <input type="text" class="form-control" required name="father_husband_name" placeholder="Father or Husband Name" maxlength="100"/>
                     <div class='error-empty-field'>
                
                 <?php 
                     if(isset($ehub ))
                     {
                       echo $ehub;
                     }
                 ?>
                 
                 </div>
                 
            </div>

            <div class="form-group">
                 <label >Birth Date</label>
                
                      <input type="date" class="form-control" required name="birth_date" min="" max=""/>
                      <div class='error-empty-field'>
                
                 <?php 
                     if(isset($ebirth))
                     {
                       echo $ebirth;
                     }
                 ?>
                 
                 </div>
                
            </div>

            <div class="form-group">
                 <label >Contact Number</label>
               
                      <input type="text" class="form-control" required name="phone" placeholder="Contact No." maxlength="12"/>
                      <div class='error-empty-field'>
                
                 <?php 
                     if(isset($ephone))
                     {
                       echo $ephone;
                     }
                 ?>
                 
                 </div>
                
            </div>

            <div class="form-group">
                 <label>Emergency Contact Number</label>                 
                      <input type="text" class="form-control" required name="phone_emergency" placeholder="Emergency Contact No." maxlength="12"/>
                      <div class='error-empty-field'>
                
                 <?php 
                     if(isset($p_emerg ))
                     {
                       echo $p_emerg;
                     }
                 ?>
                 
                 </div>
                
            </div>


            <div class="form-group">
                 <label>Other Details (if any)</label>
               
                     <textarea rows="5" class="form-control" maxlength="300" style="resize:none;" name="any_details" placeholder="Any Details"></textarea>
              
            </div>

            <div class="col-sm-offset-3 col-sm-4">
          
                <input type="submit" class="btn btn-danger" value="Submit" name="btn-club-membership"/>
                <input type="reset" class="btn btn-success" value="Reset"/>
              
                <br/>
                <br/>
            </div>
         </form>



           <br/>
           <br/>



      </div>
  </div>
</div>
<br/>




<?php require 'footer.php'; ?>
