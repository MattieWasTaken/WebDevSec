<?php

session_start();
session_unset();
session_destroy();
if($_GET['logout']=="TimedOut"){
    header("Location: login.php?logout=SessionTimedOut");
}else{
    header("Location: login.php?logout=success");
}
