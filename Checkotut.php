<?php
include 'conn.php'; 
include 'function.php'; 
$bill = $_GET['total'];

 if (isset($_POST['submit'])) {
  // $qty= [];
  // $p_id= [];
  $sq = "SELECT * FROM `cart` INNER JOIN `product` ON cart.p_id = product.id";
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
  // 'user_id' => $fetch['user_id'],
  // 'user_id' => $fetch['qty'],

  // 'p_id' => implode(",",$p_id),
  // 'qty' => implode(",",$qty),
  // 'user_id' => $fetch[0]['user_id']
];
$result = insert('orders', $data);
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
    body {
      font-family: Arial;
      font-size: 17px;
      padding: 8px;
    }

    * {
      box-sizing: border-box;
    }

    .row {
      display: -ms-flexbox;  /*IE10*/ 
      display: flex;
      justify-content: center !important;
      /*-ms-flex-wrap: wrap;  IE10 */*/
      /*flex-wrap: wrap;*/
      /*margin: 0 -16px;*/
      width: 60%;
    }

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

    .container {
      background-color: #f2f2f2;
      padding: 5px 20px 15px 20px;
      border: 1px solid lightgrey;
      border-radius: 3px;
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

    .icon-container {
      margin-bottom: 20px;
      padding: 7px 0;
      font-size: 24px;
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
    @media (max-width: 800px) {
      .row {
        flex-direction: column-reverse;
      }
      .col-25 {
        margin-bottom: 20px;
      }
    }
  </style>
</head>
<body>
  <?php include 'layout.php'; ?>
  <div class="cehck">
    <h1>
      Checkout
    </h1>
  </div>

  <div class="row">
    <div class="col-75">
      <div class="container">
        <form action="" method="POST">

          <div class="row">
            <div class="col-50">
              <h3>Billing Address</h3>
              <label for="fname"><i class="fa fa-user"></i> Full Name</label>
              <input required  type="text" id="fname" name="name" placeholder="John M. Doe">
              <label for="email"><i class="fa fa-envelope"></i> Email</label>
              <input required  type="text" id="email" name="email" placeholder="john@example.com">
              <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
              <input required  type="text" id="adr" name="address" placeholder="542 W. 15th Street">
              <label for="city"><i class="fa fa-institution"></i> City</label>
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
            </div>

            <div class="col-50">
              <h3>Payment</h3>
              <label for="fname">Accepted Cards</label>
              <div class="icon-container">
                <i class="fa fa-cc-visa" style="color:navy;"></i>
                <i class="fa fa-cc-amex" style="color:blue;"></i>
                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                <i class="fa fa-cc-discover" style="color:orange;"></i>
              </div>
              <label for="cname">Name on Card</label>
              <input type="text" id="cname" name="cardname" placeholder="John More Doe">
              <label for="ccnum">Credit card number</label>
              <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
              <label for="expmonth">Exp Month</label>
              <input type="text" id="expmonth" name="expmonth" placeholder="September">
              <div class="row">
                <div class="col-50">
                  <label for="expyear">Exp Year</label>
                  <input type="text" id="expyear" name="expyear" placeholder="2018">
                </div>
                <div class="col-50">
                  <label for="cvv">CVV</label>
                  <input type="text" id="cvv" name="cvv" placeholder="352">
                </div>
              </div>
            </div>

          </div>
          <label>
            <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
          </label>
          <input type="submit" value="Continue to checkout" class="btn" style="background: #ff6a00 !important;">
        </form>
      </div>
    </div>


    <div class="col-25">
      <div class="container">

        <hr>
        <p>Total Bill <span class="price" style="color:black"><b>$<?php echo $bill; ?></b></span></p>
        <hr>
      </div>
    </div>
  </div>

</body>
</html>
