<?php require_once 'dbUtil.php';?>
<!DOCTYPE html>
<html>
    <head><title>Tạo chức năng upload file với PHP và MySQL</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
    <link rel="icon" href="http://www.thuthuatweb.net/wp-content/themes/HostingSite/favicon.ico" type="image/x-ico"/>
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php

        // connecting to database
    $db = new DatabaseUtil();
       $stmt = $db->connectPDO();
	$location = "uploads/";


//   if(isset($_POST['submit'])){
 
//  // Count total files
//  $countfiles = count($_FILES['file']['name']);

//  // Looping all files
//  for($i=0;$i<$countfiles;$i++){
//   $filename = $_FILES['file']['name'][$i];
 
//   // Upload file
//   move_uploaded_file($_FILES['file']['tmp_name'][$i],'upload/'.$filename);
 
//  }
// } 
$t=time();

$folder=date("Y-m-d",$t);
       $dir=$location.$folder;
if (!file_exists($dir)) {
    mkdir($dir, 0777, true);
}

	if(isset($_FILES['image'])){
     foreach($_FILES['image']['tmp_name'] as $key => $tmp_name){
      $file_name = $_FILES['image']['name'][$key];
      $file_size =$_FILES['image']['size'][$key];
      $file_tmp =$_FILES['image']['tmp_name'][$key];
      $file_type=$_FILES['image']['type'][$key];
      $arrayName=explode(".",$file_name);
      $imgType=end($arrayName);
      $file_ext=strtolower($imgType);
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $fmsg="Chỉ hỗ trợ file JPEG và PNG .";
      }
      
      if($file_size > 20971520){
         $fmsg='Chỉ hỗ trợ dung lượng không quá 20 MB';
      }
      
      if(empty($fmsg)==true){
      	$dirFile=$dir. '/' .$file_name;
         move_uploaded_file($file_tmp,$dirFile);
         $smsg= "Upload thành công !";
         $query = "INSERT INTO `upload` (name, size, type, location) VALUES ('$file_name', '$file_size', '$file_type', '$dirFile')";
		 $stmt->exec($query);
      }else{
         $fmsg="Upload thất bại";
      }
    }
  }

	
?>
 
      <form class="form-signin" method="POST" enctype="multipart/form-data">
        	<h2 class="form-signin-heading">Upload File</h2>
	  		<div class="form-group">
	   		<label for="InputFile">File input</label>
	    	<input type="file" name="image[]" id="InputFile" multiple>
	    	<p class="help-block">Upload JPEG Files với dung lượng nhỏ hơn 20MB</p>
	    	<!-- Thong bao loi  -->
	    	<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
			<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
	  </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Upload</button>
      </form>

<div class="footer-bar">
    <span class="article-wrapper">
        <span class="article-label">Tool: </span>
        <span class="article-link"><a href="">Chức năng upload file với PHP và MySQL</a></span>
    </span>
    
</div>
    

</body>
</html>
