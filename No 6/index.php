<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">

	<!-- <script src="js/script.js"></script> -->


	<title> Arkademy </title>
</head>
<body>

<!-- PHP Include Koneksi -->


<!-- Header -->

	<div class="top-container container-fluid">
		<img class="img-top" src="img/1_7ugSMISUo8vYf9ILG6VmuQ.png">

		<p class="header-top d-inline"> <span style="color:#FF8FB2">ARKADEMY</span> COFFEE SHOP </p>

		<!-- <button type="button" class="btn btn-primary ml-6" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat"> ADD </button>			 -->

		<a class="btn" style="color: white;" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat"> ADD </a>

	<!-- Modal View -->


		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header" >
						<span class="modal-title" style="font-family: 'Airbnb'; font-weight: bold;" id="exampleModalLabel"> ADD </span>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true" style="font-family: 'Airbnb'; color: red; text-transform: capitalize;"> X <!--  &times; --> </span>
							</button>
					</div>
				<div class="modal-body" style="font-family: 'Airbnb';">
					
					<form action="penambah.php" method="post">						
						<div class="form-group">
						<label>Cashier</label>
							<select class="form-control" name="nama_cashier">
								<option value ="1"> Raisa Andriana</option>
								<option value ="2"> Pevita Pearce</option>
								<option value ="3"> Fradenly </option>
							</select>
						</div>
						  
						<div class="form-group">
							<label>Product</label>
							<select class="form-control" name="product">
								<option>Ice Tea</option>
							  	<option>Latte</option>
							  	<option>Cake</option>
							  	<option>Fried Rice</option>
							  	<option>Gudeg</option>
							</select>
						</div>
						<div class="form-group">
							<label>Category</label>
							<select class="form-control" name="category">
								<option value ="1"> Drink </option>
								<option value ="2"> Food </option>
							</select>
						</div>
						
						<div class="form-group">
						<label>Price</label>
							<input class="form-control" type="text" placeholder="Rp.10000" name="price"> 
						</div>
					

						</div>
				
						<div class="modal-footer">
							<button type="submit" class="btn mr-3" name="submit"> ADD </button>
						</div>
				</form>
			</div>
		
			</div>
		</div>

	</div>

<!-- Modal Alert -->


<!-- Table Container  -->
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
					<div class="table">

						<div class="row header">
							<div class="cell"> No </div>
							<div class="cell"> Cashier </div>
							<div class="cell"> Product </div>
							<div class="cell"> Category </div>
							<div class="cell"> Price </div>
							<div class="cell"> Action </div>
						</div>

						<!-- PHP Include Koneksi -->

						<?php
							
							include("config/koneksi.php");


							// $sql = "SELECT name from product";
							$index = 0;
							$sql = "SELECT p.id,c.name cashier,p.name,k.name category,p.price
							 		FROM product p
							 		LEFT JOIN category k USING (id_category)
							 		LEFT JOIN cashier c USING (id_cashier);
							 		";
							$hasil = mysqli_query($config, $sql) or exit("Error query: <b>".$sql."</b>.");
							 
							 // $data = mysqli_fetch_assoc($hasil)
							 while($data = mysqli_fetch_assoc($hasil)){
							 	$index++;
						?>

						<div class="row">
							<div class="cell" data-title="No"> <?php echo $index ?></div>
							<div class="cell" data-title="Cashier"> <?php echo $data['cashier']; ?>  </div>
							<div class="cell" data-title="Product"> <?php echo $data['name']; ?> </div>
							<div class="cell" data-title="Category"> <?php echo $data['category']; ?> </div>
							<div class="cell" data-title="Price"> Rp. <?php echo $data['price']; ?> </div>
							<div class="cell" data-title="Action">
				 				<a class="mr-1" href="" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat" style="font-family:'Airbnb'; color: #ACE087;"> Edit </a> <span> | </span>
				 				<a class="ml-1" href="delete.php?id=<?php echo $data['id']; ?>" style="font-family: 'Airbnb'; color: #FF8FB2;"> Delete </a>  
							</div>
						</div>
						<?php } ?>
			</div>

	</div>

<!-- Modal Edit -->



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>

</body>
</html>