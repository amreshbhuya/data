<?php

echo $stu_name = $_POST['sname'];
echo $stu_address = $_POST['saddress'];
echo $stu_class = $_POST['class'];
echo $stu_phone = $_POST['sphone'];


include 'config.php';
$sql = "INSERT INTO student(sname , saddress,sclass,sphone) VALUES ('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";
$result = mysqli_query($conn,$sql) or die("query unsuccessfull");

header("Location: index.php");
mysqli_close($conn);

?>

