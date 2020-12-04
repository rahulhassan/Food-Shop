<?php
    require_once '../models/db_connect.php';
   
    $hasError = false;
    if(isset($_POST["add_product"])){
        
        if(!$hasError){
            $fileType = strtolower(pathinfo(basename($_FILES["image"]["name"]),PATHINFO_EXTENSION));
            $file = "../storage/product_image/".uniqid().".$fileType";
            move_uploaded_file($_FILES["image"]["tmp_name"],$file);
            addProduct($_POST["name"],$_POST["price"],$_POST["qty"],$_POST["desc"],$file,$_POST["category_id"]);
            header("Location: ../views/allproducts.php");
        }
       

    }
    
    function addProduct($name, $price, $qty, $desc, $image, $c_id){

        $query = "INSERT INTO product VALUES (null, '$name', $price, $qty, '$desc', '$image', $c_id)";
        execute($query);
    }
    function getAllProducts(){
    $query = "SELECT p.*, c.name as 'c_name' from product p left join categories c on p.category_id = c.id";
    $result = get($query);
    return $result;
    }
    function getProduct($id){
        $query = "SELECT * FROM product WHERE id=$id";
        $result = get($query);
        if(count($result)>0) $result = $result[0];
        return $result;
    }

?>