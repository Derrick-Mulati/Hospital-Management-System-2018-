<?php
//remove the session created by the user
session_start();//activate php session
session_unset();// clear email set in session
session_destroy(); // kill the entire session variable
//after logout, proceed to login
header("location:index.php");





