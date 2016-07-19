<?php
if (isset($_POST["dir"]) && isset($_POST["image"])){
    include('../ImageSorter.class.php');
    $sorter = new ImageSorter();
    echo $sorter->moveImage($_POST["image"], $_POST["dir"]);
}else{
    echo json_encode(array('success' => true, 'state' => 'wrong_parameter', 'code' => 1));
}
