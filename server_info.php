<?php 
    echo "<b>script name: </b>";
    echo $_SERVER['SCRIPT_NAME'];
    echo "<br>";
    echo "<b>server name: </b>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo "<b>hostname:port: </b>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo "<b>request user agent: </b>";
    echo $_SERVER['HTTP_USER_AGENT'];    
    echo "<br>";
    echo "<b>request method: </b>";
    echo $_SERVER["REQUEST_METHOD"];
?>