<?php 
$db=mysqli_connect("localhost","newuser","P4\$\$w0rd123","file");

if(isset($_REQUEST["submit"]))
{
   $file=$_FILES["file"]["name"];
  $tmp_name=$_FILES["file"]["tmp_name"];
  $path="/var/www/html/uploads/".$file;
  $file1=explode(".",$file);
  $ext=$file1[1];
  $allowed=array("jpg","png","gif","pdf","wmv","pdf","zip");
  if(in_array($ext,$allowed))
  {
 move_uploaded_file($tmp_name,$path);
$sql="insert into upload(file)values('$file')";
mysqli_query($db, $sql);

  
  
}
}

?>


<form enctype="multipart/form-data" method="post">

File Upload:<input type="file" name="file">
<input type="submit" name="submit" value="upload">
<p><a href="d1.php">Visit Downloads</a></p>


</form>