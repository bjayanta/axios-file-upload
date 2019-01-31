<?php
// for response data
$response = [];
// get form data
$name = str_replace(' ', '-', strtolower($_POST["name"]));
$file = $_FILES["file"]["name"];
$temp = $_FILES["file"]["tmp_name"];
$extn = strtolower(pathinfo($file, PATHINFO_EXTENSION));
// set file upload destination
$path = "upload/" . $name . '.' . $extn;

// upload the file
if(move_uploaded_file($temp, $path)) {
    // set response for success
    $response = [
        "code" => "OK",
        "message" => "File uploaded."
    ];
} else {
    // set response for error
    $response = [
        "code" => "ERROR",
        "message" => "File upload failed."
    ];
}

// response data as json string
echo json_encode($response);
?>