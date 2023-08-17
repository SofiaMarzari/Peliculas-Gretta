<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    require_once('model/loginmodel.php');
    require_once('view/view.php');
    require_once('controller/controller.php');
    require 'C:\Users\marza\vendor\autoload.php';
    require 'C:\Users\marza\vendor\phpmailer\phpmailer\src\PHPMailer.php';

class logincontroller{
    
    private $model;
    private $view;
    private $nomUsr;
    private $controller;
    private $codRecuperacion;

    public function __construct(){
        $this->model = new loginmodel();
        $this->view = new view();
        $this->controller = new controller();
        $this->mail = new PHPMailer(true);
    }

    public function verificarUsr(){
        $nomUsr = $_POST['usuario'];
        $clave = $_POST['clave'];

        $existeUsr = $this->model->buscarExistenciaUsr($nomUsr);
        if(isset($existeUsr)){
            if(password_verify($clave, $existeUsr[0]['password'])){
                session_start();
                $_SESSION['nombreUsuario'] = $nomUsr;
                header('Location: http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']). '/admin');
            }else{
                header('Location: http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']). '/login');
            }
        }else{
            header('Location: http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']). '/login');
        }
    }

    public function enviarCodigoDeRestauracion(){
        $usr = $_POST['usuario'];

        $existeUsr = $this->model->buscarExistenciaUsr($usr);
        if(isset($existeUsr)){
            $this->nomUsr = $usr;
            $mailUsr = $existeUsr[0]['mail'];
            $this->restaurarPassword($mailUsr);
        }
    }

    public function mostrarRecuperarContraseña(){
        $generos = $this->controller->pedirGeneros();
        $this->view->verRecuperarContraseña($generos);
    }

    public function restaurarPassword($destinatario){
        $this->mail->isSMTP();
        $this->mail->SMTPAuth = true;
        $this->mail->SMTPSecure = 'tls';
        $this->mail->Host = "smtp.gmail.com";
        $this->mail->Port = 587;
        $this->mail->Username = 'pelisgrettaadm@gmail.com';
        $this->mail->Password = 'Tom12345'; 
        //con el repositorio privado solo acceden los desarrolladores
        //pero lo dejo publico en esta ocasion ya que es un proyecto de ejemplo, nada formal, 
        //por lo tanto no importa que la password quede sin seguridad
        $this->mail->isHTML(true);
        $this->mail->setFrom('pelisgrettaadm@gmail.com');
        $this->mail->AddAddress($destinatario);
        $this->mail->Subject = "Codigo de recuperacion";
        $this->codRecuperacion = random_int(1000, 9999);
        $this->mail->Body = "Su código de recuperación <h3>".$this->codRecuperacion."</h3>";

        if($this->mail->send()){
            $generos = $this->controller->pedirGeneros();
            $this->view->verCargarCodigo($generos, $this->codRecuperacion);
        }else{
            header('Location: http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']). '/olvidePassword');
        }

    }

    public function validarCodigo(){
        $codigoIngr = $_POST['codigoingresado'];
        $codigoGene = $_POST['codigogenerado'];

        if(isset($codigoIngr)){
            if($codigoIngr == $codigoGene){
                header('Location: http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']). '/nuevaPassword');
            }else{
                header('Location: http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']). '/olvidePassword');
            }
        }

    }

    public function mostrarNuevaContraseña(){
        $generos = $this->controller->pedirGeneros();
        $this->view->verNuevaContraseña($generos);
    }

    public function cambiarContraseña(){
        $nuevaPassword = $_POST['claveNueva'];

        if(isset($nuevaPassword)){
            $this->model->modificarPassword($nomUsr, $nuevaPassword);
            header('Location: http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']). '/login');
        }
    }

    public function registrarUsrNuevo(){
        $nomUsr = $_POST['usuario'];
        $clave = $_POST['clave'];
        $mail = $_POST['mail'];
        $existencia = $this->model->buscarExistenciaUsr($nomUsr);
        if(isset($existencia[0])){
            header('Location: http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']). '/login');
        }else{
            $this->model->guardarUsuarioNuevo($nomUsr, $mail, $clave);
            $this->verificarUsr();
        }
    }

    public function deslog(){
        session_start();
        session_destroy();
        header('Location: http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']). '/');
    }

}

?>