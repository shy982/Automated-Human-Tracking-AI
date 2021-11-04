<html>
<?php
                error_reporting(0);
                $target_dir = "Database/InputImage/";
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                if(isset($_POST["submit"])) {
                  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                  if($check !== false) {
                    $uploadOk = 1;
                  } else {
                    $uploadOk = 0;
                  }
                }

                // Check if file already exists
                if (file_exists($target_file)) {
                  //echo "Sorry, file already exists.";
                  $uploadOk = 0;
                }

                // Check file size
                if ($_FILES["fileToUpload"]["size"] > 500000) {
                  //echo "Sorry, your file is too large.";
                  $uploadOk = 0;
                }

                // Allow certain file formats
                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif" ) {
                  //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                  $uploadOk = 0;
                }

                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                  //echo "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
                } else {
                  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                  } else {
                    //echo "Sorry, there was an error uploading your file.";
                  }
                }
                rename($target_dir.basename($_FILES["fileToUpload"]["name"]),"Database/InputImage/img.jpeg");
                ?>
<script>
	(function() {
                fetch('executor.php');
            })();

    //document.ready(window.setTimeout(location.href = "single1.php",5000));
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
	<!-- <button href = "single1.php">Click Here for Intermediate Results</button> -->
	  

<!-- <?php
	// $newPATH = "C:\Users\SPECTER\anaconda3\envs\smr";
	// putenv("SOMEVAR=$yourVar");
	//putenv("PYTHONHOME=$newPATH");
    // $set_env = "C:\Users\SPECTER\anaconda3\Scripts\activate smr";
    // exec($set_env);
	// sleep(10);
	// header("location: single1.php");
    // $script_exec = "python C:\Users\SPECTER\Desktop\Bio_Mapping_Module\just_checking_stuff.py";
    // exec($script_exec);

	
?> -->
<!--  <?php
            // $secondsWait = 15;
            // header("Refresh=$secondWait;url=single1.php");
 ?> -->
</body>

</html>