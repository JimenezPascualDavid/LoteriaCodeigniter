<?php
class resultado extends CI_Controller{

public function index(){
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
        
    }
    $mensaje=$_SESSION['mensaje'];
    $link=$_SESSION['link'];
    $estado=$_SESSION['estado'];
    
    unset($_SESSION['mensaje']);
    unset($_SESSION['link']);
    unset($_SESSION['estado']);


    $datos=array('mensaje'=>$mensaje,'link'=>$link,'estado'=>$estado);
    cargar($this,'plantilla/resultado',$datos);

}





}