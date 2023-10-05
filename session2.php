<?php
session_start();
if($_SESSION["favcolor"]){
    
echo "you have set session fav color as : ".$_SESSION["favcolor"].""; 
}
else{
    echo "No Fav Color";
    //header('location:session.php');
}
if($_SESSION["favanimal"]){
    
echo "you have set session fav animal as : ".$_SESSION["favanimal"].""; 
}
else{
    echo "No Fav Animal";
    //header('location:session.php');
}
?>
<form method=post>
<br><br>
Click Here to Delete Fav Color from Session <input type="submit" name="btn1" ></button>
Click Here to Delete All session <input type="submit" name="btn2" ></button>
</form>

<?php

if(isset($_POST['btn1']))
     unset($_SESSION["favcolor"]);

if(isset($_POST['btn2']))
     session_destroy();

?>
