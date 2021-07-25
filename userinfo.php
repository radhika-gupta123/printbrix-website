<?php
$con= mysqli_connect('localhost','root');
if($con){
  echo "Connection Successful";
}
else {
  echo "No Connection";
}

mysqli_select_db($con,'printbrixuserdata');
$user = $_POST['user'];
$Email = $_POST['Email'];
$Phone = $_POST['Phone'];
$Company = $_POST['Company'];
$Message = $_POST['Message'];

$query = "insert into userinfodata (user, Email, Phone, Company, Message)
values('$user','$Email','$Phone','$Company','$Message')";

echo "$query";

mysqli_query($con,$query);


 ?>
