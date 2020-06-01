<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\web\View;

$this->title = 'Vue';
$this->params['breadcrumbs'][] = $this->title;
$this->registerJsFile("https://cdn.jsdelivr.net/npm/vue/dist/vue.js",
                      ['position'=>View::POS_HEAD]);


?>
<body>
<div id="app">
    {{ message }}
    <h1>Nombre : </h1>
    <input v-bind:placeholder="hint" > <br>
    <span v-if="mostrar">este texto se ṕuede ocultar</span>
    <!-- <button v-on:click="show">mostrar</button> -->
    <button v-on:click="mostrar = !mostrar">{{mostrar?'Ocultar':'Mostrar'}}</button>

    <ul>
        <li v-for="musico in musicos">{{musico.nombre}}</li>
    </ul>
</div>

<script>
    var app = new Vue({
        el: '#app',
        data: {
            message: 'Hello Vue!',
            hint: 'ingrerse su nombre',
            mostrar: false,
//            musicos:[
            //              'U2',
            //            'Bob Marley',
            //          'Yellow man',
            //        'Onda Vaga'
            //  ],
            musicos:[
                {nombre:"U2"},
                {nombre:"Bob Marley"},
                {nombre:"Yellow Man"},
                {nombre:"Onda Vaga"}

            ]

        },
        methods:{
            show: function(){
                this.mostrar= true;
            }
        }
    })
</script>
</body>
</html>
