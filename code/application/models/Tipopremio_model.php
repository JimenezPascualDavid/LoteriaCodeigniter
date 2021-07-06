<?php

class tipopremio_model extends CI_Model{
    function read(){
        return R::findAll('tipopremio');
    }
}