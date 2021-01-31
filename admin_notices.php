<?php require 'header.php';
if(!((isset($_SESSION['username'])) && isset($_SESSION['password'])))
{
    header('location:index.php');
}

?>

<b>
<?php
  if(isset($_POST['btn-admin-post']))
  {
     $err = true;
     if(isset($_POST['post_date']))
     {
       $post_date = $_POST['post_date'];
       //echo $post_date . "<br/>";
     }
  

     if(empty($_POST['post_date']))
     {
       $err = false;
       $edate = "Date is required";
     }


     if(isset($_POST['heading1']))
     {
       $heading1 = $_POST['heading1'];
      // echo $heading1 . "<br/>";
     }

     if(empty($_POST['heading1']))
     {
       $err = false;
       $eheading1 = "heading1 is required";
     }

     if(isset($_POST['heading2']))
      {
        $heading2 = $_POST['heading2'];
       // echo $heading2 . "<br/>";
      }

      if(empty($_POST['heading2']))
      {
        $err = false;
        $eheading2 = "heading2 is required";
      }

      if(isset($_POST['summary']))
      {
        $summary = $_POST['summary'];
       // echo $summary . "<br/>";
      }

      if(empty($_POST['summary']))
      {
        $err = false;
        $esummary = "Body is required";
      }


      if(isset($_POST['venue']))
      {
        $venue = $_POST['venue'];
        //echo $venue . "<br/>";
      }

      if(isset($_POST['posted_by']))
      {
        $posted_by = $_POST['posted_by'];
        //echo $posted_by;
      }

      if(isset($_POST['designation']))
      {
        $designation = $_POST['designation'];
        //echo $designation;
      }

     if($err == true)
     {
       $ins = "insert into notice_board(heading1,heading2,venue,body,post_date,posted_by,designation) values('$heading1','$heading2','$venue','$summary','$post_date','$posted_by','$designation');";
       if(mysqli_query($con,$ins))
          {
            $dinner =  "Notice hasbeen posted successfully";
          }
          else
          {
            $dinner =  "something went wrong while inserting the record";
          }
     }




  }

 ?>
</B>








 <div class="container" >
   <div class="row" style="border-left:15px solid transparent;border-right:15px solid transparent;">
       <div class="col-lg-3 color-class" style="background-color:white;border-right:2px solid green;color:black;">
           <?php require 'admin_left_bar_menu.php'; ?>
       </div>

       <div class="col-lg-9 color-class" style="background-color:white;color:black;">
         <div style="padding:20px;">
           <div class="color-class col-lg-offset-2 col-lg-8" style="background-color:lightgreen; text-align: center;border-left:30px solid transparent;border-radius:10px;">


         <center>  <span style="font-family:cambria;color:black;font-size:15px;"> <?php
               if(isset($dinner))
                  {
                      echo $dinner;
                  }
             ?>
           </span></center>
          </div>
           <br/>

           <form  method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-horizontal">
              <h3><center>Post Notices</center></h3><hr/>
              <div class="form-group">
                   <label class="col-sm-2 control-label" >Post Date</label>
                   <div class="col-sm-10">
                   <input type="text" class="form-control "  readonly  value="<?php echo date('d-M-Y'); ?>" placeholder="Heading 2" name="post_date"/>
                   <div class='error-empty-field-empty'>
                          <?php 
                           if(isset($edate))
                           {
                               echo $edate;
                           }
                          ?>
                     </div>
                 </div>
              </div>


                <div class="form-group">
                     <label class="col-sm-2 control-label" >Heading 1</label>
                     <div class="col-sm-10">
                     <input type="text" class="form-control " required placeholder="Heading 1" name="heading1" maxlength="200"/>
                     <div class='error-empty-field-empty'>
                          <?php 
                           if(isset($eheading1))
                           {
                               echo $eheading1;
                           }
                          ?>
                     </div>
                   </div>
                </div>

                <div class="form-group">
                     <label class="col-sm-2 control-label" >Heading 2</label>
                     <div class="col-sm-10">
                     <input type="text" class="form-control " required placeholder="Heading 2" name="heading2" maxlength="200"/>
                     <div class='error-empty-field-empty'>
                          <?php 
                           if(isset($eheading2))
                           {
                               echo $eheading2;
                           }
                          ?>
                     </div>
                   </div>
                </div>

                <div class="form-group">
                     <label class="col-sm-2 control-label" >Summary</label>
                     <div class="col-sm-10">
                       <textarea  required class="form-control"  rows="3" style="resize:none;" maxlength="700" name="summary">
                       </textarea>
                       <div class='error-empty-field-empty'>
                          <?php 
                           if(isset($esummary))
                           {
                               echo $esummary;
                           }
                          ?>
                     </div>
                   </div>
                </div>

                <div class="form-group">
                     <label class="col-sm-2 control-label" >Venue</label>
                     <div class="col-sm-10">
                       <textarea class="form-control" required rows="3" style="resize:none;" name="venue" maxlength="200">
                       </textarea>
                   </div>
                </div>


                <div class="form-group">
                     <label class="col-sm-2 control-label" >Posted By</label>
                     <div class="col-sm-10">
                     <input type="text" class="form-control text_form" placeholder="Posted By" readonly name="posted_by" maxlength="100" value="<?php echo $_SESSION['username']; ?>"/>
                     <div class='error-empty-field-empty'>
                          <?php 
                           if(isset($eposted))
                           {
                               echo $eposted;
                           }
                          ?>
                     </div>
                   </div>
                </div>


                <div class="form-group">
                     <label class="col-sm-2 control-label" >Posted By</label>
                     <div class="col-sm-10">
                     <input type="text" class="form-control text_form" placeholder="Designation" readonly name="designation" maxlength="200" value="<?php echo $_SESSION['designation']; ?>"/>
                     <div class='error-empty-field-empty'>
                          <?php 
                           if(isset($edesig))
                           {
                               echo $edesig;
                           }
                          ?>
                     </div>
                   </div>
                </div>


                

               


              <div class="form-group">
                <center>
                  <input type="submit" class="btn btn-danger" value="Post" name="btn-admin-post"/>
                   <input type="reset" class="btn btn-default" value="Reset"/>
                </center>
              </div>
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
<br/>
<br/>







<?php require 'footer.php'; ?>
