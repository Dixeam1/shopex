<?php
include 'conn.php'; 

if (isset($_POST['submit'])) {
  // $qty= [];
  // $p_id= [];
  $sq = "SELECT * FROM `cart` INNER JOIN `product` ON cart.p_id = product.id";
  print_r($sq); die();
  $q = mysqli_query($conn, $sq); 
  $fetch = mysqli_fetch_all($q, MYSQLI_ASSOC);
  foreach ($fetch as $key => $val) {

   // array_push($qty, $val['qty']);
   // array_push($p_id, $val['product_id']);
  }
  // print_r($qty); die();
  $data = [
    'user_name' => $_POST['name'],
    'email' => $_POST['email'],
    'adress' => $_POST['address'],
    'city' => $_POST['city'],
    'phone' => $_POST['phone'],
    'amount' => $_POST['amount'],
    'amo_method' => $_POST['amo_method'],
  'user_id' => $fetch['user_id'],
  'user_id' => $fetch['qty'],

  'p_id' => implode(",",$p_id),
  'qty' => implode(",",$qty),
  'user_id' => $fetch[0]['user_id']
  ];
  $result = insert('orders', $data);
  print_r($result); die();
  $query = mysqli_query($conn,$result);
// header('location: thanks.php');
}






?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>


    .col-25 {
      -ms-flex: 25%; /* IE10 */
      flex: 25%;
    }

    .col-50 {
      -ms-flex: 50%; /* IE10 */
      flex: 50%;
    }

    .col-75 {
      -ms-flex: 75%; /* IE10 */
      flex: 75%;
    }

    .col-25,
    .col-50,
    .col-75 {
      padding: 0 16px;
    }

    .bg {
      background-color: #f2f2f2;
    }

    input[type=text] {
      width: 100%;
      margin-bottom: 20px;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    label {
      margin-bottom: 10px;
      display: block;
    }

    

    .btn {
      background-color: #04AA6D;
      color: white;
      padding: 12px;
      margin: 10px 0;
      border: none;
      width: 100%;
      border-radius: 3px;
      cursor: pointer;
      font-size: 17px;
    }

    .btn:hover {
      /*background-color: #45a049;*/
    }

    a {
      color: #2196F3;
    }

    hr {
      border: 1px solid lightgrey;
    }

    span.price {
      float: right;
      color: grey;
    }
    .cehck{
      color: green;
      text-align: center;
      padding:30px 10px 50px;
    }

    /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
    
  </style>
</head>
<body>
  <?php include 'layout.php'; ?>
  <div class="cehck mt-3">
    <h1>
      Checkout
    </h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6 border bg">
        <form action="" method="POST">
          <h3>Billing Address</h3>
          <label for="fname"> Full Name</label>
          <input required  type="text" id="fname" name="name" placeholder="John M. Doe">
          <label for="email"> Email</label>
          <input required  type="text" id="email" name="email" placeholder="john@example.com">
          <label for="adr"> Address</label>
          <input required  type="text" id="adr" name="address" placeholder="542 W. 15th Street">
          <label for="city"> City</label>
          <input required  type="text" id="city" name="city" placeholder="New York">

          <div class="row">
            <div class="col-50">
              <label for="state">State</label>
              <input required  type="text" id="state" name="state" placeholder="NY">
            </div>
            <div class="col-50">
              <label for="zip">Zip</label>
              <input  required type="text" id="zip" name="zip" placeholder="10001">
            </div>
          </div>
          <div class="row">
            <div class="col-50">
              <label for="state">Payment</label><br>
              <input required  type="radio" id="state" value="cash on Dilivery" name="payment">
              <label for="state">Cash on Dilivery</label>
            </div>
            <div class="col-50">
              <input  required type="radio" id="zip" name="payment" placeholder="10001">
              <label for="zip">Bank Transfer</label>
            </div>
          </div>
          <input type="submit" value="Continue to checkout" class="btn" style="background: #ff6a00 !important;">
        </form>
      </div>

      <?php $result = SELECT('cart'); ?>
      <div class="col-md-5 ml-5 border bg">
        <b>Order Summary</b><br>
        <hr>
        <div class=""><?php echo count($result); ?> Items</div>
        <?php 

        $sql = "SELECT * FROM `product` INNER JOIN `cart` ON product.`id` = cart.`p_id`";
        $sq = mysqli_query($conn, $sql);
        $fetch = mysqli_fetch_all($sq, MYSQLI_ASSOC);
        $result = select('cart');
        $total_bill = 0;

        foreach ($fetch as $res) {
          $total = [];
          $total[] = (float)$res['price'] * (float)$res['qty'];
          $total_bill += (float)$res['price'] * (float)$res['qty']
          ?>
          <div class="mt-3 d-flex align-items-center">
            <div class="w-25">
              <img class="w-100" src="themes/images/<?php echo $res['images'];?>" alt="">
            </div>
            <div class="ml-3 w-100">
              <span><b><?php echo $res['qty'];?>X</b></span><br>
              <span class=""><?php echo $res['name']; ?> </span>
            </div>
            <div class="">
              <p class=""><b><?php echo $res['price']; ?></b></p>
            </div>
            <div class="ml-3">
              <p class=""><b>$<?php echo $total[0]; ?></b></p>
            </div>
          </div>
        <?php } ?>
        <hr>
        <span><b>Sub Total</b></span>
        <span class="price" name="total" style="color:black">
          <b>
            $<?php echo $total_bill; ?>
          </b>
        </span>
      </div>
    </div>
  </div>



</body>
</html>
