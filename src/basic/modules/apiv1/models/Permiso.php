<?php

namespace app\modules\apiv1\models;

class Permiso extends \app\models\Permiso
{
    public function fields (){
        return [  'id','descripcion'];
    }
    public function extraFields(){
        return ['istaff' ]; 
    }
}