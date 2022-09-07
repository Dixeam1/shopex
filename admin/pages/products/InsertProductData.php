<?php 
include '../function.php';
include '../conn.php';

if (isset($_POST['submit'])) {
  $data = [

    'product_id' => $_POST['product_id'],
    'name' => $_POST['title'],
    'description' => $_POST['Description'],
    'category' => $_POST['category'],
    'pieces' => $_POST['pieces'],
    'pieces1' => $_POST['pieces1'],
    'pieces2' => $_POST['pieces2'],
    'pieces3' => $_POST['pieces3'],
    'qtytime' => $_POST['qtytime'],
    'qtytime1' => $_POST['qtytime1'],
    'qtytime2' => $_POST['qtytime2'],
    'esttime' => $_POST['esttime'],
    'esttime1' => $_POST['esttime1'],
    'esttime2' => $_POST['esttime2'],
    'price' => $_POST['price'],
    'price1' => $_POST['price1'],
    'price2' => $_POST['price2'],
    'price3' => $_POST['price3'],
    'feature' => $_POST['feature'],
    'camera' => $_POST['camera'],
    'screensize' => $_POST['screensize'],
    'meterial' => $_POST['meterial'],
    'displaycolor' => $_POST['displaycolro'],
    'baterycapacity' => $_POST['baterycapacity'],
    'function' => $_POST['function'],
    'images' => $_FILES['fileToUpload']['name']
    // 'images1' => $_POST['images1'],
    // 'images2' => $_POST['images2']

    
    
  ];
  $result = insert('product', $data);
  // print_r($result); die();
  $query = mysqli_query($conn,$result);
  header('location: view_products.php');
}


$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
$uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>