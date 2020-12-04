<?php 
	include 'admin_header.php';
	require_once '../controllers/productController.php';
	$products = getAllProducts();
?>
<!--All Products starts -->

<div class="center">
	<h3 class="text">All Products</h3>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th> Name</th>
			<th>Category </th>
			<th> Price</th>
			<th> Quantity</th>
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
			<?php
				foreach($products as $p){

					echo 
					"<tr>
						<td>".$p["id"]."</td>
						<td>".$p["name"]."</td>
						<td>".$p["c_name"]."</td>
						<td>".$p["price"]."</td>
						<td>".$p["quantity"]."</td>
						<td><img src='".$p["image"]."' width= '30px' height='30px'></td>
						<td><a href='editproduct.php' class='btn btn-success'>Edit</a></td>
						<td><a class='btn btn-danger'>Delete</td>
					</tr>";
				}
			?>
		</tbody>
	</table>
</div>
<!--Products ends -->
<?php include 'admin_footer.php';?>