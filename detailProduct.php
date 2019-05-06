<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Detail</title>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="statics/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="statics/main.js">
</head>
<body>
	<?php require_once("header.php") ?>

	<main>
	<!-- Main Layout -->
	<div class="container">
		<div class="row">
			<!--Sidebar-->
	        <?php require_once("sidebar.php") ?>
	        <!--/.Sidebar-->
		</div>

			<!--Main column-->
	        <div class="col-lg-8">
					<!--First row-->
					<h2 class="h2-responsive">Details<h2>
		          	<?php 
		            	require_once('./dbconnector.php');
		            	$conn = new DBConnector();
		            	$sql = "SELECT * FROM product WHERE proId =" . $_GET['proId'];
		            	$rows = $conn -> runQuery($sql);
		           	?>
			          
			        <div class="row">
			        <?php foreach ($rows as $key) { ?>
			            <div class="col-lg-12">
			            <!--Card-->
			            <div class="card">
			                <!--Card image-->
			                <div style="">
			                  	<a href="#">
			                    	<img src="<?php echo $key['proImage'] ?>" height="680px" width="730px" alt="">
			                 	</a>
			                </div>
			                <!--/.Card image-->

			                <!--Card content-->
			                <div class="card-body">
			                  <!--Title-->
			                  <h4 class="card-title" style="height: 2.2em"><?php echo $key['proName'] ?></h4>
			                  <!--Text-->
			                  <p class="card-text" style="height: 4em"><?php echo $key['proDescribe'] ?></p>
			                </div>

			                <div class="card-body">
				                <a href="#" class="btn btn-primary card-link">Buy now for <strong>$<?php echo $key['proPrice'] ?></strong></a>
			                </div>
			                <!--/.Card content-->

             		 	</div>
              			<!--/.Card-->
            		</div>
            		<?php } ?>
          		</div>
          		<!--/row-->
			</div>
			<!--/.Main column-->
		</div>
	</main>

	<footer class="bg-secondary text-white text-center" style="height: 100px;">
		<br>
		<h5>Thế kỷ 21 ai cũng buồn</h5>
	    <div class="text-white" style="font-size: 15px;">
	        Copyright: <a href="https://www.facebook.com/viethoangmax.steam" style="font-size: 12px" class="text-white"><cite title="Source Title"> <3 Max- <3</cite></a>
	    </div>
  	</footer>

</body>
</html>