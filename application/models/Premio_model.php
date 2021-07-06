<?php

class Premio_model extends CI_Model{
    function create($premio,$id,$tipo){
        $premios=R::dispense('premio');
        $usuario=R::load('usuario',$id);
        $premios->numero=$premio;
        $premios->nombre=$usuario;
        R::store($premios);

        $tipos=R::dispense('tipopremio');
        $premioRecogido=R::findOne('premio',"numero=?",[$premio]);
        $tipos->tipo=$tipo;
        $tipos->premio=$premioRecogido;
        if($tipo==1){
            $numero=4;
        }
        if($tipo==2){
            $numero=3;
        }
        if($tipo==3){
            $numero=2;
        }
        if($tipo==4){
            $numero=1.5;
        }
        if($tipo==5){
            $numero=1;
        }
        $tipos->multiplicador=$numero;
        R::store($tipos);

    }
    function update($id,$nuevo){
        $premio=R::load('premio',$id);
        $premio->numero=$nuevo;
        R::store($premio);
        
    }
    function read(){
        return R::findAll('premio');
    }
}
?>