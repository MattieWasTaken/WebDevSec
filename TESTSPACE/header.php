<!DOCTYPE html>
<?php
session_start();
error_reporting(0);
?>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <a class="navbar-brand" href="index.php">IMD Forums</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="createpost.php">Create A Post</a>
      </li>
      <?php 
      if(isset($_SESSION['username'])){
        $userid = $_SESSION['userid'];
        $username = $_SESSION['username'];
        echo "<a class='nav-link active' href='user.php?uid=$userid'>User: $username</a>";
        echo "<a class='nav-link active' href='logout.php'>Logout</a>";
    }else if(!isset($_SESSION['username'])){
      echo "<a class='nav-link active' href='login.php'>Login!</a>";
        echo "<a class='nav-link active' href='registration.php'>Register</a>";
    }
      
      ?>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="search.php">
      <input class="form-control mr-sm-2" type="text" name="search" id="" placeholder="Search..." aria-label="Search">
      <a href='search.php?search='id><button class="btn btn-light my-2 my-sm-0" type="submit">Search</button></a>
    </form>
  </div>
</nav>


</header>
</html>