<?php
$fd = "data_time/";
$fb = "data_time_c/";
    include("sql.php");
if (isset($_GET['id'])) {
    $data = addslashes(base64_decode($_GET['id']));
  //  $filep = $fd.$data.".uid";
  //  $luado = file_get_contents($filep);
  //  $luado = $luado + 1;
  //Laydata
   $sql_04 = "SELECT * FROM datatime WHERE myfile='$data'";
$result_04 = mysqli_query($conn, $sql_04);
if (mysqli_num_rows($result_04) > 0) { 
        $rowk2 = $result_04->fetch_assoc();
        $luado = $rowk2['data'];
        $luado = $luado + 1;
}
  //End lay de +
    //if (file_exists($fd.$data.".uid")) {
    if (mysqli_num_rows($result_04) > 0) { 
        //  $myfile1 = fopen($filep, "w") or die("0");
      //  fwrite($myfile1, $luado);
      //  fclose($myfile1); 
       // echo file_get_contents($filep);
       //USE SQL
         $sql_05 = "SELECT  * FROM datatime WHERE myfile='$data'";
$result_05 = mysqli_query($conn, $sql_05);
if (mysqli_num_rows($result_05) > 0) { 
  $sql_up4 = "UPDATE datatime SET data='$luado' WHERE myfile='$data'";
if (mysqli_query($conn, $sql_up4)) {}
}
       //END USE
        if ($luado >= 5) {
            echo 'off0';
         //   $fds = "data_otf/";
          //       $myfile0 = fopen($fds.$data.".uid", "w") or die("0");
//fwrite($myfile0, "off");
//fclose($myfile0);
//USE SQL
   $sql_051 = "SELECT  * FROM dataotf WHERE myfile='$data'";
$result_051 = mysqli_query($conn, $sql_051);
if (mysqli_num_rows($result_051) > 0) { 
  $sql_up41 = "UPDATE dataotf SET mydata='off' WHERE myfile='$data'";
if (mysqli_query($conn, $sql_up41)) {}
}
//END USE SQL
        }
           
    } else {
      //    $filep = $fd.$data.".uid";
       //   $myfile1 = fopen($filep, "w") or die("0");
       // fwrite($myfile1, "0");
      //  fclose($myfile1); 
      //  file_get_contents($filep);
      //USE SQL
       $sql_06 = "SELECT * FROM datatime WHERE myfile='$data'";
$result_06 = mysqli_query($conn, $sql_06);
if (mysqli_num_rows($result_06) > 0) {  
    $sql_up6 = "UPDATE datatime SET data='0' WHERE myfile='$data'";
if (mysqli_query($conn, $sql_up6)) { echo "0";} } else {
    $sql012 = "INSERT INTO datatime (myfile, data)
VALUES ('$data', '0')";
if (mysqli_query($conn, $sql012)) {
}
}
      //END USE
    }
} elseif (isset($_GET['reset'])) {
   // if ($_GET['reset'] == "abc") {
   $data = base64_decode($_GET['reset']);
        // $filep = $fd.base64_decode($_GET['reset']).".uid";
        //   $myfile1 = fopen($filep, "w") or die("0");
       // fwrite($myfile1, "0");
       // fclose($myfile1); 
       //USE SQL
        $sql_06 = "SELECT * FROM datatime WHERE myfile='$data'";
$result_06 = mysqli_query($conn, $sql_06);
if (mysqli_num_rows($result_06) > 0) {  
    $sql_up6 = "UPDATE datatime SET data='0' WHERE myfile='$data'";
if (mysqli_query($conn, $sql_up6)) {} } else {
     $sql012 = "INSERT INTO datatime (myfile, data)
VALUES ('$data', '0')";
if (mysqli_query($conn, $sql012)) {
}
}
       //END USE
   // }
}
//den phan cua cai khac
elseif (isset($_GET['s1'])) {
    $fileo = addslashes(base64_decode($_GET['s1']));
   // $filene = $fb.$fileo.".uid";
   //USE SQL
       $sql_04 = "SELECT * FROM datatimec WHERE myfile='$fileo'";
$result_04 = mysqli_query($conn, $sql_04);
if (mysqli_num_rows($result_04) > 0) {
    //if (file_exists($filene)) {
        $rowk2 = mysqli_fetch_assoc(($result_04));
        $so1 = $rowk2['data'];
        $so1 = $so1 + 1;
        //dem so trc
        if (($so1) >= 5) {
            echo '12345';
          //  unlink($filene);
          $sql_007 = "DELETE FROM datatimec WHERE myfile='$fileo'"; 
if (mysqli_query($conn, $sql_007)) {}
        } else {
          //  $myfile1 = fopen($filene, "w") or die("0");
       // fwrite($myfile1, $so1);
    //    fclose($myfile1); 
    //USE SQL
     $sql_up7 = "UPDATE datatimec SET data='$so1' WHERE myfile='$fileo'";
if (mysqli_query($conn, $sql_up7)) {}
    //END USE
        }
        //end dem so
         
    } else {
        echo 'no';
          // $myfile1 = fopen($filene, "w") or die("0");
       // fwrite($myfile1, "0");
       // fclose($myfile1); 
    }
} //reset cai s1 
elseif (isset($_GET['s2'])) {
      $fileo = addslashes(base64_decode($_GET['s2']));
      // $filene = $fb.$fileo.".uid";
      // $myfile1 = fopen($filene, "w") or die("0");
      //  fwrite($myfile1, "0");
        //fclose($myfile1); 
        //USE SQL
            $sql_06 = "SELECT * FROM datatimec WHERE myfile='$fileo'";
$result_06 = mysqli_query($conn, $sql_06);
if (mysqli_num_rows($result_06) > 0) {  
    $sql_up7 = "UPDATE datatimec SET data='$so1' WHERE myfile='$fileo'";
if (mysqli_query($conn, $sql_up7)) {} 
} else {
    $sql123 = "INSERT INTO datatimec (myfile, data)
VALUES ('$fileo', '0')"; if (mysqli_query($conn, $sql123)) {}
}
        //END USE
}

?>