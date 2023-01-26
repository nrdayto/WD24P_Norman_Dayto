<?php 
include_once 'dbase/database.php';
include_once 'class/customer.php';

$database = new Database();
$db = $database->getConnection();

$customer = new Customer($db);

if(!$customer->loggedIn()) {	
	header("Location: login.php");	
}
include('include/header.php');
?>
<title>Online Karinderia</title>
  <link rel="stylesheet" type = "text/css" href ="css/menu.css">
<?php include('include/container.php');?>
<div class="content">
	<div class="container-fluid">		
		
		<div class='row'>		
        <?php include('top_menu.php'); ?> 
		</div>
		
		<div class="my-3">
			<div class="card rounded-0 shadow">
				<div class="card-body">
					<div class="container-fluid">
						<?php
						$orderTotal = 0;
						foreach($_SESSION["cart"] as $keys => $values){
							$total = ($values["item_quantity"] * $values["item_price"]);
							$orderTotal = $orderTotal + $total;
						}
						?>
						<div class='row'>
							<div class="col-md-6 lh-1">
								<h3>Delivery Address</h3>
								<?php 
								$addressResult = $customer->getAddress();
								$count=0;
								while ($address = $addressResult->fetch_assoc()) { 
								?>
								<p class="mb-1"><?php echo $address["address"]; ?></p>
								<p class="mb-1"><strong>Phone</strong>:<?php echo $address["phone"]; ?></p>
								<p class="mb-1"><strong>Email</strong>:<?php echo $address["email"]; ?></p>
								<?php
								}
								?>				
							</div>
							<?php 
							$randNumber1 = rand(100000,999999); 
							$randNumber2 = rand(100000,999999); 
							$randNumber3 = rand(100000,999999);
							$orderNumber = $randNumber1.$randNumber2.$randNumber3;
							?>
							<div class="col-md-6 lh-1">
								<h3>Order Summary</h3>
								<!-- <p class="mb-1"><strong>Items</strong>: $<?php echo $orderTotal; ?></p> -->
								<p class="mb-1"><strong>Delivery Fee</strong>: Php 0.00</p>
								<p class="mb-1"><strong>Total Order</strong>: Php <?php echo number_format($orderTotal,2); ?></p>
								<p class="mb-1"><strong>Amount to Pay</strong>: Php <?php echo number_format($orderTotal,2); ?></p>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer py-1">
					<div class="row justify-content-center">
						<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
							<div class="d-grid">
								<a href="order_process.php?order=<?php echo $orderNumber;?>"  class="btn btn-warning rounded-0">Place Order</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		   
    </div>        
