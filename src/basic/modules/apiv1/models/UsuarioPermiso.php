<?php

namespace app\modules\apiv1\models;

class UsuarioPermiso extends \app\models\UsuarioPermiso
{
    public function fields (){
        return ['usuario', 'permiso'];
    }
}