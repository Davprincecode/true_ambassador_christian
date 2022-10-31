<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="stylesheet" href="prayerrequest.css">
    <title>Document</title>
</head>
<body>
    
    <div class="contact-section">

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

<h1>
    PRAYER REQUEST
</h1>


<form action="../includes/contactus.php" method="post" class="contact-form">
<input type="text" name="name" id=""  class="contact-text" placeholder="Your name">

<input type="text" name="email" id=""  class="contact-text" placeholder="Email">

<input type="text" name="phonenumber" id="" class="contact-text" placeholder="Phonenumber">

<textarea name="contect" id="" class="contact-text" placeholder="Your message"></textarea>
<button  name="submit" class="contact-btn">
    send
</button>
</form>

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