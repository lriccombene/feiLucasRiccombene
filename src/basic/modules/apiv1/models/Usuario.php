<?php

namespace app\modules\apiv1\models;

class Usuario extends \app\models\Usuario
{
    private $valor;

    public function fields (){
        return ['id', 'nombre','apellido'];
    }
    public function extraFields(){
        return ['permiso' ]; 
    }
  
}

