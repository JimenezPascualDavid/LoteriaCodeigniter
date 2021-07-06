<?php
class Usuario_model extends CI_Model{
    function create($nombre,$pass){
        $user=R::dispense('usuario');
        $user->nombre=$nombre;
        $user->password=password_hash($pass, PASSWORD_DEFAULT);
        R::store($user);

        }

        function login($nombre,$pass){

            $user = $this->existe($nombre);
            if($user == null) {
                throw new Exception("Usuario no existe");
            }
            if(!password_verify($pass, $user->password) ) {
                throw new Exception("Password incorrecto");
            }

            return $user;
        }

    function existe($nombre) {
        return R::findOne('usuario','nombre=?', [$nombre]);
    }

    function read(){
        return R::findAll('usuario');
    }

}