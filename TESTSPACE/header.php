<!DOCTYPE html>
<?php
session_start();
date_default_timezone_set('Australia/Sydney');
if(isset($_SESSION['lastLogin'])){
  if((time() - $_SESSION['lastLogin']) > 1800){
    header("Location: logout.php?logout=TimedOut");
  }else {
    $_SESSION['lastLogin'] = time();
  }
}

error_reporting(0);
?>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
<img src="https://i.ibb.co/894Xm19/278471543-727015038329277-2731362503377802712-n.png" alt="Site-Logo" style="height:50px;width:50px;margin-left:0px;margin-right:10px">
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
        echo "<a class='nav-link active' href='user.php?user_id=$username&display=posts'>User: $username</a>";
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