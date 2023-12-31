<?php
    require_once("model/adminmodel.php");
    require_once("api/apiview/apiview.php");

    class apicontroller{
        private $modeladmin;
        private $apiview;
        private $data;

        public function __construct(){
            $this->modeladmin = new adminmodel();
            $this->apiview = new apiview();
            $this->data = file_get_contents("php://input");
        }

        public function data(){
            return json_decode($this->data);
        }

        public function getAllcomentarios(){
            $data = $this->modeladmin->getAllComentarios();
            if(isset($data)){
                $this->apiview->response($data, 200);
            }else{
                $this->apiview->response(null, 404);
            }
        }

        public function addcomentario(){
            $datos =  $this->data();

            if(isset($datos)){
                $comentario = $datos->comentario;
                $idUsr = $datos->id_usuario;
                $idPeli = $datos->id_pelicula;

                $agregado = $this->modeladmin->addComentario($comentario, $idPeli, $idUsr);

                if(isset($agregado)){
                    $this->apiview->response('Comentario cargado con exito!', 200);
                }else{
                    $this->apiview->response('Error al cargar comentario!', 404);
                }
            }
        }
    }

?>