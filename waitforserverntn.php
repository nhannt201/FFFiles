<?php
if ((isset($_GET['address'])) and (isset($_GET['pass']))) {
    include("sql.php");
    $id = addslashes(base64_decode($_GET['address']));
    $pass = addslashes(base64_decode($_GET['pass']));
  //  $fd = "data_cnect/";
//    $fileit = $fd.$id.".uid";
//if (file_exists($fileit)) {
 //  echo file_get_contents($fileit);
//} else {}
//USE SQL
  $sql_04 = "SELECT * FROM datacnect WHERE myfile='$id'";
$result_04 = mysqli_query($conn, $sql_04);
if (mysqli_num_rows($result_04) > 0) {
    $rowk = mysqli_fetch_assoc($result_04);
    echo $rowk['ippcname'];
}
//END USE
}
?>