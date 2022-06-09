<?php
    $conn = mysqli_connect('localhost', 'root', '', 'myTest');
    if(!$conn) mysqli_connect_error("Error");
    $water = $_POST['water'];
    $date = $_POST['date'];
    $jury = $_POST['jury'];
    $query = "INSERT INTO `zawody_wedkarskie` VALUES (null,0,'$water','$date','$jury')";
    mysqli_query($conn, $query);
    mysqli_close($conn);
    header("location: zawody.html");
?>