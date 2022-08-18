<?php

if(isset($_REQUEST['button' ])){
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "certificate_generate";

$conn = mysqli_connect ($db_host,$db_user,$db_password,$db_name);

$query= "select * from generate";
$fire = mysqli_query ($conn,$query);
while($row= mysqli_fetch_array ($fire))
  {

    $font = "ALGER.ttf";
    $image= imagecreatefromjpeg("smit.jpg");
    $color = imagecolorallocate($image,19,21,22);
    $name = $row['user_uname'];
    
    imagettftext($image,30,0,670,550,$color,$font,$name);
    
    $date= $row['user_date'];
    imagettftext($image,20,0,660,650,$color,$font,$date);
    imagejpeg($image,"certificate1/".$name.".jpg");
    imagedestroy($image);
         

   }
   echo '<script type ="text/JavaScript">';  
   echo 'alert(" All certificate succesfully created")';  
   echo '</script>';
   //echo " all certificate succesfuly created " ;
   header('Location: collegeproject.php');

}


?>