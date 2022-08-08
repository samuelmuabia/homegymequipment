<?php
require_once('config.php');
?>


<?php

//select values from visitor_counter table
$sql     = "SELECT * FROM visitors_counter";
$result  = mysqli_query($conn, $sql);
$row     = mysqli_fetch_array($result);
$counter = $row['counter'];

// setting counter = 1, if we have no counts value
if (empty($counter)) {
    $counter = 1;
    $sql1    = "INSERT INTO visitors_counter(`counter`) VALUES('$counter')";
    $result1 = mysqli_query($conn, $sql1);
}



// Incrementing counts value
$plus_counter = $counter + 1;
$sql2         = "update visitors_counter set counter='$plus_counter'";
$result2      = mysqli_query($conn, $sql2);

mysqli_close($conn);
?>
