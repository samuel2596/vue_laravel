<template>
    <div v-for="dato in datos">
        <h1>Añadir Pais</h1>
        <h3>{{datos.nombre}}</h3>
        <input v-model="datos.nombre">
        <p/>
        <el-button>boton</el-button>
        <!--<el-button type="danger" :icon="Delete" circle />-->





    </div>


</template>


<script type="text/javascript">
    import {
        Delete
    } from '@element-plus/icons-vue'




    // do not use same name with ref

    export default {



        name: "prueba",
        props: {
        },
        data: () => ({
            inputvue:"Prueba de input en vue",
            Mensaje:"PRUEBA DE TABLAS Y VUE",
            informacion: [
                { text: 'JavaScript' },
                { text: 'Vue.js' },
                { text: 'Laravel' },
                { text: 'Backpack' },
            ],
            newdatos:[
                {id: ''},
                {name:''},
                {activo:''},
            ],
            datos:[
                {id:1, nombre:'Samuel', telefonos:'56364355', activo:'No'},]
        }),
        methods:{
        },
        computed:{
        },
        created() {
        },
        mounted() {
        }
    };



</script>

<style>
    .demo-tabs > .el-tabs__content {
        padding: 32px;
        color: #6b778c;
        font-size: 32px;
        font-weight: 600;
    }

</style>

