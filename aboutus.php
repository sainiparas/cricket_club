<?php require 'header.php';
if((isset($_SESSION['username'])) && isset($_SESSION['password']))
{
    header('location:admin_home.php');
}
?>


<div class="container">
    <div class="row border-for-all">
       <div class="col-lg-12" style="background-color:green;">
       <h3><u><center>About Us</center></u></h3>
       <p style="padding:20px;">
         Cove Cricket Club is located in the North East corner of Hampshire close to the borders with Surrey and Berkshire. The old village of Cove is now on the outskirts of Farnborough, the home of the famous biennial International Air Show.

   The Club, first established in 1935, has steadily grown from its original “village cricket team” to the present day position of one of the leading clubs not only in the area but also in the South of England. We field four senior Saturday sides three that play in the Morrant Thames Valley Cricket League and one in the Hampshire league and a Sunday side playing a friendly games. Since 2010, we have also fielded a Ladies XI in the Hampshire Ladies Cricket League Division 1.

   For many years now we have invested heavily in establishing a successful colts section to develop our future players as well as supplying District and County representive teams with a large number of boys and girls. This investment has seen the number of ECB qualified coaches treble in the last few years. In 2007 we established our mini’s section, providing cricket related fun on Monday evenings for youngsters aged 4 to 7. In 2008 we launched a Cricket Academy with the objective of developing the technical ability and all-round cricket knowledge of our future 1st XI players. We run boys teams at U7 ,U9, U11, U13, U15 and U17 and girls teams at U11, U13 and U16. In addition to the on field activities, Cove works hard to encourage players families to become part of the Club and run several family oriented social events throughout the year.

   New members are always welcome, regardless of age or ability. the Club also has a thriving social section with many events organized each year. for more information, please feel free to visit the Club or contact our Membership Secretary, using the details on the Contact page.
       </p>
       </div>
    </div>
</div>
<br/>
<?php require 'footer.php'; ?>
