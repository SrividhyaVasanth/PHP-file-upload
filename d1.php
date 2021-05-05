<?php
$db=mysqli_connect("localhost","newuser","P4\$\$w0rd123","file");
$query=mysqli_query($db,"select * from upload");
$rowcount=mysqli_num_rows($query);
?>
<table border="1">
<tr>
<td>download</td>
</tr>
<?php
for($i=1;$i<=$rowcount;$i++)
{
    $row=mysqli_fetch_array($query);

?>
<tr>
<td><a href="/uploads/<?php echo $row["file"] ?>"><?php echo $row["file"] ?></a></td>

</tr>
<?php
if(!empty($_GET['file'])){   $Name_Of_File = basename($_GET['file']);
  $Path_of_file = 'uploads/'.$Name_Of_File;
    if(!empty($Name_Of_File) && file_exists($Path_of_file)){
        // Define headers
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$Name_Of_File");
        header("Content-Type: application/png");
        header("Content-Transfer-Encoding: binary");
        readfile($Path_of_file);                     //for reading the file
        exit;
    }else{
        echo 'The file you want here does not exist.';
    }
}
?>

<?php   
}

?>
</table>
