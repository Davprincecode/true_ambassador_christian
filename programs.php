<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="program.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.min.css">
    <title>Document</title>
</head>
<body>
<section>

<div class="nav">
<div class="navflex">
    <div class="logo">
        <a href="index.php"><img src="image/logo.jpg" alt=""></a> 
    </div>
<ul>
<li class="active"><a href="index.php">home</a></li>
<li><a href="programs.php">programs</a></li>
<li><a href="publication.php">publication</a></li>

<li><a href="gallery.php">gallery</a></li>
<li><a href="event.php">event</a></li>

<li><a href="prayerrequest.php">prayer request</a></li>

<!-- <div class="register-btn"><a href="register.php">become a member</a></div> -->
<!-- © 2021 Official Website : Tejubabyface. All Rights Reserved. -->
<!-- <li><a href=""><button style="background: blue;
text-align: center;
cursor: pointer;


padding: 10px;
">DONATE</button></a> </li> -->
</ul>

<!-- toggle -->
<div class="icon" id="hamburg"><i class="fas fa-bars"></i>
</div>
<!-- toggle end -->
</div>
</div>


 <!-- mobile nav -->

 <div class="mobilenav"  style="display:none;">

<ul id="items">
    <li class="active"><a href="index.php">home</a></li>
    <li><a href="programs.php">programs</a></li>
    <li><a href="publication.php">publication</a></li>

    <li><a href="gallery.php">gallery</a></li>
    <li><a href="event.php">event</a></li>

    <li><a href="prayerrequest.php">prayer request</a></li>

    <li class="register-mobile-btn"><a href="register.php">become a member</a></li>
<!-- <li><a href="">DONATE</a></li> -->
</ul>

</div>



<!-- mobile nav ending -->
</section>

<div class="eventwrap">

<div class="eventheader">
  <h1>our program</h1>
  </div>  

<div class="eventflex">
  <!-- card 0 -->
  <div class="eventcontent">
    <h1>APOSTOLIC MEETING</h1>
    <p>Do you want to know more about God? <br>
    join us in church every TUESDAY where we studied the word of God. 
  </p>
  <h2>DURATION: <span style="color : gold; ">MONTHLY MEETING</span> </h2>
  <h2>TIME: <span style="color : gold; ">7 : 30PM</span> </h2>
  <h2>LOCATION: <span style="color : gold; "> ZOOM </span> </h2>
  </div>

<!-- card 1 -->
<div class="eventcontent">
    <h1>ABLAZE</h1>
    <p>Do you want to know more about God? <br>
    join us in church every TUESDAY where we studied the word of God. 
  </p>
  <h2>DURATION: <span style="color : gold; ">MONTHLY MEETING</span> </h2>
  <h2>TIME: <span style="color : gold; ">7 : 30PM</span> </h2>
  <h2>LOCATION: <span style="color : gold; "> ZOOM </span> </h2>
  </div>

<!-- card 2 -->
<div class="eventcontent">
    <h1>OUTREACH</h1>
    <p>Do you want to know more about God? <br>
    join us in church every TUESDAY where we studied the word of God. 
  </p>
  <h2>DURATION: <span style="color : gold; ">MONTHLY MEETING</span> </h2>
  <h2>TIME: <span style="color : gold; ">7 : 30PM</span> </h2>
  <h2>LOCATION: <span style="color : gold; "> ZOOM </span> </h2>
  </div>


</div>

</div>
</section>

<script>
// top menu responsiveness

const toggl = document.querySelector('#hamburg');

let ul = document.querySelector('.mobilenav');

toggl.addEventListener('click', blockItems);

function blockItems(){
if(ul.style.display == "none"){

ul.style.display = "block";

}else{

    ul.style.display ="none";
    
}

};


    </script>

</body>
</html>