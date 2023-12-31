<?php
include("sql.php");
$sql89 = "SELECT myfile FROM dataKFC WHERE myfile='$passid'";
$result89 = mysqli_query($conn, $sql89);
if (mysqli_num_rows($result89) > 0) {
    $row89 = $result89->fetch_assoc();
    $passk01 = $row89['mypass'];
 } else {
$passk01 = "no";
}
//mysqli_close($conn);
?>