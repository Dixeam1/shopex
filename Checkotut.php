
<?php 
include 'layout.php';
$bill = $_GET['total'];

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


  <div class="container" style="margin-top: 125px;">
    <div class="row">
      <div class="col-md-6 border bg">
        <form action="check.php" method="POST">
          <h3 class="mt-5">Personal Information</h3>
          <label for="fname"> Full Name</label>
          <input required  type="text" id="fname" name="name" placeholder="John M. Doe">
          <label for="email"> Email</label>
          <input required  type="text" id="email" name="email" placeholder="john@example.com">
          <label for="adr"> Address</label>
          <input required  type="text" id="adr" name="address" placeholder="542 W. 15th Street">
          <label for="city"> City</label>
          <input required  type="text" id="city" name="city" placeholder="New York">
          <label for="Phone"> Phone</label>
          <input required  type="text" id="phone" name="phone" placeholder="03001234567">
          <input type="hidden" name="amount" value="<?php echo $bill; ?>">

          <div class="row">
            <div class="col-50">
              <label for="state">Payment</label>
            </div>
          </div>
          <div class="row">            
            <div class="col-50">
              <input required  type="radio"  value="cash on Dilivery" name="amo_method">
              <label for="state">Cash on Dilivery</label>
            </div>
            <div class="col-50">
              <input  required type="radio"  name="amo_method" value="Bank Transfer" placeholder="10001">
              <label for="">Bank Transfer</label>
            </div>
          </div>
          <a href="delete.php?id=<?php echo $res['id']?>">
          <input type="submit" name="submit" value="Continue to checkout" class="btn" style="background: #ff6a00 !important;"></a>
        </form>
      </div>

      <?php $result = SELECT('cart'); ?>
      <div class="col-md-5 ml-5 border bg">
        <div class="mt-5">
          <b>Order Summary</b><br>
          
        </div>
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
              <img class="w-100" src="themes/images/<?php echo $res['images']; ?>" alt="">
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
        <span class="price" style="color:black">
          <b>
            $<?php echo $total_bill; ?>

          </b>
          

        </form>


      </span>
    </div>
  </div>
</div>



</body>
</html>
