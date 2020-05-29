#!/bin/bash
sudo bin/yii.sh migrate/create create_permiso_table --fields="descripcion:string:notNull,istaff:boolean"