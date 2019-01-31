<?php
   // opens a new file to write to
    $data_file = fopen("text.txt", "w");
    
    $date = $_POST["date"];
    $role = $_POST["intern name"];
    $date = $_POST["grade level"];
    $date = $_POST["business unit"];
    $date = $_POST["evaluating partner"];
    $date = $_POST["date"];
    $date = $_POST["date"];
    $date = $_POST["date"];
    $date = $_POST["date"];
    $date = $_POST["date"];

// Write date to server side file
fwrite($data_file, $text_to_write);
fclose(data_file);

?>