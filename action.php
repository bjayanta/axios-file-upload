<?php
$response = [];
$name = str_replace(' ', '-', strtolower($_POST["name"]));
$file = $_FILES["file"]["name"];
$temp = $_FILES["file"]["tmp_name"];
$extn = strtolower(pathinfo($file, PATHINFO_EXTENSION));
$path = "upload/" . $name . '.' . $extn;

if(move_uploaded_file($temp, $path)) {
    $response = [
        "code" => "OK",
        "message" => "File uploaded."
    ];
} else {
    $response = [
        "code" => "ERROR",
        "message" => "File upload failed."
    ];
}

echo json_encode($response);
?>