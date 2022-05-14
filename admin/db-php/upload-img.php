<?php
// Include the database configuration file
include 'dbConfig.php';
$statusMsg = '';
// File upload path
$targetDir = "uploads/";
$fileName = '';
$targetFilePath = '';
$fileType = '';

if (isset($_POST["upload-button"]) && !empty($_FILES["file"]["name"]) && !empty($_POST["title"])) {
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
    $name = $_POST["title"];
    // Allow certain file formats
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
    if (in_array($fileType, $allowTypes)) {
        // Upload file to server
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
            // Insert image file name into database
            $insert = $db->query("INSERT into calrouselimg (id, name, file_name, uploaded_on, status) VALUES (NULL,'" . $name . "','" . $fileName . "', NOW(),0)");
            if ($insert) {
                $statusMsg = "The file " . $fileName . " has been uploaded successfully.";
            } else {
                $statusMsg = "File upload failed, please try again.";
            }
        } else {
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    } else {
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
} else {
    $statusMsg = 'Please select a file to upload.';
}
// Display status message
// echo $statusMsg;
// echo "<script type='text/javascript'>alert('$statusMsg');</script>";
$statusMsg = '';
$fileName = '';
$targetFilePath = '';
$fileType = '';
