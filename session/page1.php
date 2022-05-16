<?php 
    # A session start when you start it and end when you close the browser
    session_start(); // Start a session

    $_SESSION['name'] = "Motasem Abu Nema";



    /*
    SESSION vs. COOKIE
    1. Session starts when the function session_start() has been called, while cookie start when setcookie() called.
    2. Session ends when we close the browser or when session_destroy() function called, while cookie ends when it reaches the time we declared.
    3. We can use session_unset() function to clear all the values of an existing session, while session_destroy() we use it when we want to end the session at all.
    4. We usually use session for login, and cookie for remember me button.
    */