<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sidebar Menu Example</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }
    header {
        background-color: white;
        color: black;
        padding: 10px;
        text-align: center;
    }
    nav {
        background-color:white;
        
        padding: 10px;
        width: 250px;
        position: fixed;
        top: 10%;
        left: -250px;
        transition: left 0.3s ease;
        background-color:white;
        
        /* font-size: 15px; */
    }
    nav.open {
        background-color:white;
        
        padding: 10px;
        width: 250px;
        position: fixed;
        top: 10%;
        left: 0px;
        transition: left 0.3s ease;
        background-color:white;
        
        font-size: 15px;
    }
    nav ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }
    nav ul li {
        padding: 10px 0;
    }
    nav ul li a {
        text-decoration: none;
        color: #fff;
    }
    nav ul li a:hover {
        text-decoration: underline;
    }
    main {
        padding: 20px;
        margin-left: 250px;
    }
    .hamburger {
        display: block; /* Display the hamburger button */
        position: fixed;
        top: 10px;
        left: 10px;
        cursor: pointer;
        z-index: 9999; /* Ensure it's above other content */
    }
    .hamburger div {
        width: 25px;
        height: 3px;
        background-color: black;
        margin: 5px 0;
        transition: transform 0.3s ease;
    }
    
</style>
</head>
<body>

<header>
    <h1>Agri-Learn</h1>
    <div class="hamburger" onclick="toggleSidebar()">
        <div></div>
        <div></div>
        <div></div>
    </div>
</header>

<nav id="sidebar">
    <ul>
    <li>
        <a href="#home" style="color: black; display: inline-block;">
            <img src="home.png" style="width: 32px; height: 32px; vertical-align: middle;" alt="">
            <span style="margin-left: 10px;">Home</span>
        </a>
    </li>
    <li>
        <a href="#home" style="color: black; display: inline-block;">
            <img src="enroll.png" style="width: 32px; height: 32px; vertical-align: middle;" alt="">
            <span style="margin-left: 10px;">Enrolled</span>
        </a>
    </li>
    <li>
        <a href="#home" style="color: black; display: inline-block;">
            <img src="purchase.png" style="width: 32px; height: 32px; vertical-align: middle;" alt="">
            <span style="margin-left: 10px;">Purchase</span>
        </a>
    </li>
    </ul>
</nav>

<main>
    <h2>Main Content</h2>
    <p>This is the main content area of your webpage. You can put any content here.</p>
</main>

<script>
    function toggleSidebar() {
        var sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('open');
    }
</script>

</body>
</html>
