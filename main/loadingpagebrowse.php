<html>
<?php
    if(isset($_POST['test1'])){
        // echo "here";
      copy("RecentPeople/img1.jpeg", "Database/InputImage/img.jpeg"); 
    }
    if(isset($_POST['test2'])){
        // echo "here";
      copy("RecentPeople/img2.jpeg", "Database/InputImage/img.jpeg"); 
    }
    if(isset($_POST['test3'])){
        // echo "here";
      copy("RecentPeople/img3.jpeg", "Database/InputImage/img.jpeg"); 
    }
    if(isset($_POST['test4'])){
        // echo "here";
      copy("RecentPeople/img4.jpeg", "Database/InputImage/img.jpeg"); 
    }
    if(isset($_POST['test5'])){
        // echo "here";
      copy("RecentPeople/img5.jpeg", "Database/InputImage/img.jpeg"); 
    }
    if(isset($_POST['test6'])){
        // echo "here";
      copy("RecentPeople/img6.jpeg", "Database/InputImage/img.jpeg"); 
    }
?>
<script>
	(function() {
                fetch('executor.php');
            })();
	</script>
<head>	
	<meta http-equiv="refresh" content="45;url=single1.php">
	<link href="css/style.css" rel="stylesheet">
</head>
<body onload="javascript:move()">
	<!-- <h1>Please Wait! God's Eye is Analyzing Video Footage..</h1> -->
	<div id="myProgress">
  			<div id="myBar" >10%</div>
	</div>
	<script>
			var i = 0;
function move() {
  if (i == 0) {
    i = 1;
    var elem = document.getElementById("myBar");
    var width = 10;
    var id = setInterval(frame, 440);
    function frame() {
      if (width >= 100) {
        clearInterval(id);
        i = 0;
      } else {
        width++;
        elem.style.width = width + "%";
        elem.innerHTML = width + "%";
      }
    }
  }
}
		</script>
	<img height = 100% width = 100% src = "img/loading.gif">

 ?> -->
</body>

</html>