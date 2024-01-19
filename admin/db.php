<?php
$ip = "127.0.0.1";
$db_name = "root";
$db_pass = "";
$table_name = "unclesasha_db";
$data = mysqli_connect($ip, $db_name, $db_pass, $table_name);

function get_all() {
	global $data;
	$foods = $data->query('SELECT * FROM menu ORDER BY id desc');
	return $foods;
}

function get_all_index() {
    global $data;
    $last_foods = $data->query("SELECT * FROM menu ORDER BY id desc LIMIT 6");
    return $last_foods;
}

function get_orders() {
    global $data;
    $orders = $data->query("SELECT * FROM orders ORDER BY id desc");
    return $orders;
}

function get_foods_by_id($id){
    global $data;
    $foods = $data->query("SELECT * FROM menu WHERE `id` = $id");
    foreach ($foods as $food){
        return $food;
    }
}

?>