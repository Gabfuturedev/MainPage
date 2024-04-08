<!DOCTYPE html>
<html lang="en">
    <style>
        *{
            padding:0;
            margin: 0;
            box-sizing: border-box;
        }.sidebar{
            position: absolute;
            top: 0;
            left: 0;
            height: 100vh;
            background-color: #D9D9D9;
            transition: all 0.5s ease;
        }.sidebar.active ~ .main-content{
            left: 250px;
            width: calc(100%-250px);

        }.sidebar.active{
            width: 250px;
        }.sidebar #btn{
            position: absolute;
            top: .4rem;
            left: 40%;
            font-size: 1.2rem;
            line-height: 50%;
            transform: translateX(-50%);
            cursor: pointer;
        }.sidebar.active #btn{
            left: 90%;
        }.sidebar ul li{
            position: relative;
            list-style-type: none;
            height: 50px;
            width: 90%;
            margin: 0.8rem auto;
            line-height: 50px;
        }.sidebar ul li a{
            display: flex;
            color: black;
            text-decoration: none;
            border-radius: 0.8rem;
        }
        .sidebar ul li a:hover{
            background-color: black;
            color: white;
        }
        .sidebar ul li a i{
            min-width: 50px;
            height: 50px;
            border-radius: 12px;
            line-height: 50px;
        }.sidebar .nav-item{
            opacity: 0;
        }.sidebar.active .nav-item{
            opacity: 1;
        }.sidebar ul li .tooltip{
            position: absolute;
            left: 125px;
            top: 50%;
            /* transform: translate(-50%,-30%); */
            border-radius: .6rem;
            padding: .4rem 1.2rem;
            line-height: 1.8rem;
            z-index: 20;
            opacity: 0;
        }.sidebar ul li:hover .tooltip{
            opacity: 1;
        }.sidebar.active ul li .tooltip{
            display: none;
        }.main-content{
            position: relative;
            background-color: white;
            min-height: 100vh;
            top: 0;
            left: 80px;
            transition: all 0.5s ease;
            width: calc(100% -80px) ;
            padding: 1rem;
        }
    </style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<body>
    <div class="sidebar">
        <div><i class='bx bx-menu' id="btn" ></i></div>
        <div class="dashboard">
            <ul>
                <li>
                    <a href="">
                        <i class="bx bx-home" ></i>
                        <span class="nav-item" >Home</span>
                    </a>
                    <span class="tooltip" >Home</span>
                </li>
                
                <li>
                    <a href="">
                        <i class="bx bx-book" ></i>
                        <span class="nav-item" >Enrolled</span>
                    </a>
                    <span class="tooltip" >Enrolled</span>
                </li>
                
                <li>
                    <a href="">
                        <i class='bx bx-cart' ></i>
                        <span class="nav-item" >Purchase</span>
                    </a>
                    <span class="tooltip" >Purchase</span>
                </li>
              
            </ul>
        </div>
    </div>
    <div class="main-content">
        <div class="container">

        </div>
    </div>
    
</body>
<script>
    let btn = document.querySelector('#btn');
        let sidebar = document.querySelector('.sidebar'); // Added 'document.'

        btn.onclick = function() {
            sidebar.classList.toggle('active'); // Corrected 'classlist' to 'classList'
        };
</script>
</html>