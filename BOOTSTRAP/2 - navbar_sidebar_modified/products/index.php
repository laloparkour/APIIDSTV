<?php

	include("../app/ProductsController.php");

	$productController = new ProductsController();

	$products = $productController->getProducts();

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
										<button  data-bs-toggle="modal" data-bs-target="#addProductModal">Añadir botón</button>
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
												<a data-bs-toggle="modal" data-bs-target="#addProductModal" href="#" class="btn btn-warning mb-1 col-6">
													Editar
												</a>
												<a onclick="eliminar()" href="#" class="btn btn-danger mb-1 col-6">
													Eliminar
												</a>
												<a href="details.php" class="btn btn-info col-12">
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
					<form action="../app/ProductsController.php" method="POST">

						<div class="modal-body">

							<div class="mb-3">
								<label for="name" class="form-label">Product name:</label>
								<input type="text" name="name" class="form-control" id="name">
							</div>

							<div class="mb-3">
								<label class="form-label">Description</label>
								<textarea class="form-control" rows="3" name="description"></textarea>
							</div>
							
							<div class="mb-3">
								<label class="form-label">Features</label>
								<textarea class="form-control" rows="3" name="features"></textarea>
							</div>

							<input type="hidden" name="action" value="store">

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
		<script type="text/javascript">
			function eliminar() {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                        )
                    }
                })
            }
		</script>
	</body>
</html>