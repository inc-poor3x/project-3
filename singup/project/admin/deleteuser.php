<?php
include 'include.php';
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $data =$_GET['id'];

    if (!empty($data)) {
       

        $sql = "DELETE FROM users WHERE Id = $data";

        if ($conn->query($sql) === TRUE) {
            echo json_encode(array("message" => "user record deleted successfully."));
        } else {
            echo json_encode(array("error" => "Error: " . $conn->error));
        }
    } else {
        echo json_encode(array("message" => "No data provided for deletion."));
    }
} else {
    echo json_encode(array("error" => "Invalid request method. Please use POST method."));
}
header("location:usera.html");

$conn->close();
?>
