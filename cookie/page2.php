<?php 
    echo $_COOKIE['name'];

    setcookie('name', 'Hassan', time() - 3600); // we use this pattern to end an existing cookie.