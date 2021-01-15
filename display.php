<?php
session_start();
?>
<!DOCTYPE html>
<html>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<head>
	
	<title>Display data</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th><a class="btn btn-info" href="form.php">Back</a></th>
      <th scope="col">#</th>
      <th scope="col">data</th>
      <th scope="col">button</th>
       <th><a class="btn btn-info" href="registration.php">Log out</a></th>
    </tr>
  </thead>
  <tbody>
  	<?php
			include 'database.php';
			$con=get_connection();
			$quary=get_notes(); 
			$Check=mysqli_num_rows($quary);
			$num=1;
   while($result=mysqli_fetch_array($quary))
			{
		?>
				<tr>
					<td>
						
					</td>
				<td>
					<?php echo $num;
					$num++ ?>
				</td>
				<td>
					<?php echo $result['notes']; ?>
				</td>
				<td>
				
					<a class="btn btn-danger" href="make_delete.php?iddata=<?php echo $result['id']; ?>"role="button">Delete</a>
					<a class="btn btn-warning" href="editdata.php?iddata=<?php echo $result['id']; ?>"role="button">Update</a>

				</td>
				<td> </td>
			</tr>
    <?php
    }
    ?>
  </tbody>
</table>

</body>
</html>
