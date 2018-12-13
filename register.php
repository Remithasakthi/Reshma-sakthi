<?php
  include("config.php"):
$link=$db:

//check connection
if ($link===false){
   die("ERROR:could not connect.".mysquli-connect-error());
}
$username=$-post['username'];
$cn=$-post['college name'];
$degree=$-post['Degree'];
$Reg no=$-post['Register number'];
$E-mail=$-post['E-mail'];
$Branch=$-post['Branch'];
$Password=$-post['Password'];
//Attempt insert query execution
$sql="INSERT INTO register('user name','college name','branch','degree','register number','e-mail','password')values".
  values($user name,$college name,$degree,$branch,$Register number,$e-mail,$password);
if(my sql-query($db.$sql)){
  echo"Records added successfully";
}else{
  echo"ERROR:could not able execute $sql."mysqli-error($link);
}
//close connection
mysqli-close($link);
?>
 
