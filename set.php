<?php 
session_start();
if(isset($_POST['submit'])){
    $name=$_POST['yourname'];
    $actor= $_POST['actor'];
    $movie=$_POST['movie'];
    $singer=$_POST['singer'];
    $cricketer=$_POST['cricketer'];
    $food=$_POST['food'];
    $fastfood=$_POST['fastfood'];

    echo " Hey ".$name ."<h2> your favourites are : </h2>"."movie type : " . $movie . " <br> Actor : ".$actor."<br> Singer : " . $singer. " <br> Cricketer : ". $cricketer. "<br> food : ". $food . "<br> fast food: ". $fastfood ;
  $_SESSION['movie']=$movie;
  $_SESSION['actor']=$actor;
  $_SESSION['singer']=$singer;
  $_SESSION['cricketer']=$cricketer;
  $_SESSION['food']=$food;
  $_SESSION['fastfood']=$fastfood;
  $_SESSION['status']=1;
//   header("location:check.html");
// echo '<br><h2><a href="friend.php"> Examine your friends </a></h2>';
// echo ' 
// <body>
// <div id="share" class="addthis_inline_share_toolbox "><h1>Examine your freinds by sharing this link </h1></div>
// <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-60f7769efaeb4dac"></script> </body>';

}


?>
  
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Catogaries Your friends </title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    #btn{
        font-size:20px;
        color:red;
    }
    </style>
  </head>
  <body>
    <!--<h1>Sharing MDN</h1>-->

    <!--<p>We love MDN, and want to share it as far as we can! Click the following button to share MDN's home page using your system's native share functionality. See the <a href="https://developer.mozilla.org/en-US/docs/Web/API/Navigator/share#Browser_compatibility">browsers this currently works on</a>.</p>-->

    <p><button id="btn" onclick="share()" class="fa fa-share-alt-square"> share to examine your friends </button></p>

    <p class="result"></p>

    <script>
      let shareData = {
        title: 'Are You best friend ? ',
        text: 'Click on this link to give a test ',
        url: 'https://findbestfriend.000webhostapp.com/friend.php',
      }


      const resultPara = document.querySelector('.result');

   const share=() => {
        navigator.share(shareData)
          .then(() =>
            resultPara.textContent = 'MDN shared successfully'
          )
          .catch((e) =>
            resultPara.textContent = 'Error: ' + e
          )
      };
    </script>
  </body>
</html>