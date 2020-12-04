<?php 
	include 'admin_header.php';
	require_once '../controllers/productController.php';
	require_once '../controllers/categoryController.php';
	$categories = getAllCategories();
?>
<!--addproduct starts -->
<div class="center">
	<form action="" method="post" enctype="multipart/form-data" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Name:</h4> 
			<input type="text" name="name" class="form-control">
		</div>
		<div class="form-group">
			<h4 class="text">Category:</h4> 
			<select class="form-control" name="category_id">
				<option>Choose</option>
				<?php
					foreach($categories as $c){
						echo "<option value=".$c["id"].">".$c["name"]."</option>";
					}
				?>
			</select>
		</div>
		<div class="form-group">
			<h4 class="text">Price:</h4> 
			<input type="text" class="form-control" name="price">
		</div>
		<div class="form-group">
			<h4 class="text">Quantity:</h4> 
			<input type="text" class="form-control" name="qty">
		</div>
		<div class="form-group">
			<h4 class="text">Description:</h4> 
			<textarea type="text" class="form-control" name="desc"></textarea>
		</div>
		<div class="form-group">
			<h4 class="text">Image</h4> 
			<input type="file" name="image" class="form-control">
		</div>
		<div class="form-group text-center">
			
			<input type="submit" class="btn btn-success" value="Add Product" name="add_product" class="form-control">
		</div>
	</form>
</div>
<?php include 'admin_footer.php';?>
