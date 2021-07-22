<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
    <title>catogaries your friends</title>

    <style>
       
        form{
            padding: 20px;
            background-image:url("https://i.pinimg.com/originals/aa/81/01/aa81014c9ba363c588e9e6295c0f5dc4.jpg"); 
            background-repeat: no-repeat;
              background-size: cover; 
             /* background-color:blueviolet; */
            z-index:1;
            width:700px;
            position:absolute;
            top:10px;
            left:280px;
            text-align: center;
        }
        .heading{
            color:white;
            margin-left: 90px;
        }
        h1{
            color:aqua;
        }
        p{
          color: aqua;
        }
    
        .hr{
            margin-left: 95px;
            background-color: blue;
            height: 5px;
            width: 500px;
            /* font-weight: 800; */
        }
        @media(max-width:390px){
          form{
            width: 350px;
            left: 0px;
          }
          .heading{
           
           margin-left: 0px;
       }
       .hr{
         margin-left: 0px;
         width: 300px;
       }
        }
       
    </style>
</head>
<body>
    
 

<!--<div id="share" class="addthis_inline_share_toolbox" onclick="hide()"><h1>Examine your freinds by sharing link of this page: </h1></div>-->
<!--<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-60f7769efaeb4dac"></script> -->

    
  <form action="check.php" method="post">
    <h1 class="">Are You my best friend ? : </h1>
    <p class="mx-5"><span class="text-warning">सावधान ! </span> आज मैं मतलबी इंसान को खोज रहा हूँ |</p>
    <div class="hr"> </div>
    <div class="mb-4 row my-4 mx-4">
    <label for="" class="col-sm-4 col-form-label heading">Enter Your Name : </label>
    <div class="col-sm-5">
      <input type="text" name="yourname">
    </div>
    <div class="mb-4 row my-4 mx-4">
    <label for="" class="col-sm-4 col-form-label heading">My favourite Movie type?</label>
    <div class="col-sm-5">
      <select name="movie" id="movie">
          <option value="hollywood">Hollywood</option>
          <option value="bollywood">Bollywood</option>
          <option value="south">South</option>
          <option value="bhojpuri">Bhojpuri</option>
          <option value="all">All</option>
          <option value="none">None of the above</option>
      </select>
    </div>
    </div>
    <div class="mb-4 row mx-4">
      <label for="" class="col-sm-4 col-form-label heading">My Favourite Singer?</label>
      <div class="col-sm-5">
        <select name="singer" id="singer">
            <option value="bprak">B.prak</option>
            <option value="arijit">Arijit</option>
            <option value="darshal">Darshal</option>
            <option value="jubin">Jubin</option>
            <option value="khesari">Khesari lal yadav</option>
            <option value="pawan">Pawan Singh</option>
            <option value="none">None of the above</option>
        </select>
      </div>
   </div>
    <div class="mb-4 row mx-4">
    <label for="" class="col-sm-4 col-form-label heading">My Favourite Actor?</label>
    <div class="col-sm-5">
      <select name="actor" id="actor">
          <option value="akshay">Akshay</option>
          <option value="tiger">Tiger</option>
          <option value="vijay">Vijay Devarkonda</option>
          <option value="vidyut">Vidyut</option>
          <option value="yash">Yash</option>
          <option value="salman khan">Salman Khan</option>
          <option value="vidyut">Shahrukh khan</option>
          <option value="vidyut">Varun dhavan</option>
          <option value="khesari">Khesari lal yadav</option>
          <option value="khesari">Pawan singh</option>
          <option value="all">All</option>
          <option value="none">None of the above</option>
      </select>
    </div>
  </div>
    <div class="mb-4 row mx-4">
    <label for="" class="col-sm-4 col-form-label heading">My Favourite cricketer?</label>
    <div class="col-sm-5">
      <select name="cricketer" id="cricketer">
          <option value="dhoni">Ms Dhoni</option>
          <option value="virat">Virat Kohli</option>
          <option value="virat">Rohit sharma</option>
          <option value="virat">Sikhar dhawan</option>
          <option value="Klrahul">K.L. Rahul</option>
          <option value="Rishabh">Rishabh Pant</option>
          <option value="manish">Manish Pandey</option>
          <option value="bumrah">Bumrah</option>
          <option value="">None of the above</option>
      </select>
    </div>
  </div>
    <div class="mb-4 row mx-4">
    <label for="" class="col-sm-4 col-form-label heading">My Favourite food?</label>
    <div class="col-sm-5">
      <select name="food" id="food">
          <option value="chiken">chiken</option>
          <option value="mutton">mutton</option>
          <option value="mutton">Fish</option>
          <!-- <option value="dal">दाल,चावल और भिंडी का भुजिया</option> -->
          <option value="all">All</option>
          <option value="none">None of the above</option>
      </select>
    </div>
  </div>
    <div class="mb-4 row mx-4">
    <label for="" class="col-sm-4 col-form-label heading">My Favourite fast food?</label>
    <div class="col-sm-5">
      <select name="fastfood" id="fastfood">
          <option value="chaumin">chaumin</option>
          <option value="burger">Burger</option>
          <option value="pizza">pizza</option>
          <option value="momo">momos</option>
         
          <option value="none">None of the above</option>
      </select>
    </div>
  </div>
    
  
    <button type="submit" name="submit" class="btn btn-warning">Check</button>

   
</form>
   <div class="text-light">Developed by Rupesh ...</div>

</body>
</html>