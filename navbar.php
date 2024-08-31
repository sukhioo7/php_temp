<div class='header'>
    <h3> <span class='logo-img'><ion-icon name="fitness"></ion-icon></span>MaxFit</h3>
    <div class='nav-links'>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact Us</a>
        <a href="blogs.php">Blogs</a>
        <a href="blog_form.php">Add Blogs</a>
        <a href="patients.php">Services</a>
    </div>
    <div class="log-sign">
        <?php
            session_start();
            if (isset($_SESSION['admin_id'])){
        ?>       
            <a id="logout" href="logout.php">Logout</a>
        <?php
            }else{
        ?>
            <a href="login.php">Login</a>
            <a href="signup.php">Signup</a>
        <?php
            }
        ?>
    </div>
</div>