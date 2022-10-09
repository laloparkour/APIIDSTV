<?php

	include("../app/ProductsController.php");
	include("../app/BrandsController.php");

	$productController = new ProductsController();
	$products = $productController->getProducts();

	$BrandsController = new BrandsController();
	$brands = $BrandsController->getBrands();

?>

<!DOCTYPE html>
<html>
	<head>
		<?php include('../layouts/head.template.php')?>
	</head>
	<body>

		<?php include('../layouts/navbar.template.php')?>

		<div class="container-fluid">
			
			<div class="row">
				
				<!-- Sidebar -->
				<?php include('../layouts/sidebar.template.php')?>

				<div class="col-md-10 col-lg-10 col-sm-12">
					<section>
						<div class="row bg-light m-2">
							<div class="col">
								<nav aria-label="breadcrumb d-flex">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="../products/index.php">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">Products</li>
									</ol>
									<div class="col float-end">
										<button  data-bs-toggle="modal" data-bs-target="#addProductModal">Añadir producto</button>
									</div>
								</nav>                            
							</div>
						</div>
					</section> 
					<section>
						<div class="row">
							<?php if (isset($products) && count($products) > 0) : ?>
								<?php  foreach($products as $product): ?>
								<div class="col-md-4 col-sm-12"> 
									<div class="card mb-2">
										<img src="<?= $product->cover; ?>" class="card-img-top" alt="...">
										<div class="card-body">
											<h5 class="card-title"><?= $product->name ?></h5>
											<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
											<p class="card-text"><?= $product->description; ?></p>

											<div class="row">
												<a data-product='<?= json_encode($product) ?>' onclick="editProduct(this)" data-bs-toggle="modal" data-bs-target="#addProductModal" href="#" class="btn btn-warning mb-1 col-6">
													Editar
												</a>
												<a onclick="eliminar(<?= $product->id ?>)" href="#" class="btn btn-danger mb-1 col-6">
													Eliminar
												</a>
												<input type="hidden" id="super_token" value="<?= $_SESSION['super_token']?>">
												<a href="details.php?slug=<?=$product->slug;?>" class="btn btn-info col-12">
													Detalles
												</a>
											</div>
										</div>
									</div>  
								</div>
								<?php  endforeach; ?>
							<?php endif; ?>
						</div>
					</section> 
				</div>

			</div>

		</div>

		<!-- Modal -->
		<div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<form enctype="multipart/form-data" action="../app/ProductsController.php" method="POST">

						<div class="modal-body">

							<div class="mb-3">
								<label for="name" class="form-label">Product name:</label>
								<input type="text" name="name" class="form-control" id="name" required>
							</div>

							<div class="mb-3">
								<label class="form-label">Description</label>
								<textarea class="form-control" rows="3" name="description" id="description" required></textarea>
							</div>
							
							<div class="mb-3">
								<label class="form-label">Features</label>
								<textarea class="form-control" rows="3" name="features" id="features" required></textarea>
							</div>

							<div class="mb-3">
								<select id="brand_id" name="brand_id" required class="form-control">
									<?php foreach ($brands as $brand): ?>
										<option value="<?= $brand->id ?>"><?= $brand->name ?></option>
									<?PHP endforeach; ?>
								</select>
							</div>

							<div class="mb-3">
								<label for="formFile" class="form-label">Select image</label>
								<input class="form-control" name="foto" type="file" id="formFile" accept="image/*" required>
							</div>

							<input type="hidden" name="action" id="action" value="store">
							<input type="hidden" name="id" id="id_product">
							<input type="hidden" name="super_token" value="<?= $_SESSION['super_token']?>">

						</div>

						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
								Close
							</button>
							<button type="submit" class="btn btn-primary">
								Save changes
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<!-- Scripts -->
		<?php include('../layouts/scripts.template.php')?>
  		<script>
			function eliminar(id) {
				
				swal({
				  title: "Are you sure?",
				  text: "Once deleted, you will not be able to recover this imaginary file!",
				  icon: "warning",
				  buttons: true,
				  dangerMode: true,
				})
				.then((willDelete) => {
				  if (willDelete) {

					let super_token = document.getElementById('super_token').value;

					var bodyFormData = new FormData();
					bodyFormData.append('id', id);
					bodyFormData.append('action', 'delete');
					bodyFormData.append('sprtoken', super_token);

					axios.post('../app/ProductsController.php/', bodyFormData)
					.then(function (response) {

						if (response.data) {
					    	swal("Poof! Your imaginary file has been deleted!", {
						      icon: "success",
						    });
					    }else{
					    	swal("Error", {
						      icon: "error",
						    });;
					    }
					})
					.catch(function (error) {
						console.log(error);
					});

				  } else {
				    swal("Your imaginary file is safe!");
				  }
				});
			}

			function editProduct(target) {

				let product = JSON.parse( target.dataset.product )

				document.getElementById('id_product').value = product.id
				document.getElementById('name').value = product.name
				document.getElementById('description').value = product.description
				document.getElementById('features').value = product.features
				document.getElementById('brand_id').value = product.brand_id
				document.getElementById('action').value = 'update'

			}

		</script>
	</body>
</html>