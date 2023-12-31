<?php
include("sql.php");
include("apis.php");
if (isset($_GET['q'])) {
    $keywords = addslashes($_GET['q']);
    $myip_01 = getip();
    $sql_01 = "SELECT * FROM dataipyou WHERE ip='$myip_01'"; 
    $result_01 = mysqli_query($conn, $sql_01);
if (mysqli_num_rows($result_01) > 0) { 
    $row = mysqli_fetch_assoc($result_01);
 $myfile = $row['myfile'];
     //CHECK DATA co chua
     $sql_03 = "SELECT * FROM datanhan WHERE myfile='$myfile'"; 
    $result_03 = mysqli_query($conn, $sql_03);
    if (mysqli_num_rows($result_03) > 0) { 
          $rowk = mysqli_fetch_assoc($result_03);
          echo $rowk['data'];
         // $sql1234 = "UPDATE datagui SET tukhoa='' WHERE myfile='$myfile'";
//if (mysqli_query($conn, $sql1234)) {}
$sqlde = "DELETE FROM datanhan WHERE myfile='$myfile'";
$sqlde2 = "DELETE FROM datagui WHERE myfile='$myfile'";

if ($conn->query($sqlde) === TRUE) {}
if ($conn->query($sqlde2) === TRUE) {}
    } else {
    //END CHECK
 //check
  $sql_02 = "SELECT * FROM datagui WHERE myfile='$myfile'"; 
    $result_02 = mysqli_query($conn, $sql_02);
    if (mysqli_num_rows($result_02) > 0) {  
$sql123 = "UPDATE datagui SET tukhoa='$keywords' WHERE myfile='$myfile'";

if (mysqli_query($conn, $sql123)) {}
    } else {
 //end check
      $sql = "INSERT INTO datagui (myfile, tukhoa)
VALUES ('$myfile', '$keywords')";
if (mysqli_query($conn, $sql)) {} 
} } }


}
?>