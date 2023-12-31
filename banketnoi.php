<?php
//danh cho client ban tra ve trc
    include("apis.php");
    include("sql.php");
if ((isset($_GET['address'])) and (isset($_GET['pass'])) and (isset($_GET['pc_name']))) {
    $id = addslashes(base64_decode($_GET['address']));
    $pass = addslashes(base64_decode($_GET['pass']));
    $pc_name = addslashes(base64_decode($_GET['pc_name']));
    $passid = $id;
   // include("passid.php");
   $sql89 = "SELECT * FROM dataKFC WHERE myfile='$passid'";
$result89 = mysqli_query($conn, $sql89);
if (mysqli_num_rows($result89) > 0) {
    $row89 = $result89->fetch_assoc();
    $passk01 = $row89['mypass'];
   // echo $passk01;
    //echo '|';
  //  echo $pass;
 } else {
$passk01 = "no";
}
    //$fd = "data_KFC/";
    //  $fileit = $fd.$id.".uid";
  //  if ($passk01 == "no") {
   //   echo 'fail';
   //  } else {
  
//if (file_exists($fileit)) {
   //$passi = file_get_contents($fileit);
   $dataoo = getip()."|".$pc_name;
   if ($passk01 == $pass) {
       // $myfile = fopen("data_cnect/".$id.".uid", "w") or die("0");
      //  fwrite($myfile, getip()."|".$pc_name);
       // fclose($myfile);
       $sql = "SELECT myfile FROM datacnect WHERE myfile='$id'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) { 
//update
    $sql_0081 = "UPDATE datacnect SET ippcname='$dataoo' WHERE myfile='$id'";
if (mysqli_query($conn, $sql_0081)) {}
//endup
} else {
$sql2 = "INSERT INTO datacnect (ippcname, myfile)
VALUES ('$dataoo', '$id')";

if (mysqli_query($conn, $sql2)) { } else { }
}

//
         // $myfile = fopen("data_ipyou/".getip().".uid", "w") or die("0");
      //  fwrite($myfile, $pc_name);
      //  fclose($myfile);
      //add ip cho ban
       // fclose($myfile);
       $myip_011 = getip();
       $sql_011 = "SELECT * FROM dataipyou WHERE ip='$myip_011'"; 
       $result_011 = mysqli_query($conn, $sql_011);
if (mysqli_num_rows($result_011) > 0) {  } else { $data_01 = $pc_name; 
$sql_02 = "INSERT INTO dataipyou (ip, myname, myfile) VALUES ('$myip_011', '$data_01', '$id')"; if (mysqli_query($conn, $sql_02)) { } else { }}
      //end add
   } else {
       echo 'fail';
   }
//} else {
    
//}
//}
}
?>