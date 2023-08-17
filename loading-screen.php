<!DOCTYPE html>
<html>
<head>
<style>
body {
    width: 100%;

  background-image: url('loading-bg.png');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: 100% 100%;
 
}
#myProgress {
  width: 100%;
  background-color: #808080;



}

#myBar {
  width: 10%;
  height: 40px;
  background-color: #8B8000;
  text-align: center;
  line-height: 30px;
  color: white;
  position: absolute;
  bottom: 0;
  
 
}

</style>
</head>
<body>




<div id="myProgress">
  <div id="myBar">10%</div>
</div>


<script>


window.onload=function(){
    move();
};

var i = 0;
function move() {
  if (i == 0) {
    i = 1;
    var elem = document.getElementById("myBar");
    var width = 10;
    var id = setInterval(frame, 90);
    function frame() {
      if (width >= 100) {
        clearInterval(id);
        i = 0;
      } else {
        width++;
        elem.style.width = width + "%";
        elem.innerHTML = width  + "%";
      }
    }
  }
}
</script>

</body>
</html>