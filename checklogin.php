<?php

    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    session_start();
    echo "'$username'" . "<br>";
    echo "'$password'" . "<br>";
    if ($username == 'user' && $password == 'secret')
    {
        echo "In True Block";
        $_SESSION['login'] = $username;
        $goto = "Location: indexADM.htm";  //This is our landing page
    } else {
        echo "In False Block";
        $_SESSION['login'] = '';
	    $ref = getenv("HTTP_REFERER");     //This is the referrer page -- the login form
	    $goto = "Location: " . $ref;
    }	

    echo "Session Login Value = " . $_SESSION['login'] . "<br>";
    header($goto);
?>
