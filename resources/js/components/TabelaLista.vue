<template>
    <div>
        <a v-if="criar" v-bind:href="criar" class="btn btn-success my-3 float-left">Criar</a>
        <div class="form-inline float-right">
            <input type="search" class="form-control" placeholder="Buscar" v-model="buscar">
        </div>

        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" v-for="titulo in titulos">{{titulo}}</th>
                    <th scope="col" i-if="detalhe || editar || deletar">Ação</th>
                </tr>
            </thead> 
            <tbody >
                <tr v-for="(item,index) in lista">
                    <td v-for="i in item">{{i}}</td>
                    <td v-if="detalhe || editar || deletar">
                        <form v-bind:id="index" v-if="deletar && token" v-bind:action="deletar" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="token">
                            
                            <a v-if="detalhe" v-bind:href="detalhe" class="btn btn-outline-success btn-sm mx-1">Detalhe</a>
                            <a v-if="editar" v-bind:href="editar" class="btn btn-outline-primary btn-sm mx-1">Editar</a>
                            <a href="#" class="btn btn-outline-danger btn-sm mx-1" v-on:click="executaForm(index)">Deletar</a>
                        </form>

                        <span v-if="!token">
                            <a v-if="detalhe" v-bind:href="detalhe" class="btn btn-outline-success btn-sm mx-1">Detalhe</a>
                            <a v-if="editar" v-bind:href="editar" class="btn btn-outline-primary btn-sm mx-1">Editar</a>
                            <a v-if="deletar" v-bind:href="deletar" class="btn btn-outline-danger btn-sm mx-1">Deletar</a>
                        </span>

                        <span v-if="token && !deletar">
                            <a v-if="detalhe" v-bind:href="detalhe" class="btn btn-outline-success btn-sm mx-1">Detalhe</a>
                            <a v-if="editar" v-bind:href="editar" class="btn btn-outline-primary btn-sm mx-1">Editar</a>
                        </span>

                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
    export default {
        props:['titulos','itens','criar','detalhe','editar','deletar','token'],
        data: function(){
            return{
                buscar:''
            }
        },
        methods:{
            executaForm: function(index){
                document.getElementById(index).submit();
            }
        },
        computed:{
            lista: function(){
                return this.itens.filter(res => {
                    for(let k = 0; k < res.length; k++){
                        if((res[k] + "").toLowerCase().indexOf(this.buscar.toLowerCase()) >= 0){
                            return true;
                        }
                    }
                    return false;
                });
                return this.itens;
            }
        }
    }
</script>