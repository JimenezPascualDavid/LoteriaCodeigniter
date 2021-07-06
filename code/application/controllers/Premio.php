<?php
class Premio extends CI_Controller{
    public function create(){
        if(rol('admin')){
            cargar($this,'premio/create');
        }else{
            prg('Privilegios insuficientes <br><br> Debe ser Administrador','usuario/login','warning');
        }
        
    }
    public function createPost(){
        $premio=$_POST['numero']?$_POST['numero']:null;
        $id=$_POST['idActivo']?$_POST['idActivo']:null;
        $tipo=$_POST['tipo']?$_POST['tipo']:null;
        if(strlen($premio)==5 ){
            $this->load->model('premio_model');
            $this->premio_model->create($premio,$id,$tipo);
            prg('Se ha creado el premio','usuario/opciones',);
        }else{
            prg('Necesita  cinco numeros','premio/create','warning');
        }

    }
    public function update(){
        if(rol('admin')){
            $this->load->model('premio_model');
            $premios=$this->premio_model->read();
            $datos=['premios'=>$premios];
            cargar($this,'premio/update',$datos);
        }else{
            prg('Privilegios insuficientes <br><br> Debe ser Administrador','usuario/login','warning');
        }
    }
    public function updatePost(){
        $nuevo=$_POST['numero']?$_POST['numero']:null;
        $id=$_POST['idNumero']?$_POST['idNumero']:null;
        if(strlen($nuevo)==5 ){
            $this->load->model('premio_model');
            $this->premio_model->update($id,$nuevo);
            prg('Se ha cambiado el premio','usuario/opciones',);
        }else{
            prg('Necesita  cinco numeros','premio/create','warning');
        }
    }
    public function opciones(){
        cargar($this,'premio/opciones');
    }
}
?>