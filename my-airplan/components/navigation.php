<?php $id = $_GET["id"]; ?>
<header>
    <div id="header">
        <div id="logo_img_div">
            <img src="assets/images/airplan_logo_border.png" alt="logo" id="logo_img">
        </div>
        <div id="logo">
            <p id="airplan">My Airplan</p>
        </div>   
        <nav class="navigation">
            <a href="../main.php?id=<?php echo $id ?>" class="nav_link">My flights</a>
            <a href="#" class="nav_link">Settings</a>
        </nav>
    </div>
    <script src="../assets/js/navigation.js"></script>
</header>

