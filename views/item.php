<?php 
	include 'main_header.php';
	require_once '../controllers/productController.php';
	$id = $_GET["id"];
	$p = getProduct($id);

?>
<!--item starts -->
<div class="center">
	<table>
		<tr>
			<td>
				<img class="item-image" src="<?php echo $p["image"];?>"></img>
				<input type="number" placeholder="1" style="width:185px;font-family:consolas;margin-top:5px;" class="form-control">
				<div class="add-to-cart"><a class="btn btn-success" style="width:185px;font-family:consolas;margin-top:5px;">Add to Cart</a></span></div>
			</td>
			<td>
				<h1 class="text"><?php echo $p["name"];?></h1>
				<h2 class="text">BDT<?php echo $p["price"];?></h2>
				<p class="text"><?php echo $p["description"];?></p>
				
			</td>
		</tr>
	</table>
	
</div>

<!--item ends -->
<?php include 'main_footer.php';?>