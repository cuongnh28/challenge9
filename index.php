<html>
<body>
<?php
	//Code tao loi LFI.
	if(isset($_GET['file'])){
		$file = $_GET['file'];
		include $file;
	}
?>
<form action="page/upload.php" method="post" enctype="multipart/form-data">
    Select file to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload File">
</form>
<a href="http://localhost/challenge9/page/about.php">Thông tin website</a>
</body>
</html>