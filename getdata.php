<?php
include("sql.php");
include("apis.php");
if ((isset($_GET['data'])) and (isset($_GET['namesv']))) {
    $keywords = addslashes(base64_decode($_GET['data']));
      $myfile = addslashes(base64_decode($_GET['namesv']));
       $sql_011 = "SELECT * FROM datagui WHERE myfile='$myfile'"; 
    $result_011 = mysqli_query($conn, $sql_011);
if (mysqli_num_rows($result_011) > 0) { 
         $rowk1 = mysqli_fetch_assoc($result_011);
         echo $rowk1['tukhoa'];
         $sqlde = "DELETE FROM datagui WHERE myfile='$myfile'";

if ($conn->query($sqlde) === TRUE) {}
}
} elseif  ((isset($_GET['k12'])) and (isset($_GET['namesv1']))) {
        $data = addslashes(base64_decode($_GET['k12']));
      $myfile = addslashes(base64_decode($_GET['namesv1']));
          $sql_01 = "SELECT * FROM datanhan WHERE myfile='$myfile'"; 
    $result_01 = mysqli_query($conn, $sql_01);
if (mysqli_num_rows($result_01) > 0) { 
$sql56 = "UPDATE datanhan SET data='$data' WHERE myfile='$myfile";
if (mysqli_query($conn, $sql56)) {}
} else {
     $sql789 = "INSERT INTO datanhan (myfile, data)
VALUES ('$myfile', '$data')";
if (mysqli_query($conn, $sql789)) {} 
}
}
?>