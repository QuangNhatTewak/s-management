<?php
 require $_SERVER['DOCUMENT_ROOT'] . '/serverconnect.php';
 $error= '';
  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['submit'])) {
    $tieude = $_POST['name'];
    $noidung = $_POST['textt'];
    $today = date("Y-m-d"); 
    $error = "Đăng bài viết thành công!";
    // POST image name
    if(isset($_POST['tick'])){
        $image = "/images/".$_FILES['image']['name'];
    } else {
        $image = '';
    }
    

    // image file directory
    $tarPOST = $_SERVER['DOCUMENT_ROOT']."/images/".basename($image);
$sql = "INSERT INTO timeline (title, content, date, image)
VALUES ('$tieude', '$noidung', '$today', '$image')";
   
    // execute query
    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $tarPOST)) {
        $msg = "Ảnh đã được upload thành công";
    }else{
        $msg = "Tải lên ảnh thất bại hoặc không có ảnh";
    }
  }
?>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tải lên bài viết - Youth Feeling</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<link rel='shortcut icon' type='image/x-icon' href='/favicon.ico' />
</head>
<body>
<div class="container py-5">
<div class="row text-center text-white mb-5">
        <div class="col-lg-8 mx-auto">
            <h1 class="display-4"><img src="/images/logo viền tròn (1).png" height="50" width="50"> DAS Confession</h1>
            <p class="lead mb-0">Tâm tư của cậu ngày hôm nay. </p>
            <p class="lead"><a href="/confessgv.php" class="text-white">
            <input type="hidden" name="size" value="1000000"> 
                <u>Trang chủ</u></a></p>
            </div>
        </div><!-- End -->

<div class="container py-5 row text-center mx-auto col-lg-7">
<form method="POST" action="index.php" enctype="multipart/form-data">
<ul class="timeline">
				<li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                        <div class="timeline-arrow"></div>
                        <h2 class="h5 mb-0">Tiêu đề</h2><span class="small text-gray">Tiêu đề làm nổi bật bài viết</span>
                        <p class="text-small mt-2 font-weight-light"> 
                        <input type="text" id="name" name="name" required><br><br></p>
                        <img src="" style="max-width: 100%;max-height: 100%;">
                    </li><li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                        <div class="timeline-arrow"></div>
                        <h2 class="h5 mb-0">Nội dung</h2><span class="small text-gray">Nội dung bài viết của bạn :3</span>
                        <p class="text-small mt-2 font-weight-light"><textarea id="textt" name="textt" rows="11" cols="55" required></textarea>                   <img src="" style="max-width: 100%;max-height: 100%;">
                    </li><li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                        <div class="timeline-arrow"></div>
                        <h2 class="h5 mb-0">Hình ảnh</h2><span class="small text-gray"></span>
                        <p class="text-small mt-2 font-weight-light"><br>
                        <input type="checkbox" id="tick" name="tick" value="contain_pic" onclick="myFunction()">
  <label for="tick"> Có chứa ảnh</label><br> <input type="file" id="image" name="image" style="display:none;"></p>
                        <img src="" style="max-width: 100%;max-height: 100%;">
                    </li><li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                        <div class="timeline-arrow"></div>
                        <h2 class="h5 mb-0"></h2><span class="small text-gray"></span>
                        <p class="text-small mt-2 font-weight-light"><input type="submit" name="submit" value="Gửi bài viết"></p>
                        <img src="" style="max-width: 100%;max-height: 100%;">
                    </li>                    
                </ul>

  <br>
  <script type="text/javascript">
    function myFunction() {
        // Get the checkbox
  var checkBox = document.getElementById("tick");
  // Get the output text
  var text = document.getElementById("image");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }
}
  </script>
  

<br><br>
<p><?php echo $error;?></p>
<p><?php echo $msg;?></p>
</form>

    </div>
	<style>
	/*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*
*/

/* Timeline holder */
ul.timeline {
    list-style-type: none;
    position: relative;
    padding-left: 1.5rem;
}

 /* Timeline vertical line */
ul.timeline:before {
    content: ' ';
    background: #fff;
    display: inline-block;
    position: absolute;
    left: 16px;
    width: 4px;
    height: 100%;
    z-index: 400;
    border-radius: 1rem;
}

li.timeline-item {
    margin: 20px 0;
}

/* Timeline item arrow */
.timeline-arrow {
    border-top: 0.5rem solid transparent;
    border-right: 0.5rem solid #fff;
    border-bottom: 0.5rem solid transparent;
    display: block;
    position: absolute;
    left: 2rem;
}

/* Timeline item circle marker */
li.timeline-item::before {
    content: ' ';
    background: #ddd;
    display: inline-block;
    position: absolute;
    border-radius: 50%;
    border: 3px solid #fff;
    left: 11px;
    width: 14px;
    height: 14px;
    z-index: 400;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}


/*
*
* ==========================================
* FOR DEMO PURPOSES
* ==========================================
*
*/
body {
    background: #E8CBC0;
    background: -webkit-linear-gradient(to right, #E8CBC0, #636FA4);
    background: linear-gradient(to right, #E8CBC0, #636FA4);
    min-height: 100vh;
}

.text-gray {
    color: #999;
}
	</style>
	</body>