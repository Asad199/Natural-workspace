<?php 
$id=$_GET['id'];
$sql=mysqli_query($con,"select * from space where space_id='$id'");
$res=mysqli_fetch_assoc($sql);

extract($_REQUEST);
if(isset($update))
{
mysqli_query($con,"update space set space_no='$rno',type='$type',price='$price',details='$details' where space_id='$id' ");
header('location:dashboard.php?option=space');
}

?>

<form method="post" enctype="multipart/form-data">
<table class="table table-bordered">
	
	<tr>	
		<th>Space No</th>
		<td><input type="text"  name="rno" value="<?php echo $res['space_no']; ?>"  class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Space Type</th>
		<td><input type="text" name="type" value="<?php echo $res['type']; ?>"  class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Price</th>
		<td><input type="text" name="price"  value="<?php echo $res['price']; ?>" class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Details</th>
		<td><textarea name="details"  class="form-control"><?php echo $res['details']; ?></textarea>
		</td>
	</tr>
	
	
	<tr>
		<td colspan="2">
			<input type="submit" class="btn btn-primary" value="Update Space Details" name="update"/>
		</td>
	</tr>
</table> 
</form>