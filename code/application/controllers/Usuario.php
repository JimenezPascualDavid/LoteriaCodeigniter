<?php
class Usuario extends CI_Controller{
    public function Create(){
        cargar($this,"Usuario/Create");
    }
    public function CreatePost(){
        $nombre=isset($_POST['nombre'])?$_POST['nombre']:null;
        $pass=isset($_POST['password'])?$_POST['password']:null;
        if($nombre!=null){
            if($pass!=null){
                $this->load->model('usuario_model');
                $this->usuario_model->create($nombre,$pass);
                redirect("Usuario/Login");
            }else{
                prg('La contraseña no puede estar vacia','usuario/create','warning');
            }
        }else{
            prg('El nombre no puede estar vacio','usuario/create','warning');
        }
    }

    public function Login(){
        cargar($this,"Usuario/Login");
    }

    public function LoginPost(){
        $nombre=isset($_POST['nombre'])?$_POST['nombre']:null;
        $pass=isset($_POST['password'])?$_POST['password']:null;
        if($nombre!=null){
            if($pass!=null){
                try{
                    $this->load->model('usuario_model');
                    $user = $this->usuario_model->login($nombre,$pass);

                    if(session_status() == PHP_SESSION_NONE) {
                        session_start();
                    }
                    $_SESSION['usuario'] = $user;

                    redirect(base_url());
                }
                catch(Exception $e) {
                    prg($e->getMessage(),'usuario/create','danger');
                }
            }else{
                prg('La contraseña no puede estar vacia','usuario/login','warning');
            }
        }else{
            prg('El nombre no puede estar vacio','usuario/login','warning');
        }

        }
        public function logout(){
            if(session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            if(isset($_SESSION['usuario'])) {
                unset($_SESSION['usuario']);
                prg('!Vuelva pronto!','principal');
            }
        }

    public function Opciones(){

    if (rol('admin')) {
        $tipo="admin";
        $datos=["tipo"=>$tipo];
        cargar($this,"Usuario/Opciones",$datos);

    }else if (rol('usuario')) {

        $tipo="user";
        $datos=["tipo"=>$tipo];
        cargar($this,"Usuario/Opciones",$datos);
    }else{
        prg('Privilegios insuficientes','usuario/login','warning');
    }
    }

    
}