<?php 
ini_set('display_errors', 1);  
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    include 'MySqlLibrary.php';
    $getProducts = new Mysql();
    $getProducts->dbConnect();
    $query = $getProducts->selectAll('products');
    $array = [];
    while($row= mysqli_fetch_array($query)) 
    {
        $list = array_push($array, $row["id"]);
    }
    //var_dump($list);die;
    $list= array('a' => 12, 'b' => 3, 'c' => 8, 'd' => 6);
    $result = json_encode($list);
    echo $result; die;
?>
