<?php

    session_start();

    if (isset($_POST["action"])) {

        switch($_POST['action']) {
            case 'store':

                $name = strip_tags($_POST['name']);
                $description = strip_tags($_POST['description']);
                $features = strip_tags($_POST['features']);

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
                    echo "El producto ya existe";

                    exit;
                    header("Location:../products/index.php?".$response->message);

                } else {
                    $productController->store($name, $target_path, $slug, $description, $features);
                }


            break;
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

        public function store($name, $nombreImagen, $slug, $description, $features) {

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
                    'brand_id' => '1',
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
                header("Location:../products/index.php?".$response->message);
            } else {
                header("Location:../products/index.php?".$response->message);
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

        


    }

?>