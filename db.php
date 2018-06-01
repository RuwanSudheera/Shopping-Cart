<?php
/**
 * Created by IntelliJ IDEA.
 * User: Ruwan Sudheera
 * Date: 5/26/2018
 * Time: 22:49
 */

    $servername = "localhost";
    $username = "root";
    $password ="";
    $db = "greenworld";

    //create connection
    $con = mysqli_connect($servername, $username, $password, $db);

    //check connection
    if(!$con){
        die("Connection failed: ". mysqli_connect_error());
    }

?>