<?php
class Boleto extends CI_Controller{
    public function Create(){
        if (!rol('usuario')) {
            prg('Privilegios insuficientes <br><br> Debe usted Loguearse','usuario/login','warning');
        }else{
            cargar($this,'Boleto/Create');
        }
    }
    public function CreatePost(){

            $idUser=isset($_POST['UsuarioActivo'])?$_POST['UsuarioActivo']:null;
            $numero=isset($_POST['numero'])?$_POST['numero']:null;
            if($numero!=null && strlen($numero)==5 ){
                $this->load->model('boleto_model');
                $this->boleto_model->create($numero,$idUser);
                prg('Creado correctamente','principal',"success");
            }else{
                prg('El numero del boleto debe ser de cinco digitos','boleto/create','warning');
            }
        }
    public function Update(){
        if (!rol('usuario')) {
            prg('Privilegios insuficientes <br><br> Debe usted Loguearse','usuario/login','warning');
        }else{
            $this->load->model('boleto_model');
            $boletos=$this->boleto_model->read();
            $datos=['boletos'=>$boletos];
            cargar($this,'Boleto/Update',$datos);
        }
    }
    public function UpdatePost(){
        $id=isset($_POST['id'])?$_POST['id']:null;
        $numero=isset($_POST['numero'])?$_POST['numero']:null;
        if($numero!=null && strlen($numero)==5 ){
            $this->load->model('boleto_model');
            $this->boleto_model->update($id,$numero);
            prg('Creado correctamente','principal',"success");
        }else{
            prg('El numero del boleto debe ser de cinco digitos','boleto/update','warning');
        }
}
}