<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>
			Products
		</title>
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<style type="text/css">
			.sidebar{
				height: 90vh;
			}
		</style>
	</head>
	<body>

		<nav class="navbar navbar-dark navbar-expand-lg bg-dark">
		  <div class="container-fluid">
		    <a class="navbar-brand" href="#">
                <img src="../public/img/logo.png" alt="" width="70" height="auto">
            </a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="#">Home</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="#">Link</a>
		        </li>
		        <li class="nav-item dropdown">
		          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
		            Dropdown
		          </a>
		          <ul class="dropdown-menu">
		            <li><a class="dropdown-item" href="#">Action</a></li>
		            <li><a class="dropdown-item" href="#">Another action</a></li>
		            <li><hr class="dropdown-divider"></li>
		            <li><a class="dropdown-item" href="#">Something else here</a></li>
		          </ul>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link disabled">Disabled</a>
		        </li>
		      </ul>
		    </div>
		  </div>
		</nav>

		<div class="container-fluid">
			
			<div class="row">
				
				<div class="col-sm-2 d-sm-block d-none bg-light sidebar">
					
					<ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
			          <li class="nav-item">
			            <a class="nav-link active" aria-current="page" href="#">Home</a>
			          </li>
			          <li class="nav-item">
			            <a class="nav-link" href="#">Link</a>
			          </li>
			          <li class="nav-item dropdown">
			            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
			              Dropdown
			            </a>
			            <ul class="dropdown-menu dropdown-menu-dark">
			              <li><a class="dropdown-item" href="#">Action</a></li>
			              <li><a class="dropdown-item" href="#">Another action</a></li>
			              <li>
			                <hr class="dropdown-divider">
			              </li>
			              <li><a class="dropdown-item" href="#">Something else here</a></li>
			            </ul>
			          </li>
			        </ul>	

				</div>

				<div class="col-md-10 col-lg-10 col-sm-12">
					
					<section>
						
						<div class="row bg-light m-2">
							
							<div class="col">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="#">Home</a></li>
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
									    <a onclick="eliminar(this)" href="#" class="btn btn-danger mb-1 col-6">
									    	Eliminar
									    </a>
									    <a href="#" class="btn btn-info col-12">
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

<!-- 		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script>
            eliminar() {
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
        </script> -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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