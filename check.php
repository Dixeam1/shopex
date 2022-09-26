<?php
include 'conn.php'; 
include 'function.php';
if (isset($_POST['submit'])) {
  $qty= [];
  $p_id= [];
  $sq = "SELECT * FROM `cart` INNER JOIN `product` ON cart.p_id = product.id";
  // print_r($sq); die();
  $q = mysqli_query($conn, $sq); 
  $fetch = mysqli_fetch_all($q, MYSQLI_ASSOC);
  foreach ($fetch as $key => $val) {
   $data = [
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'address' => $_POST['address'],
    'city' => $_POST['city'],
    'phone' => $_POST['phone'],
    'amount' => $_POST['amount'],
    'amo_method' => $_POST['amo_method'],
    'user_id' => $val['userid'],
    'qty' => $val['qty'],
    'color' => $val['color'],
    'p_id' => $val['p_id']
  ];

  $result = insert("orders", $data);
  $query = mysqli_query($conn,$result);

}

header('location: checkotut.php');
}






?>