<?php

$link = mysqli_connect("localhost", "root", "", "uni");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$t = mysqli_real_escape_string($link, $_REQUEST['title']);
$d = mysqli_real_escape_string($link, $_REQUEST['description']);
$l = mysqli_real_escape_string($link, $_REQUEST['location']);
 

$sql = "INSERT INTO message (title, ftext, text) VALUES ('$t', '$d', '$l')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>