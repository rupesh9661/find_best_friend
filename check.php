<?php 
session_start();
if(isset($_POST['submit'])){
    $name=$_POST['yourname'];
    $movie= $_POST['movie'];
    $actor= $_POST['actor'];
    $singer= $_POST['singer'];
    $cricketer=$_POST['cricketer'];
    $food=$_POST['food'];
    $fastfood=$_POST['fastfood'];
    // echo $movie .$actor .$singer;
    if($movie==$_SESSION['movie'] && $actor==$_SESSION['actor'] &&$singer==$_SESSION['singer'] && $cricketer== $_SESSION['cricketer'] && $food==$_SESSION['food'] && $fastfood==$_SESSION['fastfood'] ){
        echo "<h1>Hey ".$name." You are my best friend </h1>"." <img src='https://cdn1.byjus.com/wp-content/uploads/2019/10/my-best-friend-essay-for-class-2.png'>";

    }
    else{
        echo "<br><h1>Hey ".$name." you are </h1> <img src='https://i.ytimg.com/vi/71ZLJS_GtGY/hqdefault.jpg'>";
        echo "<h2> you selected : </h2>"."<br>".$movie."<br>".$actor."<br>".$singer."<br>".$cricketer."<br>".$food."<br>".$fastfood;
         echo "<br><h2> But My favourites are : </h2>"."<br>".$_SESSION['movie']."<br>".$_SESSION['actor']."<br>".$_SESSION['singer']."<br>".$_SESSION['cricketer']."<br>".$_SESSION['food']."<br>".$_SESSION['fastfood'];
    }
}


?>

<div id="setlink" style="margin:20px;"> <h1><a style="text-decoration:none; color:green; " href= "https://findbestfriend.000webhostapp.com/"> Click here to set Your favouries </a> </h1> </div>