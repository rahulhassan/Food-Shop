<?php 
	include 'main_header.php';
	require_once '../controllers/productController.php';
	$products = getAllProducts();
?>
<!--Products starts -->
<div class="col-md-12">

	<?php
		foreach($products as $p){
	?>
		<div class="card-product col-md-4">
			<a href="item.php?id=<?php echo $p["id"];?>">
				<img class="card-image" src="<?php echo $p["image"] ?>"></img>
				<b class="text"><?php echo $p["name"] ?></b>
			</a>
			<div class="price-label"><span ><b><?php echo $p["price"] ?></b></span></div>
			<div class="add-to-cart"><a class="btn btn-success" style="width:185px;font-family:consolas;margin-top:5px;">Add to Cart</a></span></div>
		</div>
	<?php	
		}	
	?>
		
</div>

<!--Products ends -->
<?php include 'main_footer.php';?>