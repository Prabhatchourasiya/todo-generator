<?php
$conn=mysqli_connect('localhost','root','','todo');
if(mysqli_connect_errno())
{
echo 'Failed to connect '.mysqli_connect_error();
}
else{
   // echo 'connected succesfully';
}
?>

