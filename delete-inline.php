<?php
// Check if 'id' parameter is set in the URL
if (isset($_GET['id'])) {
    $stu_id = $_GET['id'];

    include 'config.php';
    // Connect to the database
     // Delete the record
    $sql = "DELETE FROM student WHERE sid = {$stu_id}";
    $result = mysqli_query($conn, $sql) or die("Query unsuccessful");

    // Close the connection
    mysqli_close($conn);

    // Redirect back to the main page after deletion
    header("Location: index.php");
} else {
    echo "No student ID provided.";
}
?>
