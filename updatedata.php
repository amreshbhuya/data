<?php
$stu_id = $_POST['sid'];
echo $stu_name = $_POST['sname'];
echo $stu_address = $_POST['saddress'];
echo $stu_class = $_POST['sclass'];
echo $stu_phone = $_POST['sphone'];


include 'config.php';

$sql = "UPDATE student SET sname= '{$stu_name}', saddress ='{$stu_address}' , sclass= '{$stu_class}' ,sphone= '{$stu_phone}' WHERE   sid = {$stu_id} ";
$result = mysqli_query($conn,$sql) or die("query unsuccessfull");

header("Location: index.php");
mysqli_close($conn);

?>

