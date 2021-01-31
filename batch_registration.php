<?php require 'header.php';
if((isset($_SESSION['username'])) && isset($_SESSION['password']))
{
    header('location:admin_home.php');
}
?>



<?php
if(isset($_POST['btn-batch_registration']))
{
      $bool = true;
      if(isset($_POST['applicant_name']))
      {
          $applicant_name = $_POST['applicant_name'];
          //echo $applicant_name;

      }


      if(empty($_POST['applicant_name']))
      {
          $bool = false;         
          $eappli = "Applicant Name is required";
      }

      if(isset($_POST['father_name']))
      {
          $father_name = $_POST['father_name'];
          //echo $father_name;
      }

      if(empty($_POST['father_name']))
      {
          $bool = false;      
          $efather = "Father name is required";   
      }



      if(isset($_POST['birth_date']))
      {
        $birth_date = $_POST['birth_date'];
        //echo $birth_date;
      }


      if(empty($_POST['birth_date']))
      {
          $bool = false;     
          $ebirth = "Birth Date is required";    
      }



      if(isset($_POST['phone']))
      {
          $phone = $_POST['phone'];
          //echo $phone;
      }

      if(empty($_POST['phone']))
      {
          $bool = false;      
          $ephone = 'Contact No. is required';   
      }


      if(isset($_POST['email']))
      {
          $email = $_POST['email'];
         // echo $email;

      }


      if(empty($_POST['email']))
      {
          $bool = false;    
          $eemail = 'Email Id is required';     
      }



      if(isset($_POST['gender']))
      {
          $gender = $_POST['gender'];
          //echo $gender;
      }

      if(empty($_POST['gender']))
      {
          $bool = false;    
          $egend = "Gender is required";     
      }


      if(isset($_POST['martial_status']))
      {
          $martial_status = $_POST['martial_status'];
          //echo $martial_status;
      }

      if(empty($_POST['martial_status']))
      {
          $bool = false;         
          $emartial = "Martial Status is required";
      }


      if(isset($_POST['timing']))
      {
          $timing = $_POST['timing'];
         // echo $timing;
      }

      if(empty($_POST['timing']))
      {
          $bool = false;     
          $etime = "Time is required";    
      }


      if(isset($_POST['address']))
      {
          $address = $_POST['address'];
          //echo $address;
      }

      if(empty($_POST['address']))
      {
          $bool = false;   
          $eadd = 'Address is required';      
      }

      if(isset($_POST['phone_emergency']))
      {
          $phone_emergency = $_POST['phone_emergency'];
          //echo $phone_emergency;
      }

   /*   if(empty($_POST['ep_emerg']))
      {
          $bool = false;       
          $ep_emerg = "Phone No. is required";  
      }*/

      if(isset($_POST['any_details']))
      {
          $any_details = $_POST['any_details'];
          //echo $any_details;
      }


      if($bool == true)
      {
           $input = "insert into batch_registration(applicant_name,father_name,birthdate,contact_number,email,gender,enroll_for,address,emergency_contact_no,other_details) value('$applicant_name','$father_name','$birth_date','$phone','$email','$gender','$timing','$address','$phone_emergency','$any_details');";

           if(mysqli_query($con,$input))
           {
              $win = "Details hasbeen submitted Successfully";
           }
           else
           {
                $win = "Error occurred while submittinng your request";
           }
      }
      else
      {
          $win = "Please input all details";
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
        <h3><b><center>Batch Registration</center></b></h3>
        <hr/>
         <form class="col-lg-offset-2 col-lg-8 form-apply-for" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">

         <div class="form-group">
                 <label >Applicant Name</label>
                 
                     <input type="text" maxlength="100" required class="form-control" name="applicant_name" placeholder="Candidate Name" />
                     <div class='error-empty-field'>
                
                 <?php 
                     if(isset($eappli))
                     {
                       echo $eappli . "<br/>";
                     }
                 ?>
                
                     
                 
            </div>
           <br/>

            <div class="form-group">
                 <label >Father`s Name</label>
                
                     <input type="text" maxlength="100" required class="form-control" name="father_name" placeholder="Father`s Name" />
                     <div class='error-empty-field'>
                
                <?php 
                    if(isset($efather))
                    {
                      echo $efather . "<br/>";
                    }
                ?>
                     
                
            </div>
            <br/>

            <div class="form-group">
                 <label >Birth Date</label>
                
                      <input type="date" class="form-control" required name="birth_date" min="" max="" />
                      <div class='error-empty-field'>
                
                <?php 
                    if(isset($ebirth))
                    {
                      echo $ebirth . "<br/>";
                    }
                ?>
                
            </div>
            <br/>

            
            <div class="form-group">
                 <label>Contact Number</label>
                 
                      <input type="text" class="form-control" required name="phone" placeholder="Contact No." maxlength="12"/>
                      <div class='error-empty-field'>
                
                <?php 
                    if(isset($ephone))
                    {
                      echo $ephone . "<br/>";
                    }
                ?>
                 
            </div>

           <br/>
            <div class="form-group">
                 <label>Email</label>

                
                     <input type="email" maxlength="30" placeholder="email" required name="email" class="form-control"/>
                     <div class='error-empty-field'>
                
                <?php 
                    if(isset($eemail))
                    {
                      echo $eemail . "<br/>";
                    }
                ?>
                 

            </div>

            <br/>
            <div class="form-group">
                 <label >Gender</label>
                <br/>
                    <div class="radio-inline"><label><input type="radio" name="gender" value="Male"/>Male</label></div>
                    <div class="radio-inline"><label><input type="radio" name="gender" value="Female"/>Female</label></div>
                    <div class="radio-inline"><label><input type="radio" name="gender" value="Other"/>Other</label></div>
                    <div class="radio-inline"><label><input type="radio" name="gender" value="Not to Specify"/>Not to Specify</label></div>
                    <div class='error-empty-field'>
                
                <?php 
                    if(isset($egend))
                    {
                      echo $egend. "<br/>";
                    }
                ?>
               
            </div>
             <br/>

            <div class="form-group">
                 <label>Martial Status</label>
                <br/>
                    <div class="radio-inline"><label><input type="radio" name="martial_status" value="Single"/>Single</label></div>
                    <div class="radio-inline"><label><input type="radio" name="martial_status" value="Married"/>Married</label></div>
                    <div class='error-empty-field'>
                
                <?php 
                    if(isset($emartial))
                    {
                      echo $emartial . "<br/>";
                    }
                ?>
                   
                
            </div>
            <br/>
            <div class="form-group">
                 <label>Enroll For</label>
                <br/>
                    <div class="radio-inline"><label><input type="radio" name="timing" value="Morning (8:00 AM to 12:00AM)"/>Morning (8:00 AM to 12:00)</label></div>
                    <div class="radio-inline"><label><input type="radio" name="timing" value="Evening (4:00 PM to 8:00 PM)"/>Evening (4:00 PM to 8:00 PM)</label></div>
                    <div class='error-empty-field'>
                
                <?php 
                    if(isset($etime))
                    {
                      echo $etime. "<br/>";
                    }
                ?>
                   
               
            </div>
            <br/>


            

            <div class="form-group">
                 <label >Address</label>
                 
                     <textarea rows="5" class="form-control" required maxlength="300" style="resize:none;" name="address" placeholder="Address" ></textarea>
                     <div class='error-empty-field'>
                
                <?php 
                    if(isset($eadd))
                    {
                      echo $eadd . "<br/>";
                    }
                ?>
               
            </div>

          <br/>
            


            <div class="form-group">
                 <label>Emergency Contact Number</label>
              
                      <input type="text" class="form-control" required name="phone_emergency" placeholder="Erengency Contact No." maxlength="12"/>
                      <div class='error-empty-field'>
                
                <?php 
                   /* if(isset($ep_emerg))
                    {
                      echo $ep_emerg. "<br/>";
                    }*/
                ?>
                 
            </div>
             <br/>

            <div class="form-group">
                 <label>Other Details (if any)</label>
                 
                     <textarea rows="5" class="form-control" maxlength="300" style="resize:none;" name="any_details" placeholder="Any Details"></textarea>
                
            </div>

            <div class="col-sm-offset-3 col-sm-4">
                <input type="submit" class="btn btn-danger" value="Submit" name="btn-batch_registration"/>
                <input type="reset" class="btn btn-success" value="Reset"/>
            </div>
         </form>



           <br/>
           <br/>



      </div>
  </div>
</div>
<br/>



<?php require 'footer.php'; ?>
