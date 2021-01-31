<?php

$con = mysqli_connect('localhost','root','','hattrick');
if(!$con)
{
     echo "Error occurred while establishing connection with database<br/>";
}

/*
$db = "create database epiz_27556378_cricket_club;";
if(mysqli_query($con,$db))
  {
        echo "Database hasbeen created Successfully";
  }
  else
  {
        echo "Error occurred while creating the Db";
  }

*/
  //mysqli_select_db($con,'h');


/*
$tab = "create table ground_booking
             (
                   id int not null auto_increment,
                   client_name varchar(200) not null,
                   email  varchar(100) unique not null ,
                    phone varchar(15) not null,
                    spectators varchar(6) not null,
                   purpose varchar(300) not null,
                    address varchar(300) not null,
                    date1 date,
                    date2 date,
                    date3 date,
                    date4 date,
                    date5 date,
                    date6 date,
                    date_of_submission date not null,
                    status varchar(20) not null  default 'Not Viewed Yet',
                    primary key(id)
             );";

if(mysqli_query($con,$tab))
{
       echo "table hasbeen created Successfully";
}
else
{
    echo "Error occurred while creating the table";
}
*/

/*

$drop  = "drop table ground_booking";
if(mysqli_query($con,$drop))
{
   echo "Table hasbeen deleted Successfully";
}
*/



/*
$club = "create table club_membership
        (
          id int not null auto_increment,
          applicant_name varchar(100) not null,
          email varchar(30) not null unique,
          gender varchar(20) not null,
          address varchar(500) not null,
          father_husband_name varchar(100) not null,
          birth_date varchar(15) not null,
          phone varchar(12) not null,
          phone_emergency varchar(12) not null,
          other_details varchar(500),
          membership varchar(9) not null,
          primary key(id)
        );";

if(mysqli_query($con,$club))
{
   echo "Table club Membership hasbeen created Successfully";
}
else {
  echo "Error occurred while creating the table";
}
*/

/*
$drop  = "drop table club_membership";
if(mysqli_query($con,$drop))
{
   echo "Table hasbeen deleted Successfully";
}
else {
  echo "Error occurred while dropping the table";
}
*/

/*
$admin = "create table admin_register
            (
              id int not null auto_increment,
              username varchar(100) not null unique,
              password varchar(100) not null,
              date_of_joining date not null,
              phone varchar(15) not null,
              gender varchar(10) not null,
              email varchar(100) not null,
              address varchar(300) not null,
              position varchar(20) not null default 'staff',
              primary key(id)
            );";
if(mysqli_query($con,$admin))
{
   echo "Table hasbeen created Successfully";
}
else {
  echo "Error occurred while creating the table";
}*/


/*
$tab = "create table admin_login_details
               (
                  id int not null auto_increment,
                  rank int not null,
                  login_time varchar(15),
                  logout_time varchar(15),
                  primary key(id),
                  foreign key(rank) references admin_register(id)
               );";

if(mysqli_query($con,$tab))
{
    echo "Table hasbeen created Successfully";
}
else {
  echo "Error occurred while creating the table";
}

*/



/*
$not = "create table notice_board
                   (
                       id int not null auto_increment,
                       heading1 varchar(200) not null default 'Hattrick Cricket Club',
                       heading2 varchar(200) not null,
                       venue varchar(200) default 'Not Specified',
                       body varchar(700) not null,
                       post_date varchar(15) not null,
                       posted_by varchar(100) not null,
                       designation varchar(200) not null,
                       primary key(id)
                   );";

if(mysqli_query($con,$not))
{
    echo "Table hasbeen created Successfully";
}
else{
  echo "Error occurred while creating the table";
}*/




/*

$drop = "drop table notice_board;";
if(mysqli_query($con,$drop))
{
   echo "Table hasbeen deleted Successfully";
}
*/


//staff member table for upload of pics and other details
//here rank is the foreign key
//and id is the primary key
/*
$pics = "create table staff_pics
          (
            rank int not null,
            id int not null auto_increment,
            image varchar(200) unique not null,
            primary key(id),
            foreign key(rank) references admin_register(id)
          );";

 if(mysqli_query($con,$pics))
 {
    echo "Table hasbeen successfully created";
 }
 else
 {
    echo "Error occurred while creating the table";
 }
*/

/*
$add = "alter table ground_booking add column form_no varchar(8) not null;";
if(mysqli_query($con,$add))
{
    echo "Column hasbeen added Succesffuly";
}
else
{
   echo "Error occurred while making changes";
}
*/

/*
$batch = "create table batch_registration
            (
              id int not null auto_increment,
              applicant_name varchar(100) not null,
              father_name varchar(100) not null,
              birthdate varchar(30) not null,
              contact_number varchar(15)  not null,
              email varchar(50) not null unique,
              gender varchar(30) not null,
              enroll_for varchar(100) not null,
              address varchar(300) not null,
              emergency_contact_no varchar(14) not null,
              other_details varchar(300),
              status varchar(30) not null default 'Not Viewed Yet',
              primary key(id)
            );";

  if(mysqli_query($con,$batch))
  {
      echo "Table hasbeen created Successfully";
  }
  else{
    echo "Error occurred while creating the table";
    }
*/

/*
$add = "alter table club_membership
        add column status varchar(30) not null default 'Not Yet Viewed';";
if(mysqli_query($con,$add))
{
    echo "Column hasbeen added Successfully";
}*/


?>
