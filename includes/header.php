<?php
session_start();
include 'cdn.php';
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Tea Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="./">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Tea List
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="teaListOne.php">Tea 1</a>
              <a class="dropdown-item" href="teaListTwo.php">Tea 2</a>
              <a class="dropdown-item" href="teaListThree.php">Tea 3</a>
          </div>
      </li>
      <?php 
    //session_start();
      if(isset($_SESSION['user_email']))
        { //session_start();
        // echo "string if";
         ?>
         <li class="nav-item">
            <a class="nav-link " href="logout.php">Logout</a>
        </li>
    <?php } else {  //echo "string else";
    ?>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Action
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

            <a class="dropdown-item" href="login.php">Login</a>
            <a class="dropdown-item" href="register.php">Register</a>

        </div>
    </li>


<?php } ?>
<li class="nav-item">
    <a class="nav-link " href="#">About Us</a>
</li>

<li class="nav-item">
    <a class="nav-link " href="#">Contact Us</a>
</li>
</ul>

</div>
</nav>