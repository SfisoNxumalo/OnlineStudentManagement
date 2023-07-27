<?php
session_start();
//to ensure you are using same session
if(isset($_SESSION['Lusername']) )
{
    session_destroy(); //destroy the session
    echo "Logged out. Go back <a href= '/'>home</a>";


    header( "Refresh:2; url=index.php", true, 303);//to redirect back to "index.php" after logging out
    //exit();
}
else
{
    echo "You are not authorized to view this page. Go back <a href= '/'>home</a>";
}
?>