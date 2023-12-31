<?php
$fds = "data_otf/";
     include("sql.php");
if ((isset($_GET['stst123nguoiodauroihum'])) and (isset($_GET['id']))) {

      $myst = addslashes(base64_decode($_GET['id']));
    $myof = addslashes(($_GET['stst123nguoiodauroihum']));
   // echo $myfile.'|'.$mypass;
    // $myfile = fopen($fds.$myst.".uid", "w") or die("0");
//fwrite($myfile, $myof);
//fclose($myfile);
//echo $myof;
//USE SQL
 $sql_03 = "SELECT * FROM dataotf WHERE myfile='$myst'";
$result_03 = mysqli_query($conn, $sql_03);
if (mysqli_num_rows($result_03) > 0) { 
    $sqlup = "UPDATE dataotf SET mydata='$myof' WHERE myfile='$myst'";
if (mysqli_query($conn, $sqlup)) { echo $myof; }
} else {
$sql2_01 = "INSERT INTO dataotf (myfile, mydata)
VALUES ('$myst', '$myof')";

if (mysqli_query($conn, $sql2_01)) {echo $myof;}}
//END USE
} elseif (isset($_GET['idk'])) {
      $myof = addslashes(base64_decode($_GET['idk']));
//echo file_get_contents($fds.$myof.".uid");
 $sql04 = "SELECT * FROM dataotf WHERE myfile='$myof'";
$result = mysqli_query($conn, $sql04);
if (mysqli_num_rows($result) > 0) {
    $rowk = mysqli_fetch_assoc($result);
    echo $rowk["mydata"];
}
}
?>