<?php 
include 'function.php';
include 'conn.php';
session_start();
?>
<?php 
// header('location: layout.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<link rel='stylesheet' href='https://sachinchoolur.github.io/lightslider/dist/css/lightslider.css'>
	<script src='https://sachinchoolur.github.io/lightslider/dist/js/lightslider.js'></script>
	<style type="text/css">
		@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");


       body{

        background-color: #eee;
        font-family: "Poppins", sans-serif

    }

    .card {
        background-color: #fff;
        padding: 14px;
        border: none
    }

    .demo {
        width: 100%
    }

    ul {
        list-style: none outside none;
        padding-left: 0;
        margin-bottom: 0
    }

    li {
        display: block;
        float: left;
        margin-right: 6px;
        cursor: pointer
    }

    img {
        display: block;
        height: auto;
        width: 100%
    }

    .stars i {
        color: #f6d151
    }

    .stars span {
        font-size: 13px
    }

    hr {
        color: #d4d4d4
    }

    .badge {
        padding: 5px !important;
        padding-bottom: 6px !important
    }

    .badge i {
        font-size: 10px
    }

    .profile-image {
        width: 35px
    }

    .comment-ratings i {
        font-size: 13px
    }

    .username {
        font-size: 12px
    }

    .comment-profile {
        line-height: 17px
    }

    .date span {
        font-size: 12px
    }

    .p-ratings i {
        color: #f6d151;
        font-size: 12px
    }

    .btn-long {
        padding-left: 35px;
        padding-right: 35px
    }

    .buttons {
        margin-top: 15px
    }

    .buttons .btn {
        height: 46px
    }

    .buttons .cart {
        border-color: #ff7676;
        color: #ff7676
    }

    .buttons .cart:hover {
        background-color: #e86464 !important;
        color: #fff
    }

    .buttons .buy {
        color: #ff6a00;
        background-color: white;
        border-color: #ff6a00;
    }

    .buttons .buy:focus,
    .buy:active {
        color: #fff;
        background-color: #ff6a00;
        border-color: #ff6a00;
        box-shadow: none
    }

    .buttons .buy:hover {
        color: #fff;
        background-color: #ff6a00;
        border-color: #ff6a00;
    }

    .buttons .wishlist {
        background-color: #fff;
        border-color: #ff6a00;
    }

    .buttons .wishlist:hover {
      background-color:#ff6a00 !important; 

      border-color: #ff6a00;
      color: #fff
  }

  .buttons .wishlist:hover i {
    color: #fff

}

.buttons .wishlist i {
    color: #ff6a00;
}

.comment-ratings i {
    color: #f6d151
}

.followers {
    font-size: 9px;
    color: #d6d4d4
}

.store-image {
    width: 42px
}

.dot {
    height: 10px;
    width: 10px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    margin-right: 5px
}

.bullet-text {
    font-size: 12px
}

.my-color {
    margin-top: 10px;
    margin-bottom: 10px
}

label.radio {
    cursor: pointer
}

label.radio input {
    position: absolute;
    top: 0;
    left: 0;
    visibility: hidden;
    pointer-events: none
}

label.radio span {
    border: 2px solid #8f37aa;
    display: inline-block;
    color: #8f37aa;
    border-radius: 50%;
    width: 25px;
    height: 25px;
    text-transform: uppercase;
    transition: 0.5s all
}

label.radio .red {
    background-color: red;
    border-color: red
}

label.radio .blue {
    background-color: blue;
    border-color: blue
}

label.radio .green {
    background-color: green;
    border-color: green
}

label.radio .orange {
    background-color: orange;
    border-color: orange
}

label.radio input:checked+span {
    color: #fff;
    position: relative
}

label.radio input:checked+span::before {
    opacity: 1;
    content: '\2713';
    position: absolute;
    font-size: 13px;
    font-weight: bold;
    left: 4px
}

.card-body {
    padding: 0.3rem 0.3rem 0.2rem
}
</style>
</head>
<body>

    <?php 
    ?>

    <?php
    $id = $_GET['id'];




    $result = "SELECT * FROM `product` WHERE id = $id";
    $sql = mysqli_query($conn, $result);
    $res = mysqli_fetch_all($sql, MYSQLI_ASSOC);

    foreach($res as $result){
        ?>

        <div class="container-fluid mt-2 mb-3"> 
         <div class="row no-gutters"> 
          <div class="col-md-5 pr-2"> 
           <div class="card"> 
            <div class="demo"> 
             <ul id="lightSlider">
                <li data-thumb="themes/images/<?php echo $result['images'];?>"> 
                    <img src="themes/images/<?php echo $result['images'];?>" /> 
                </li> 
                <li data-thumb="themes/images/<?php echo $result['image1'];?>"> 
                    <img src="themes/images/<?php echo $result['image1'];?>" /> 
                </li> 
                <li data-thumb="themes/images/<?php echo $result['image2'];?>"> 
                    <img src="themes/images/<?php echo $result['image2'];?>" /> 
                </li> 
            </ul>
        <?php } ?>
    </div> 
</div> 
<div class="card mt-2"> 
  <hr> <div class="comment-section"> 
    <div class="d-flex justify-content-between align-items-center"> 
        <div class="d-flex flex-row align-items-center"> 
            <img src="https://i.imgur.com/o5uMfKo.jpg" class="rounded-circle profile-image" > 
            <div class="d-flex flex-column ml-1 comment-profile"> 
                <div class="comment-ratings"> 
                    <i class="fa fa-star"></i> 
                    <i class="fa fa-star"></i> 
                    <i class="fa fa-star"></i> 
                    <i class="fa fa-star"></i> 
                </div> 
                <span class="username">Lori Benneth</span> 
            </div> 
        </div> 
        <div class="date"> 
            <span class="text-muted">2 May</span> 
        </div> 
    </div> 
    <hr> 
    <div class="d-flex justify-content-between align-items-center"> 
        <div class="d-flex flex-row align-items-center"> 
            <img src="https://i.imgur.com/tmdHXOY.jpg" class="rounded-circle profile-image" > 
            <div class="d-flex flex-column ml-1 comment-profile"> 
                <div class="comment-ratings"> 
                    <i class="fa fa-star"></i> 
                    <i class="fa fa-star"></i> 
                    <i class="fa fa-star"></i> 
                    <i class="fa fa-star"></i> 
                </div> 
                <span class="username">Timona Simaung</span> 
            </div> 
        </div> 
        <div class="date"> 
            <span class="text-muted">12 May</span> 
        </div> 
    </div> 
</div>
<!-- Review end -->
<?php echo $result['name']; ?>
</div> 
</div> 
<div class="col-md-7"> 
    <div class="card"> 
        <div class="about  py-3"> 
            <span class="font-weight-bold"><?php echo $result['name']; ?> </span> 
            <h4 class="font-weight-bold py-3"> $<?php echo $result['price']; ?></h4> </div> 

            <hr> 
            <div class="font-weight-bold"> 
                <span>Color: </span>
                <span><?php echo $result['displaycolor']; ?></span>
            </div>
            <form action="addToCart.php" method="post" class="form-horizontal qtyFrm">
                <div class="control-group">
                    <div class="controls">
                        <input style="border: 1px solid #ff6a00 !important;" type="number" required class="span1" name="quantity" placeholder="Qty."/>
                        <input style="border: 1px solid #ff6a00 !important;" type="text" required class="span1" name="color" placeholder="Color."/>
                        <input type="hidden" class="w-50 border border-primary" name="pro_id" value="<?php echo $result['id']; ?>">
                        <div class="buttons"> 
                            <button class="btn text-white btn-outline-warning btn-long cart" name="addToCart" style="background:#ff6a00 !important;">Add to Cart</button> 
                            <button class="btn btn-warning btn-long buy">Buy it Now</button> 
                            
                        </div>

                    </div>
                </div>
            </form>
            <form action="addTowishlist.php" method="post" class="form-horizontal qtyFrm">
                <div class="control-group">
                    <div class="controls">
                        <input type="hidden" class="w-50 border border-primary" name="pro_id" value="<?php echo $result['id']; ?>">
                        <div class="buttons"> 
                           
                            <button class="btn wishlist" > 
                                <i class="fa fa-heart"></i> 
                            </button> 
                        </div>

                    </div>
                </div>
            </form>
            <hr>
            <p>
                <?php echo $result['description'] ?>

            </p>
            <div class="container">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th><?php echo $result['pieces'];?> Pieces</th>
                            <th><?php echo $result['pieces1'];?> Pieces</th>
                            <th><?php echo $result['pieces2'];?> Pieces</th>
                            <th>>= <?php echo $result['pieces3'];?> Pieces</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <tr>
                                <th>$<?php echo $result['price'];?></th>
                                <th>$<?php echo $result['price1'];?></th>
                                <th>$<?php echo $result['price2'];?></th>
                                <th>$<?php echo $result['price3'];?></th>

                            </tr>
                        </tr>


                    </tbody>
                </table>
            </div>
            <div class="container">
                <h4 style="color:#ff6a00 !important;">Lead Time</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Quantity Pieces</th>
                            <th><?php echo $result['qtytime'];?> Pieces</th>
                            <th><?php echo $result['qtytime1'];?> Pieces</th>
                            <th><?php echo $result['qtytime2'];?> Pieces</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <tr>
                                <th>Est. Time(days)</th>
                                <th><?php echo $result['esttime'];?></th>
                                <th>> <?php echo $result['esttime1'];?></th>
                                <th><?php echo $result['esttime2'];?></th>
                            </tr>
                        </tr>           
                    </tbody>
                </table>
            </div>
            <hr>
            <div class="container">
                <h4>Protection</h4>
                <a style="text-decoration: none;" href="#" data-toggle="tooltip" data-placement="right" title="On-time dispatch is guaranteed or you will be eligible to claim platform compensation."><h5 style="color: #ff6a00 !important;"><i class="fad fa-arrow-alt-circle-right"></i> On-time Dispatch Guarantee</h5></a>
            </div>
            <div class="container">
                <a style="text-decoration: none;" href="#" data-toggle="tooltip" data-placement="right" title="If the shipment is delayed or product quality differs from what are specified in the online order, you can claim for a refund. Quick refund: If you can apply for a refund within two hours of making a payment, you will receive a refund immediately."><h5 style="color: #ff6a00 !important;"><i class="fad fa-arrow-alt-circle-right"></i> Refund Policy</h5></a>
            </div>
            <hr>
            <table class="table table-bordered">
                <tbody>
                    <tr class="techSpecRow">
                        <th colspan="2">
                            <h4>Product Details
                            </h4>
                        </th>
                    </tr>
                    <tr class="techSpecRow">
                        <td class="techSpecTD1">Brand: </td>
                        <td class="techSpecTD2"><?php echo $result['product_id'] ?></td></tr>

                        <tr class="techSpecRow"><td class="techSpecTD1">Display size::</td><td class="techSpecTD2"> <?php echo $result['screensize'] ?></td></tr>
                        <tr class="techSpecRow"><td class="techSpecTD1">Feature:</td><td class="techSpecTD2"><?php echo $result['feature'] ?></td></tr>
                        <tr class="techSpecRow"><td class="techSpecTD1">Camera:</td><td class="techSpecTD2"><?php echo $result['camera'] ?></td></tr>
                        <tr class="techSpecRow"><td class="techSpecTD1">meterial:</td><td class="techSpecTD2"><?php echo $result['meterial'] ?></td></tr>
                        <tr class="techSpecRow"><td class="techSpecTD1">Displaycolor:</td><td class="techSpecTD2"><?php echo $result['displaycolor'] ?></td></tr>
                        <tr class="techSpecRow"><td class="techSpecTD1">Price:</td><td class="techSpecTD2">$<?php echo $result['price'] ?></td></tr>
                        <tr class="techSpecRow"><td class="techSpecTD1">Battery Capacity:</td><td class="techSpecTD2"><?php echo $result['baterycapacity'] ?></td></tr>
                        <tr class="techSpecRow"><td class="techSpecTD1">Function:</td><td class="techSpecTD2"><?php echo $result['function'] ?></td></tr>
                    </tbody>
                </table>

            </div> 
            <!-- similar product  start-->


            <div class="card mt-2"> <span>Similar items:</span> <div class="similar-products mt-2 d-flex flex-row"> <div class="card border p-1" style="width: 9rem;margin-right: 3px;"> <img src="https://i.imgur.com/KZpuufK.jpg" class="card-img-top" alt="..."> <div class="card-body"> <h6 class="card-title">$1,999</h6> </div> </div> <div class="card border p-1" style="width: 9rem;margin-right: 3px;"> <img src="https://i.imgur.com/GwiUmQA.jpg" class="card-img-top" alt="..."> <div class="card-body"> <h6 class="card-title">$1,699</h6> </div> </div> <div class="card border p-1" style="width: 9rem;margin-right: 3px;"> <img src="https://i.imgur.com/c9uUysL.jpg" class="card-img-top" alt="..."> <div class="card-body"> <h6 class="card-title">$2,999</h6> </div> </div> <div class="card border p-1" style="width: 9rem;margin-right: 3px;"> <img src="https://i.imgur.com/kYWqL7k.jpg" class="card-img-top" alt="..."> <div class="card-body"> <h6 class="card-title">$3,999</h6> </div> </div> <div class="card border p-1" style="width: 9rem;"> <img src="https://i.imgur.com/DhKkTrG.jpg" class="card-img-top" alt="..."> <div class="card-body"> <h6 class="card-title">$999</h6> </div> </div> </div> </div> </div> </div> </div> <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
            <script src='https://sachinchoolur.github.io/lightslider/dist/js/lightslider.js'></script>
            <script> $('#lightSlider').lightSlider({ gallery: true, item: 1, loop: true, slideMargin: 0, thumbItem: 9 });
        </script>
    </body>
    </html>