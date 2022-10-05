<!DOCTYPE html>
<html>
<head>
	<title>product</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<h1> PRODUCT</h1>
<div class="row">
<?php
	include 'config.php';
	?>
	<?php
	$query ="SELECT  `name`, `image`, `price`, `details` FROM `product` order by id ASC";

	$queryfire= mysqli_query($conn, $query);

	$num =mysqli_num_rows($queryfire);

	if($num >0){
		while ($product = mysqli_fetch_array($queryfire)) {
			?>

			<div class="col-lg-3 col-md-3 col-sm-12">
				<form>
					<div class="card">
						<h6 class="card-title bg-info text-white p-2 text-uppercase"><?php echo $product['name']; ?></h6>
							<div class="card-body">
								<img src="<?php echo $product['image']; ?>" alt="phone" class="img-fluid mb-2">
								<h6>&#8377;<?php echo $product['price']; ?></h6>
								<h6><?php echo $product['details']; ?></h6>
								<input type="text" name="" class="form-control" placeholder="Quantity">
							</div>
							<div clas="sbtn-group d-flex">
								<button class="btn btn-successs flex-fill">ADD TO CART</button>
								<button class="btn btn-warning flex-fill text-white">BUY NOW</button>
							</div>
					</div>
				</form>
			</div>
<?php
		}
	}
?>
</div>
</body>
</html>