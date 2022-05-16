<?php 
    session_start(); // Either it start a session or continue a previous one
    echo $_SESSION['name'];