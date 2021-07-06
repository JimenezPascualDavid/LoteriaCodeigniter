<?php
    function cargar($controlador,$ruta="principal",$datos=[]){

       $controlador->load->view('plantilla/cabecera',$datos);
        $controlador->load->view($ruta,$datos);
        $controlador->load->view('plantilla/pie');

    }
    function prg($mensaje="hola",$link="resultado",$severidad="success"){
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['mensaje'] = $mensaje;
        $_SESSION['link'] = $link;
        $_SESSION['estado'] = $severidad;
        
        header('Location:'.base_url().'Resultado');

    }

function rol($rol) {
    if (session_status () == PHP_SESSION_NONE) {session_start ();}
    $sol = false;
    
    if ($rol == 'usuario' && isset($_SESSION['usuario'])) {
        $sol = true;
    }

    if ($rol == 'admin' && isset($_SESSION['usuario']) && $_SESSION['usuario']->nombre == 'admin') {
        $sol = true;
    }
    
    if ($rol=='anon') {
        $sol = true;
    }
    
    return $sol;
}
?>
