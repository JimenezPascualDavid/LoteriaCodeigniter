<?php
class Participar extends CI_Controller{
    public function create(){
         if (!rol('usuario')) {
             prg('Privilegios insuficientes <br><br> Debe usted Loguearse','usuario/login','warning');
         }else{
            $this->load->model('boleto_model');
            $this->load->model('usuario_model');
            $datos['boletos']=$this->boleto_model->read();
            $datos['usuarios']=$this->usuario_model->read();
            cargar($this,"participar/create",$datos);
         }
    }
    public function createPost(){
        $id=isset($_POST['idBoleto'])?$_POST['idBoleto']:null;
        $cantidad=isset($_POST['cantidad'])?$_POST['cantidad']:null;
        $Conectado=isset($_POST['id'])?$_POST['id']:null;
        if($cantidad!=null && 20>$cantidad && $cantidad>1){
            
            $this->load->model('participar_model');
            $this->participar_model->participacion($id,$cantidad,$Conectado);
            prg('Ha ingresado dinero para la participacion','usuario/opciones');
        }else{
            prg('Debe introducir una cantidad comprendida <br> entre 1 y 20 euros','usuario/opciones','warning');
        }
    }
    public function ver(){
        if (!rol('usuario')) {
                prg('Privilegios insuficientes <br><br> Debe usted Loguearse','usuario/login','warning');
        }else{
            $this->load->model('participar_model');
            $participar=$this->participar_model->read();
            $this->load->model('premio_model');
            $premio=$this->premio_model->read();
            $this->load->model('tipopremio_model');
            $tipoPremio=$this->tipopremio_model->read();
            $datos=['participar'=>$participar,'premio'=>$premio,'tipo'=>$tipoPremio];
            cargar($this,'participar/ver',$datos);
        }
    }
    }
