<?php session_start(); ?>
<nav>
    <div class="nav-container"> 
        <div class="nav-subcontainer">
            <div class="burger" onclick="toggleBurger()">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <p>CS PHARMACY</p>

            
        </div>  

        <ul class="menu">
            <li><a href=".">Home</a></li>
            <li><a href="products.php">Products</a></li>

            <?php if ($_SESSION["role"] === "admin") : ?>
                <li><a href="product-manager.php">Manage Products</a></li>
                <li><a href="users.php">Manage Users</a></li>
            <?php endif ?>

            <?php if (!empty($_SESSION["username"])) : ?>
                <li><a href="order.php">Orders</a></li>
            <?php endif ?>

            
            <li>
                <div class="dropdown">
                    <button class="dropdown-btn">Pages</button>
                    <ul class="dropdown-content">
                        <li><a href="lab7.php">Lab 7</a></li>
                        <li><a href="ws1.php">Workshop 1</a></li>
                        <li><a href="ws2.php">Workshop 2</a></li>
                        <li><a href="ws3.php">Workshop 3</a></li>
                        <li><a href="ws4.php">Workshop 4</a></li>
                        <li><a href="ws5.php">Workshop 5</a></li>
                        <li><a href="ws6.php">Workshop 6</a></li>
                        <li><a href="ws7.php">Workshop 7</a></li>
                        <li><a href="ws8.php">Workshop 8</a></li>
                        <li><a href="ws9.php">Workshop 9</a></li>
                    </ul>
                </div>
            </li>

            <?php if (!empty($_SESSION["username"])) : ?>
                <li><a href="user-home.php" style="display:flex; align-items:center; gap: 5px; color:black">
                    <img src="images/member_photo/<?=$_SESSION["username"]?>.jpg" width="50" height="50" style="border-radius: 100%;">
                    <?=$_SESSION["username"]?>
                </a></li>
            <?php endif ?>
            
        </ul>

        <?php if (empty($_SESSION["username"])) : ?>
            <div class="login-btn" style="color:white;">
                <a href="login-form.php">Login</a>
            </div>
        <?php else : ?>
            <div class="login-btn" style="color:white;">
                <a href="php/logout.php">Logout</a>
            </div>
        <?php endif ?>
        
        
    </div>

</nav>