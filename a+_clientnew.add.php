<?php
include("sql.php");
if ((isset($_GET['yunika123567_a1a2xx33c55d5d5d'])) and (isset($_GET['kanichiwa_vinaoffVNSSSXzzz']))) {
    $myfile = addslashes(base64_decode($_GET['yunika123567_a1a2xx33c55d5d5d']));
    $mypass = addslashes(base64_decode($_GET['kanichiwa_vinaoffVNSSSXzzz']));
   // echo $myfile.'|'.$mypass;
  // $folder = "data_KFC/";
  //   $myfile1 = fopen($folder.$myfile.".uid", "w") or die("0");
//fwrite($myfile1, $mypass);
//fclose($myfile1);
$sql = "SELECT myfile FROM dataKFC WHERE myfile='$myfile'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
//    echo 'R';
$sql123 = "UPDATE dataKFC SET mypass='$mypass' WHERE myfile='$myfile'";

if (mysqli_query($conn, $sql123)) {
    echo "R";
}
 } else {
//echo 'a';
$sql2 = "INSERT INTO dataKFC (myfile, mypass)
VALUES ('$myfile', '$mypass')";

if (mysqli_query($conn, $sql2)) {
    echo "New";
} else {
    echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);
} 
?>