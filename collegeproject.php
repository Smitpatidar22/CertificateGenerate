
<?php 

// CONECT DATABASE 

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "certificate_generate";

$conn = new mysqli($db_host,$db_user,$db_password,$db_name);



if(isset($_REQUEST['submit'])){

    $name = $_REQUEST['name'];
    $date = $_REQUEST['date'];
   


    $sql = "INSERT INTO generate( user_uname ,user_date)
      VALUES('$name','$date')";

      $conn->query($sql);
}



if (isset($_POST['submit']))
{

    $font = "ALGER.ttf";
    $image= imagecreatefromjpeg("smit.jpg");
    $color = imagecolorallocate($image,19,21,22);
    $name = $_REQUEST['name'];
    // imagettftext($image,50,0,200,170,$color,$font,$name);
    imagettftext($image,30,0,670,550,$color,$font,$name);
    
    $date= $_REQUEST['date'];

    // imagettftext($image,40,0,670,550,$color,$font,$date);
    imagettftext($image,20,0,660,650,$color,$font,$date);

    imagejpeg($image,"certificate/".$name.".jpg");
    imagedestroy($image);
    echo '<script type ="text/JavaScript">';  
    echo 'alert("certificate succesfully created")';  
    echo '</script>'; 
    //echo "certificate succesfuly created";
    
}
?>

<style>
    

    form{
        font-family: "Times New Roman",Times, serif;
        font-size: 35px;
        
        background-color: rgba(0,128,0,0.3);
        
        text-align: center;
    }
    input{
        width:25%;
    }
    input[type=text]{
        
        padding:10px;
        margin:8px;
        box-sizing:border-box;
        border: 2px solid darkblue;
        border-radius: 4px;
    }
    input[type=submit]{
        padding:10px;
        margin:8px;
        box-sizing:border-box;
        border: 2px solid darkblue;
        border-radius: 4px;
    }
    input[type=date]{

        padding:10px;
        margin:8px;
        box-sizing:border-box;
        border: 2px solid darkblue;
        border-radius: 4px;
        margin-bottom:20px;
        padding:20px;
    }
    input[type=text],
    input[type=date],input[type=submit]{
        background-color:lightpink;
        cursor:pointer;
        margin:20px 20px 20px 20px;
        height:50px;
        font-size: 30px;

    }
      #form1{
        background-color:darkblue;
        font-family: "Times New Roman",Times, serif;
        font-size: 35px;
        

    }

    </style>


<form method ="POST">
    <lable> NAME</lable>
    <input type="text" name="name"  placeholder="Enter your name"/><br>
    <lable> DATE</lable>
    <input type= "date"  name="date" placeholder="date"><br>
    <input type ="submit" name ="submit" value="GENERATE">
    <br>
    <br>
   
</form>

<form mrthod ="POST" action= "college.php" id="form1">
    
 <input type="submit" name="button" value="All Certificate Created">


</form>




