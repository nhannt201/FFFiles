
<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<title>Công cụ tìm kiếm Key phần mềm</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Công cụ tìm kiếm Key Offline, công cụ tra cứu Key trực tuyến an toàn và bảo mật. Hoạt động luân phiên theo máy chủ.">
<meta name="keywords" content="công cụ tìm key, get key, key active, bẻ khoá, crack phần mềm, tìm key, tìm crack">
<meta name="author" content="Nguyễn Trung Nhẫn">
<link href="//getbootstrap.com.vn/dist/css/bootstrap.min.css" rel="stylesheet">
<script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script type='text/javascript' src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script type='text/javascript' src='data.js'></script>
</head>
<body class="container">
    <?php
include("apis.php");
include("sql.php");
//$file ="data_ipyou/".getip().".uid" ;
//if (file_exists($file)) {
  //  echo file_get_contents($file);
//}
$myip_01 = getip();
  $sql_01 = "SELECT * FROM dataipyou WHERE ip='$myip_01'"; 
  $result_01 = mysqli_query($conn, $sql_01);
if (mysqli_num_rows($result_01) > 0) { 
    $rowk = mysqli_fetch_assoc($result_01);
   // echo $rowk['myname'];

?>
           <div class="text-center"><h1>Find Friends File</h1><p>Tìm kiếm tập tin bạn bè, trang này chỉ hiển thị đối với bạn.</p></div>
   <div   style=" margin-top:5%;" >

    <div class="row">
    
  <div class="panel panel-default">
  <div class="panel-heading">Client FFFiles của bạn đang phục vụ tìm kiếm.</div>
  <div class="panel-body">
      <div class="text-center"><h4>Bây giờ hãy bắt đầu tìm tệp <b>bạn cần</b> từ máy bạn.</h4>
    <div  class="navbar-form" role="search">
        <div class="form-group" >
          <input type="text" class="form-control" style="min-width: 350px;" name="whatkey" id="whatkey" placeholder="Nhập tên tệp cần tìm,v.v...">
        </div>
        <button type="submit" class="btn btn-default"  onclick="CT_Goto_Look()">Tìm ngay!</button>
      </div>
     <!--<div class="text-center">--><p id="rs_key"></p><!--</div>-->

  
    </div>
</div> </div>
</div>
<?php } else {
echo '   <div class="text-center"><h1>Find Friends File</h1><p>Công cụ tìm kiếm tệp tin từ bạn bè!</p></div>
   <div   style=" margin-top:5%;" >';
}?>
 <!--<div class="row">
   
 

           <div class="panel panel-default">
  <div class="panel-heading">Bình luận - Ý kiến:</div>
  <div class="panel-body">
   <div class="fb-comments" data-href="http://fff.luutru360.com/" data-numposts="10" data-width="100%"></div>
    </div></div>
   
    
        </div></div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10&appId=110114732987890";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>-->
</body>
</html>