<?php
    require_once '../models/db_connect.php';
    function getAllCategories(){
        $query = "SELECT * FROM categories";
        $result = get($query);
        return $result;

    }

?>