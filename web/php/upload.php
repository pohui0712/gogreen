<?php
include 'dbConn.php';

// If file upload form is submitted 
$status = $statusMsg = '';
if (isset($_POST["submit"])) {
    $status = 'error';
    if (!empty($_FILES["image"]["name"])) {
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]);
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

        // Allow certain file formats 
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
        if (in_array($fileType, $allowTypes)) {
            $image = $_FILES['image']['tmp_name'];
            $imgContent = addslashes(file_get_contents($image));
            $programName = $_POST['programName'];
            $programDate = $_POST['programDate'];
            $programTime = $_POST['programTime'];
            $programLocation = $_POST['programLocation'];
            $programDescription = $_POST['programDescription'];

            // Insert image content into database 
            $insert = $connection->query("INSERT into program (image, name, date, time, location, description, created) VALUES ('$imgContent', '$programName', '$programDate', '$programTime', '$programLocation', '$programDescription', NOW())");

            if ($insert) {
                $status = 'success';
                echo '<script>
                alert("Program added successfully!!");
                location.href = "../admin.php#";
                </script>';
            } else {
                $statusMsg = "File upload failed, please try again.";
                echo '<script>
                alert("File upload failed, please try again.");
                location.href = "../admin.php?error=imageTooBig";
                </script>';
            }
        } else {
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
            echo '<script>
            alert("Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.");
            location.href = "../admin.php?error=invalidImageType";
            </script>';
        }
    } else {
        $statusMsg = 'Please select an image file to upload.';
        echo '<script>
        alert("Please select an image file to upload.");
        location.href = "../admin.php?error=noneSelect";
        </script>';
    }
}
?>