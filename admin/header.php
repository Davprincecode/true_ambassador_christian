<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminstyle.css">
    <link rel="stylesheet" href="../fontawesome-free-5.15.3-web/css/all.css">
<link rel="stylesheet" href="../fontawesome-free-5.15.3-web/css/all.min.css">
   
    
    <title>Admin - Dashboard</title>
</head>
<body>

<div class="main-body">


<div class="sidemenu">
 <div class="navbar">
    <div class="logo">
        
        <a href="#"> TACMOVE </a>
 </div>  
 
 <ul> 
     <li>
     <a href="index.php">
      
          <span class="icon"><i class="fas fa-home"></i></span>
          
          <span class="title">Dashboard </span></a>
    </li>



    <li  id= "toggle1" >
    <a href="#">
          <span class="icon"><i class="fas fa-money-check"></i></span>
          
          <span class="title">Event Management</span> 

          <span class="fas fa-caret-down" id='option'></span>
          </a>

<ul id= "sub">
 <li  >
           <a href="" class="title">Upload Event</a>
         </li>
         
         <li  >
           <a href="" class="title">Edit Event</a>
         </li>  
         <li  >
           <a href="registrationp.php" class="title">Registration
           </a>
         </li>
         <li  >
           <a href="registrationm.php" class="title">Member Registration
           </a>
         </li>
</ul>
    </li>



    <li  id= "toggle2" >
    <a href="#">
          <span class="icon"><i class="fas fa-money-check"></i></span>
          
          <span class="title">Publication</span> 

          <span class="fas fa-caret-down" id='option2'></span>
          </a>
<ul id= "sub2">
         <li>
           <a href="#" class="title">Upload Books</a>
         </li>
         
         <li  >
           <a href="" class="title">Management Books</a>
         </li>  
         <li  >
           <a href="" class="title">Books Order</a>
         </li>
</ul>

    </li>
    






    <li  id= "toggle3" >
    <a href="#">
          <span class="icon"><i class="fas fa-money-check"></i></span>
          
          <span class="title">Prayer Request</span> 

          <span class="fas fa-caret-down" id='option3'></span>
          </a>
<ul id= "sub3">
 <li  >
           <a href="#" class="title">Prayer Request</a>
         </li>
</ul>

    </li>
  



    <li id= "toggle4" >
    <a href="#">
      
          <span class="icon"><i class="fas fa-tractor"></i></span> 
          
          <span class="title">Gallery</span>
          <span class="fas fa-caret-down" id='option4'></span>
      </a>
      <ul id= "sub4">
 <li  >
           <a href="#" class="title">Upload Picture</a>
         </li>
         
         <li>
           <a href="#" class="title">Picture Management</a>
         </li> 

         <li>
           <a href="#" class="title">Order Management</a>
         </li>

</ul>
    </li>



    <!-- mkmkkk -->

    

   <li>
    <a href="userDashboard.php">
      
          <span class="icon"><i class="fas fa-users"></i></span>
          
          <span class="title"> Profile </span></a>
    </li>
    

    <li>
        <a href="userDashboard.php">  
        <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
        <span class="title"> Logout</span> </a>
    </li>
    </ul>
 </div>

</div>
<!-- top navigation ======================================================================================= -->
<nav class="nav">
<div class="top-navbar">

<div class="burger" onclick = "toggleMenu();">
<i class="fas fa-bars"></i>
</div>

<div class="notification">
<h2>Admin Dashboard</h2>
</div>
<div class="pr-img">
<a href="../index.php"> VIEW WEBSITE </a> 
</div>
</div>
</nav>

<!-- ========================MOBILE NAVIGATION ========================== -->
<div class="mobilesidemenu">
 <div class="navbar">
    <div class="mobilelogo">
        
        <a href="#"> TACMOVE </a>
 </div>  
 
 <ul> 
     <li>
     <a href="index.php">
      
          <span class="icon"><i class="fas fa-home"></i></span>
          
          <span class="title">Dashboard </span></a>
    </li>



    <li  id= "togglem1" >
    <a href="#">
          <span class="icon"><i class="fas fa-money-check"></i></span>
          
          <span class="title">Event Management</span> 

          <span class="fas fa-caret-down" id='optionm1'></span>
          </a>

<ul id= "subm1">
 <li  >
           <a href="" class="title">Upload Event</a>
         </li>
         
         <li  >
           <a href="" class="title">Edit Event</a>
         </li>  
         <li  >
           <a href="" class="title">Registration</a>
         </li>

         <li  >
           <a href="registrationp.php" class="title">Registration
           </a>
         </li>
         <li  >
           <a href="registrationm.php" class="title">Member Registration
           </a>
         </li>
</ul>
    </li>

    <li  id= "togglem2" >
    <a href="#">
          <span class="icon"><i class="fas fa-money-check"></i></span>
          
          <span class="title">Publication</span> 

          <span class="fas fa-caret-down" id='optionm2'></span>
          </a>
<ul id= "subm2">
         <li>
           <a href="#" class="title">Upload Books</a>
         </li>
         
         <li  >
           <a href="" class="title">Management Books</a>
         </li>  
         <li  >
           <a href="" class="title">Books Order</a>
         </li>
</ul>

    </li>
    






    <li  id= "togglem3" >
    <a href="#">
          <span class="icon"><i class="fas fa-money-check"></i></span>
          
          <span class="title">Prayer Request</span> 

          <span class="fas fa-caret-down" id='optionm3'></span>
          </a>
<ul id= "subm3">
 <li  >
           <a href="#" class="title">Prayer Request</a>
         </li>
</ul>

    </li>
  
    <li id= "togglem4" >
    <a href="#">
      
          <span class="icon"><i class="fas fa-tractor"></i></span> 
          
          <span class="title">Gallery</span>
          <span class="fas fa-caret-down" id='optionm4'></span>
      </a>
      <ul id= "subm4">
 <li  >
           <a href="#" class="title">Upload Picture</a>
         </li>
         
         <li>
           <a href="#" class="title">Picture Management</a>
         </li> 

         <li>
           <a href="#" class="title">Order Management</a>
         </li>


</ul>
    </li>



    <!-- mkmkkk -->


   


   <li>
    <a href="userDashboard.php">
          <span class="icon"><i class="fas fa-users"></i></span>
          <span class="title"> Profile </span></a>
    </li>
    <li>
        <a href="userDashboard.php">  
        <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
        <span class="title"> Logout</span> </a>
    </li>

    </ul>

 </div>

</div>
<!-- top navigation ======================================================================================= -->
<nav class="mobilenav">
<div class="top-navbar">

<div class="mobileburger" onclick = "mobiletoggleMenu();">
<i class="fas fa-bars"></i>
</div>

<div class="notification">
<h2>Admin Dashboard</h2>
</div>
<div class="pr-img">
<a href="../index.php"> VIEW WEBSITE </a> 
</div>
</div>
</nav>



 </div>