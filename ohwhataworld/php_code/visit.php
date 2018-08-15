<?php
if(isset($_COOKIE['AboutVisit']))
{
$last = $_COOKIE['AboutVisit']; }
$year = 31536000 + time() ;
//this adds one year to the current time, for the cookie expiration
setcookie(AboutVisit, time (), $year) ;
if (isset ($last))
{
$change = time () - $last;
if ( $change > 86400)
{
  $message = "Welcome back! You last visited on ". date("m/d/y",$last);
echo "<script type='text/javascript'>alert('$message');</script>";

// Tells the user when they last visited if it was over a day ago
}
else
{
  $message = "Thanks for using my site - This is just a php test";
echo "<script type='text/javascript'>alert('$message');</script>";
//Gives the user a message if they are visiting again in the same day
}
}
else
{
echo "Welcome to my site - this is just a php test";
//Greets a first time user
}
?>
