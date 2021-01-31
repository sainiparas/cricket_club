<?php require 'header.php';  ?>


<div class="container" >
  <div class="row" style="border-left:15px solid transparent;border-right:15px solid transparent;">


      <div class="col-lg-12 color-class" style="background-color:white;color:black;">
           
           <?php 
           $sel = "select * from notice_board order by id desc;";
           $hj = mysqli_query($con,$sel);

        if(mysqli_num_rows($hj)>0)
           {
             ?>
              <table class='table table-bordered' >
                 <tr class='bg-success'>
                     <th>Heading 1</th>
                     <th>Heading 2</th>
                     <th>Body</th>
                     <th>Venue</th>
                     <th>Post Date</th>
                     <th>Post By</th>
                     <th>Designation</th>
                     <th>Delete</th>
                 </tr>

                 <?php 
                     while($dt = mysqli_fetch_assoc($hj))
                     {
                         ?>
                         
                         <tr>
                             <td><?php echo $dt['heading1']; ?></td>
                             <td><?php echo $dt['heading2']; ?></td>
                             <td><?php echo $dt['body']; ?></td>
                             <td><?php echo $dt['venue']; ?></td>
                             <td><?php echo $dt['post_date']; ?></td>
                             <td><?php echo $dt['posted_by']; ?></td>
                             <td><?php echo $dt['designation']; ?></td>
                             <th>
                               <input type='submit' data-id="<?php echo $dt['id']; ?>" class='btn btn-link' value='Delete' id='delete-button'/>
                             </th>
                         </tr>

                         <?php
                     }

                 ?>
              </table>

             <?php
           }
           else
           {
               
           }

           ?>

      </div>
      </div>
  </div>    
<script type='text/javascript'>
   $(document).ready(function()
   {
    $("#delete-button").click(function()
    {
       //alert();
      iiid =  $(this).data("id");
        $.ajax({
                url : "admin_notice_delete.php",
                type :"POST",
                data :{iiid:iiid},
                success : function($data)
                            {
                           alert($data);    
                           location.reload();
                            }
        });
    })
   });
</script>




<?php require 'footer.php';  ?>