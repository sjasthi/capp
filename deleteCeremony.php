<?php
/**
 * Created by PhpStorm.
 * User: Sandip
 * Date: 9/29/2018
 * Time: 12:45 AM
 */
include_once 'db_configuration.php';

if (isset($_GET['name'])){

    $name = mysqli_real_escape_string($db, $_GET['name']);


    $sql = "DELETE FROM ceremonies
            WHERE name = '$name'";

    mysqli_query($db, $sql);
    header('location: index.php?CeremonyDeleted=Success');
}//end if
?>

