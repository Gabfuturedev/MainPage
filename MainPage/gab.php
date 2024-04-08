<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agri-Learn Home Page</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        header {
            height: auto;
            width: 100%;
            text-align: center;
            display: flex;
            flex-wrap: wrap;
            background-color: white;
            
            
        }

        nav {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            background-color: white;
            transition: all 0.5s ease;
            width: 70px;
            padding-top: 20px;
            
        }

        nav.active  {
            width: 250px;
        }

        nav #btn {
            position: absolute;
            top: .4rem;
            left: 10px;
            font-size: 1.5rem;
            cursor: pointer;
        }

        nav.active #btn {
            left: 90%;
           
        }

        nav ul {
            margin-top: 50px;
        }

        nav ul li {
            margin-bottom: 10px;
        }

        nav ul li a {
            display: flex;
            align-items: center;
            color: black;
            text-decoration: none;
            padding: 10px;
        }

        nav ul li a:hover {
            background-color: black;
            color: white;
        }

        nav ul li a i {
            margin-right: 10px;
            font-size: 1.2rem;
        }

        nav .nav-item {
            display: none;
            transition: all 0.5s ease;
        }

        nav.active .nav-item {
            display: inline;
            margin-top: 20px;

        }nav.active .label{
            opacity: 0;
        }
        .label {
            margin-left: 10px;
        }

        .main-content {
            transition: all 0.5s ease;
            margin-left: 70px;
            padding: 20px;
        }

        nav.active ~ .main-content {
            margin-left: 250px;
        }.logo{
            margin-left: 20%;
        }.logo-pic{
            border-radius: 100%;
            height: 100px;
            width: 100px;
        }.logo-text{
            line-height: 100px;
        }.vids {
            margin-top: 5%;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
        }.burger-btn{
            margin-top: 15%;
        }.vids > div {
        margin-bottom: 20px; /* Add margin-bottom to create vertical gap between items */
        margin-right: 20px; /* Add margin-right to create horizontal gap between items */
        }@media screen and (max-width: 768px) {
        .label {
           opacity: 0;
        }
     }



/* Adjusting the border of the YouTube video iframe */
.embed-responsive-item {
    border: 2px solid #ccc; /* Example border style */
    border-radius: 5%; /* Optional: Add rounded corners */
    width: 100%;
    margin-right: 5%;
    
}
        

    </style>
    <!-- dito yung sa yt videos -->
    <?php
// Array of YouTube video IDs
$videoIDs = array(
    "dQw4w9WgXcQ" => " Rick Astley - Never Gonna Give You Up" , // Rick Astley - Never Gonna Give You Up
    "9bZkp7q19f0" => " Psy Gangnam Style",  // Psy - Gangnam Style
    "OldrAt_jIs4" => "Paano Magtanim ng KAMATIS sa Plastic Bottle",
    "RyB8hbatUrE" => "9 TIPS PAANO MAKASURVIVE ANG TANIM SA SOBRANG INIT NGAYONG SUMMER"
    
);
?>
</head>
<body>
   <header>
    <!-- <div class="logo" ></div>
   <img src="logo.png" alt="" class="logo-pic" >
   <span class="logo-text">Agri-Learn</span> -->
       
      
       
   </header>

   <nav class="sidebar">
       <div class="burger-btn" ><i class='bx bx-menu' id="btn" style="font-size: 32px;"></i></div>     
       <ul>
            <li>
                <a href="">
                    <i class="bx bx-home" style="font-size: 32px;"></i>
                    <span class="nav-item">Home</span>
                </a>
               <small class="label">Home</small>
            </li>
            
            <li>
                <a href="">
                    <i class="bx bx-book" style="font-size: 32px;"></i>
                    <span class="nav-item">Enrolled</span>
                </a>
                <small class="label">Enrolled</small>
            </li>
            
            <li>
                <a href="">
                    <i class='bx bx-cart' style="font-size: 32px;"></i>
                    <span class="nav-item">Purchase</span>
                </a>
                <small class="label">Purchase</small>
            </li>
            <li>
                <a href="">
                
                    <i class='bx bx-exit' style="font-size: 32px;"></i>
                    <span class="nav-item">Logout</span>
                </a>
                <small class="label">Logout</small>
            </li>
        </ul>
   </nav>

   <main class="main-content">
   <div class="container">
    <div class="vids">
        <?php foreach ($videoIDs as $videoID => $videoTitle): ?>
        <div style="width: 22rem;" class="card">
            <div class="card-body">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $videoID; ?>" allowfullscreen></iframe>
                </div>
                <div style="display: flex; align-items: center;">
    <img src="neustlogo.png" alt="" style="width:10%; margin-right:3%;">
    <h5 class="card-title" style="margin-top: 0;"><?php echo $videoTitle; ?></h5>
</div>

                <p class="card-text" style="opacity:50%; font-size:0.8rem; margin-left:13% ;" >Neust Academy</p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

   </main>

   <script>
        let btn = document.querySelector('#btn');
        let sidebar = document.querySelector('.sidebar');

        btn.onclick = function() {
            sidebar.classList.toggle('active');
        };
   </script>
</body>
</html>
