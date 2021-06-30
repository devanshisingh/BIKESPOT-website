<?php
    $connection = new mysqli('localhost', 'root', '', 'sahu_website');
    if($connection -> connect_error)
    {
        die("Connection Failed".$connection -> connect_error);
    }
?>