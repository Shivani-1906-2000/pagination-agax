<?php
include "config/config.php";
$record_per_page=5;
$page="";
$output="";
if(isset($_POST['page']))
{
    $page=$_POST['page'];
}
else{
    $page=1;
    }

$start_from=($page-1)*$record_per_page;
$query="SELECT * FROM form LIMIT"." ".$start_from.",".$record_per_page;
$result=mysqli_query($conn,$query);
$output.="<table class='table table-border'><tr><th> Name </th> <th> Email </th></tr>";
while($row=mysqli_fetch_array($result))
{
    $output.="<tr> 
    <td>".$row['firstname']."</td>
    <td>".$row['email']."</td>
    </tr>";
}
$output.="</table>";

$page_query="SELECT * FROM form";
$page_result=mysqli_query($conn,$page_query);
$total_records=mysqli_num_rows($page_result);
$total_pages=ceil($total_records/$record_per_page);
for($page=1; $page<=$total_pages; $page++)
{
    $output.="<span class='paginationlink' style='cursor:pointer' id=".$page.">$page</span>";
}
echo $output;
?>