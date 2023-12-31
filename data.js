function CT_Goto_Look() {
        document.getElementById('rs_key').innerHTML = 'Đang yêu câu máy bạn...';
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      if (this.responseText.length <= 0) {
          document.getElementById("rs_key").innerHTML =
      "Đang tìm kiếm...Bạn đợi trong giây lát!"
      myVar = setTimeout(CT_Goto_Look, 2000);
      } else {       document.getElementById("rs_key").innerHTML =
      this.responseText; }
    }
     if (this.readyState == 4 && this.status == 404) {
       myVar = setTimeout(CT_Goto_Look, 2000);
     } else {
         
     }
  };
   var whatkey = document.getElementById('whatkey').value;
    
    xhttp.open("GET", "metoo.php?q=" + whatkey, true);
  xhttp.send();
}
