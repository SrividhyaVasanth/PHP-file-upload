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
}

?>
</table>
