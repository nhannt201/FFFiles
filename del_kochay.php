<?php
include("sql.php");
include("apis.php");
//$fd = "data_ipyou/";
if (isset($_GET['ipk'])) {
    $data = addslashes(base64_decode($_GET['ipk']));
    $ipk = getip();
  //  $ios = $fd.$data.".uid";
   // if (file_exists($ios)) {
   //     unlink($ios);
   // }
   //USE SQL
     $sql = "SELECT * FROM dataipyou WHERE ip='$ipk'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
$sql2 = "DELETE FROM dataipyou WHERE ip='$ipk'"; 
if (mysqli_query($conn, $sql2)) {}
}
   //END USE
}
?>