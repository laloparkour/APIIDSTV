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
							<?php for ($i=0; $i < 12; $i++): ?>
								<div class="col-md-4 col-sm-12"> 
									<div class="card mb-2">
										<img src="../public/img/logo.png" class="card-img-top" alt="...">
										<div class="card-body">
											<h5 class="card-title">Card title</h5>
											<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
											<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

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
							<?php endfor; ?>
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
					<form>
						<div class="modal-body">
							<?php for ($i=0; $i < 6; $i++): ?>
							<div class="input-group mb-3">
							<span class="input-group-text" id="basic-addon1">@</span>
							<input required type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
							</div>
							<?php endfor; ?>
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