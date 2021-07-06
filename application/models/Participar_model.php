<?php
class Participar_model extends CI_Model{
    function participacion($id,$cantidad,$Conectado){
        $Conectado=R::load('usuario',$Conectado);
        $boleto=R::load('boleto',$id);
        $participacion=R::dispense('participacion');
        $participacion->boleto=$boleto;
        $participacion->participante=$Conectado;
        $participacion->cantidad=$cantidad;
        R::store($participacion);

    }
    function read(){
        return R::findAll('participacion');
    }
}