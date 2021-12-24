
<div class="rightcolumn">
<div id="main">

	<table>
		<thead>
		<th>ID</th>
		<th>Image</th>
		<th>Name</th>
		<th>Price</th>
		<tr></tr></div>
	</thead>
	
	<body>
		<?php
		 $query = "SELECT * FROM product";
		 $rs = mysqli_query($conn, $query);
		 if(mysqli_num_rows($rs) >0 )
		 
		 	while ($row = mysqli_fetch_assoc($rs))
		 	{
		 		?>
		 		<tr>
		 			<td><?= $row ['id'] ?></td>
		 			<td><img src="../images/<?= $row['anh']?>" class="anh-sp"/></td>
		 			<td><?= $row ['ten']?></td>
		 			<td><?= $row ['giatien'] ."d"?></td>
		 			
		 			<td><a href="suasp.php?id=<?= $row['id']?>">Update</a></td>
		 			<td><a href="?idxoa=<?= $row['id']?>">Delete</a></td>
		 		</tr>
		 		<?php
		 	}
		 
		 	  ?>
	</body> 
</table>
</div>
</div>
