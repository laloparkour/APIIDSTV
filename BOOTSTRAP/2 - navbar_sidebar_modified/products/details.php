<?php


    include("../app/ProductsController.php");
    
    $slug = $_GET['slug'];
    
    $productController = new ProductsController();
    
    $product = $productController->checkProduct($slug);
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
				
                <?php include('../layouts/sidebar.template.php')?>

				<div class="col-md-10 col-lg-10 col-sm-12">
					
					<section>
						<div class="row bg-light m-2">
							<div class="col">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="/">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">Products</li>
									</ol>
								</nav>                            
							</div>
						</div>
					</section> 

					<section>
						<div class="row">
                            <div class="col-md-6 col-sm-12"> 
                                <div class="card mb-2">
                                    <img src="<?= $product->cover; ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $product->name ?></h5>
                                        <p class="card-text"><?= $product->description; ?></p>

                                        <div class="row">
                                            <a data-bs-toggle="modal" data-bs-target="#addProductModal" href="#" class="btn btn-warning mb-1 col-6">
                                                Editar
                                            </a>
                                            <a onclick="eliminar()" href="#" class="btn btn-danger mb-1 col-6">
                                                Eliminar
                                            </a>
                                            <a href="details.php?slug=<?=$product->slug;?>" class="btn btn-info col-12">
                                                Detalles
                                            </a>
                                        </div>
                                    </div>

                                    <h5>Marca</h5>
                                    <p><?= $product->brand->name ?></p>


                                    <?php  foreach($products as $product): ?>
                                        <?php  endforeach; ?>

                                </div>  
							</div>
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
			function eliminar(target)
			{
				swal({
				  title: "Are you sure?",
				  text: "Once deleted, you will not be able to recover this imaginary file!",
				  icon: "warning",
				  buttons: true,
				  dangerMode: true,
				})
				.then((willDelete) => {
				  if (willDelete) {
				    swal("Poof! Your imaginary file has been deleted!", {
				      icon: "success",
				    });
				  } else {
				    swal("Your imaginary file is safe!");
				  }
				});
			}
		</script>
	</body>
</html>