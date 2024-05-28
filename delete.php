<?php 
include 'header.php';

if(isset($_POST['deletebtn'])){

    // Check if 'sid' is set in the POST request
    if (isset($_POST['sid']) && !empty($_POST['sid'])) {
        $stu_id = $_POST['sid'];
    
        include 'config.php';

        // Connect to the database
        $conn = mysqli_connect("localhost", "root", "", "crud") or die("Connection failed");

        // Delete the record
        $sql = "DELETE FROM student WHERE sid = {$stu_id}";
        $result = mysqli_query($conn, $sql) or die("Query unsuccessful");

        // Close the connection
        mysqli_close($conn);

        // Redirect back to the main page after deletion
        header("Location: index.php");
        exit();
    } else {
        echo "No student ID provided.";
    }
}
?>

<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</body>
</html>
