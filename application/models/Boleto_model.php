<?php

class Boleto_model extends CI_Model{
    function create($numero,$idUser){
        $boleto=R::dispense('boleto'); 
        $boleto->numero=$numero; nombre
        $usuario=R::load('usuario',$idUser); 
        $boleto->coste="20";
        $usuario->ownBoletoList[]=$boleto; 
        R::store($usuario); 
        
    }
    function read(){
        return R::findAll('boleto');
    }
    function update($id,$numero){
       $boleto= R::load('boleto',$id);
       $boleto->numero=$numero;
       R::store($boleto);
        
    }
}



?>