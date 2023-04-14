<?php
include 'db.php';


	$sql="SELECT * FROM data";
	$result=mysqli_query($con,$sql);
	$number=1;
	$count_row = mysqli_num_rows($result);


if ($count_row >= 1)
{
	while($row=mysqli_fetch_array($result)){?>
		<tr>
		<tr class="tbl-record-tr table-dark" id="tblrecord" rowid="<?php echo $row['id']; ?>">
		<td scope="row"><?php echo $row['id'];?>
		<td><?php echo $row['productname']; ?></td>
		<td><?php echo $row['uom']; ?></td>
        <td><?php echo $row['quantity']; ?></td>
        <td><?php echo $row['cost']; ?></td>
        <td><?php echo $row['totalcost']; ?></td>
		<td><?php echo $row['bbd']; ?></td>
        <td> <img class="img-reponsive img-rounded" id="imgupload" src="icon/icon.png" width="30" height="30"><?php echo $row['image']; ?></td>

		</tr>
		
		<?php
		
		$number++;
	}
}
else
{
	?>
	<tr>
		<td colspan="6">No Record Found.</td>
	</tr>
	<?php
}


$con->close();



?>