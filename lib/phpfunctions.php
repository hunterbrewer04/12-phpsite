<?php

function echoPost($name) 
{
    if (isset($_POST[$name]))
    echo htmlspecialchars($_POST[$name]);
}

function checkcredentials($group="None Specificed")
{
    if ( !isset( $_SESSION['username'] ) )
    {
    header("Location: 12login.php");
    }
}

function logout_processing()
{
    session_destroy();
}
?>
