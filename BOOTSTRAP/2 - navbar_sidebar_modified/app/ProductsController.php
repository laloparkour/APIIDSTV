<?php

    include_once "config.php";

    if (isset($_POST["action"])) {

        if (isset($_POST['super_token']) ||
            isset($_POST['sprtoken']) && 
            $_POST['super_token'] == $_SESSION['super_token'] || 
            $_POST['sprtoken'] == $_SESSION['super_token']) {
            switch($_POST['action']) {
                case 'store':

                    $name = strip_tags($_POST['name']);
                    $description = strip_tags($_POST['description']);
                    $features = strip_tags($_POST['features']);
                    $brand_id = strip_tags($_POST['brand_id']);
    
                    $target_path = "../public/img/";
                    $target_path = $target_path . basename($_FILES['foto']['name']);
                    if(move_uploaded_file($_FILES['foto']['tmp_name'], $target_path)) {
                        echo "El archivo ".  basename($_FILES['foto']['name']). 
                        " ha sido subido";
                    } else{
                        echo "Ha ocurrido un error, trate de nuevo!";
                    }
    
                    $productController = new ProductsController();
    
                    $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $name);
                    $slug = strtolower($slug);
    
                    if($productController->checkProduct($slug)) {
                        header("Location:".BASE_PATH."products?error");
                    } else {
                        $productController->store($name, $target_path, $slug, $brand_id, $description, $features);
                    }
    
                break;
                case 'update':
    
                    $name = strip_tags($_POST['name']);
                    $slug = strip_tags($_POST['slug']);
                    $description = strip_tags($_POST['description']);
                    $features = strip_tags($_POST['features']);
                    $brand_id = strip_tags($_POST['brand_id']); 
                    $id = strip_tags($_POST['id']);

                    $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $name);
                    $slug = strtolower($slug);
    
                    $productsController = new ProductsController();
                    $productsController->updateProduct($name, $slug, $description, $features, $brand_id, $id);
    
                break;
                case 'delete':
    
                    $id = strip_tags($_POST['id']);

                    $productsController = new ProductsController();
                    $productsController->remove($id);
    
                break;
            }
        }

    }

    Class ProductsController {
        
        public function getProducts() {

            $curl = curl_init();
            
            curl_setopt_array($curl, array(
              CURLOPT_URL => 'https://crud.jonathansoto.mx/api/products',
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'GET',
              CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $_SESSION['token']
              ),
            ));
            
            $response = curl_exec($curl);
            curl_close($curl);
            $response = json_decode($response);

            if (isset($response->code) && $response->code > 0) {
                return $response->data;
            } else {
                return array();
            }

        }

        public function store($name, $nombreImagen, $slug, $brand_id, $description, $features) {

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://crud.jonathansoto.mx/api/products',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => array(
                    'name' => $name,
                    'slug' => $slug,
                    'description' => $description,
                    'features' => $features,
                    'brand_id' => $brand_id,
                    'cover'=> new CURLFILE($nombreImagen,
                )),
                CURLOPT_HTTPHEADER => array(
                    'Authorization: Bearer ' . $_SESSION['token']
                ),
            ));

            $response = curl_exec($curl);
            curl_close($curl);
            $response = json_decode($response);

            if (isset($response->code) && $response->code > 0) {
                header("Location:".BASE_PATH."products?".$response->message);
            } else {
                header("Location:".BASE_PATH."products?".$response->message);
            }

        }

        public function checkProduct($slug) {

            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/products/slug/'.$slug,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $_SESSION['token']
            ),
            ));

            $response = curl_exec($curl);
            curl_close($curl);
            $response = json_decode($response);

            if (isset($response->code) && $response->code > 0) {
                return $response->data;
            } else {
                return array();
            }

        }

        public function remove($id) {
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/products/'.$id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'DELETE',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $_SESSION['token']
            ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);
            echo $response;

            $response = json_decode($response);
            
            if (isset($response->code) && $response->code > 0) {
                return true;
            } else {
                return false;
            }

        }

        public function updateProduct($name, $slug, $description, $features, $brand_id, $id) {
			$curl = curl_init(); 

			curl_setopt_array($curl, array(
			  CURLOPT_URL => 'https://crud.jonathansoto.mx/api/products',
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => '',
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 0,
			  CURLOPT_FOLLOWLOCATION => true,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST => 'PUT',
			  CURLOPT_POSTFIELDS => 'name='.$name.'&slug='.$slug.'&description='.$description.'&features='.$features.'&brand_id='.$brand_id.'&id='.$id,
			  CURLOPT_HTTPHEADER => array(
			   'Authorization: Bearer '.$_SESSION['token'],
			    'Content-Type: application/x-www-form-urlencoded'
			  ),
			));

			$response = curl_exec($curl); 
			curl_close($curl);
			$response = json_decode($response); 

			if (isset($response->code) && $response->code > 0) { 
                header("Location:".BASE_PATH."products?success");

			}else{
                header("Location:".BASE_PATH."products?error");
			}
            
		}

    }

?>

