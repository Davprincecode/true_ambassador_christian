<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="publication.css">
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

<div class="wrap-book-up">

<div class="wrap-book-flex">
<!-- -------------------------============= -->
<a href="">
<div class="book-container">

<div class="image-book">
    <img src="image/bk1.jpg" alt="">
    <!-- <div class="befor"></div>
    <div class="lay">#5000.00</div>
    <div class="afte"></div> -->
</div>

<div class="book-content">
<h1>
    you are the lord that heals me
</h1>
</div>

</div></a>


<a href="">
<div class="book-container">
<div class="image-book">
    <img src="image/bk2.jpg" alt="">
</div>

<div class="book-content">
<h1>
    the just and his faith
</h1>
</div>
</div></a>

<a href="">
<div class="book-container">
<div class="image-book">
    <img src="image/bk3.jpg" alt="">
</div>

<div class="book-content">
<h1>
    the just and his faith
</h1>
</div>
</div></a>

<a href="">
<div class="book-container">
<div class="image-book">
    <img src="image/bk6.jpg" alt="">
</div>

<div class="book-content">
<h1>
    precepts
</h1>
</div>
</div></a>

<a href="">
<div class="book-container">
<div class="image-book">
    <img src="image/bk4.jpg" alt="">
</div>

<div class="book-content">
<h1>
    amazing grace
</h1>
</div>
</div></a>

<a href="">
<div class="book-container">
<div class="image-book">
    <img src="image/bk5.jpg" alt="">
</div>

<div class="book-content">
<h1>
toast to new wne
</h1>
</div>
</div></a>
<!-- =------------------------------------- -->

</div>



</div>

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