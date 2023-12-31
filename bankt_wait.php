<?php
//kiem tra tra lai ket noi thanh cong hay ko
    $fd = "data_wait/";
     include("sql.php");
//danh cho client ban tra ve trc
if ((isset($_GET['address'])) and (isset($_GET['pass'])) and (isset($_GET['pc_name']))) {
    $id = addslashes(base64_decode($_GET['address']));
    $pass = addslashes(base64_decode($_GET['pass']));
    $pc_name = addslashes(base64_decode($_GET['pc_name']));
   /// $filek = $fd.$id.".uid";
   // if (file_exists($filek)) {echo file_get_contents($filek); }else {
   //        $dbs = "chophep".$pc_name;
   //   $myfile = fopen($filek, "w") or die("0");
   //     fwrite($myfile, $dbs);
   //     fclose($myfile);
//echo $dbs;
 //   }
 //Use SQL
 $sql_03 = "SELECT * FROM datawait WHERE myfile='$id'";
$result_03 = mysqli_query($conn, $sql_03);
if (mysqli_num_rows($result_03) > 0) { echo 'chophep'.$pc_name; } else {
    $cpks = 'chophep'.$pc_name;
$sql2_01 = "INSERT INTO datawait (myfile, data)
VALUES ('$id', '$cpks')";

if (mysqli_query($conn, $sql2_01)) {echo 'chophep'.$pc_name;}}
 //end SQL
} elseif (isset($_GET['idk'])) {
        $id = addslashes(base64_decode($_GET['idk']));
        //  $fd = "data_wait/";
   // $filek = $fd.$id.".uid";
    //if (file_exists($filek)) {echo file_get_contents($filek); }else { }
    //use sql
     $sql_04 = "SELECT * FROM datawait WHERE myfile='$id'";
$result_04 = mysqli_query($conn, $sql_04);
if (mysqli_num_rows($result_04) > 0) {
    $rowk = mysqli_fetch_assoc(($result_04));
    echo $rowk['data'];
}
    //end use2
} elseif (isset($_GET['denghi'])) {
       $id = addslashes(base64_decode($_GET['denghi']));
     //   $filek = $fd.$id.".uid";
    //   if (file_exists($filek)) { unlink($filek); }
    //Use SQL
    
     $sql_05 = "SELECT * FROM datawait WHERE myfile='$id'";
$result_05 = mysqli_query($conn, $sql_05);
if (mysqli_num_rows($result_05) > 0) {
$sql_007 = "DELETE FROM datawait WHERE myfile='$id'"; 
if (mysqli_query($conn, $sql_007)) {}
}
    //end USE 3
} elseif (isset($_GET['ngatdi'])) {
       $id = addslashes(base64_decode($_GET['ngatdi']));
      //  $filek = "data_cnect/".$id.".uid";
    //   if (file_exists($filek)) {     
     //      $myfile1 = fopen($filek, "w") or die("0");
      //  fwrite($myfile1, "offr");
      //  fclose($myfile1); 
     //  } 
     //USE SQL
       $sql_06 = "SELECT * FROM datacnect WHERE myfile='$id'";
$result_06 = mysqli_query($conn, $sql_06);
if (mysqli_num_rows($result_06) > 0) {
$sql_008 = "UPDATE datacnect SET ippcname='offr' WHERE myfile='$id'";
if (mysqli_query($conn, $sql_008)) {}
}
     //END SQL 4
}
elseif (isset($_GET['ngatdi2'])) {
       $id = addslashes(base64_decode($_GET['ngatdi2']));
     //   $filek = "data_cnect/".$id.".uid";
      // if (file_exists($filek)) {   echo  file_get_contents($filek); } 
        $sql_09 = "SELECT * FROM datacnect WHERE myfile='$id'";
$result_09 = mysqli_query($conn, $sql_09);
if (mysqli_num_rows($result_09) > 0) {
    $rowk2 = mysqli_fetch_assoc(($result_09));
    echo $rowk2['ippcname'];
}
}
?>