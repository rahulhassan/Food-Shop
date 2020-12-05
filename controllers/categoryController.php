<?php
    require_once '../models/db_connect.php';
    $cname=$err_cname=$categoryinfo="";

    $hasError= false;
    if(isset($_POST["add_category"])){

        if(empty($_POST["name"])){
            $err_cname="*Category Name Required";
            $hasError= true;
        }else{
            $cname = $_POST["name"];
        }
        if(!$hasError){
            addCategory($cname);
            $categoryinfo = "Category added successfull.";
        }
    }
    function addCategory($cname){
        $query="INSERT INTO categories VALUES(null,'$cname')";
        execute ($query);
    }
    
    function getAllCategories(){
        $query = "SELECT * FROM categories";
        $result = get($query);
        return $result;
    }
?>