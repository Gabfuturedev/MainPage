<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            
        }

        .sidebar {
            position: absolute;
            top: 0;
            left: 0;
            height: 100vh;
            background-color: #D9D9D9;
            transition: all 0.5s ease;
            width: 70px; /* Adjusted initial width */
            padding-top: 20px; /* Adjusted top padding */
        }

        .sidebar.active {
            width: 250px;
        }

        .sidebar #btn {
            position: absolute;
            top: .4rem;
            left: 10px; /* Adjusted left position */
            font-size: 1.5rem; /* Increased font size */
            cursor: pointer;
        }

        .sidebar.active #btn {
            left: 90%;
        }

        .sidebar ul li {
            list-style-type: none;
            margin-bottom: 10px; /* Adjusted margin */
        }

        .sidebar ul li a {
            display: flex;
            align-items: center; /* Centering icon and text */
            color: black;
            text-decoration: none;
            padding: 10px; /* Added padding for better spacing */
        }

        .sidebar ul li a:hover {
            background-color: black;
            color: white;
        }

        .sidebar ul li a i {
            margin-right: 10px; /* Added margin to the right of the icon */
            font-size: 1.2rem; /* Adjusted icon size */
            margin-top: 20px;
        }

        .sidebar .nav-item {
            display: none;
            transition: all 0.5s ease;
        }

        .sidebar.active .nav-item {
            display: inline; /* Displaying text only when sidebar is active */
            margin-top: 20px;
        }
        .sidebar.active .label{
            opacity: 0;
            
        }.label{
            margin-left: 10px;
        }
        .main-content {
            transition: all 0.5s ease;
            margin-left: 70px; /* Adjusted initial margin */
            padding: 20px; /* Added padding */
        }

        .sidebar.active ~ .main-content {
            margin-left: 250px;
        }.menu{
            margin-top: 50px;
        }.header{
            height: 10px;
            width: 100vh;
            text-align: center;
            display: flex;
            flex-wrap: wrap;
        }
    </style>
</head>
<body>
   <div class="header">
    <img src="logo.png" style="heigth: 100px; width: 100px;" alt="">
   </div>
    <div class="sidebar">
        <div><i class='bx bx-menu' id="btn" style="font-size: 32px;" ></i></div>
        
       <div class="menu" >
       <ul>
            <li>
                <a href="">
                    <i class="bx bx-home" style="font-size: 32px;" ></i>
                    <span class="nav-item" >Home</span>
                </a>
               <small class="label" >Home</small>
            </li>
            
            <li>
                <a href="">
                    <i class="bx bx-book" style="font-size: 32px;" ></i>
                    <span class="nav-item"  >Enrolled</span>
                </a>
                <small class="label" >Enrolled</small>
            </li>
            
            <li>
                <a href="">
                    <i class='bx bx-cart' style="font-size: 32px;" ></i>
                    <span class="nav-item" >Purchase</span>
                </a>
                <small class="label" >Purchase</small>
            </li>
        </ul>

       </div>
    </div>
    <div class="main-content">
        <div class="container">

        </div>
    </div>

    <script>
        let btn = document.querySelector('#btn');
        let sidebar = document.querySelector('.sidebar');

        btn.onclick = function() {
            sidebar.classList.toggle('active');
        };
    </script>
</body>
</html>
