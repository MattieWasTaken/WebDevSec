<?php

session_start();
session_unset();
session_destroy();
if($_GET['logout']=="TimedOut"){
    header("Location: index.php?logout=SessionTimedOut");
}else{
    header("Location: index.php?logout=success");
}
