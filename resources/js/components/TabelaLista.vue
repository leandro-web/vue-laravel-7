<template>
    <div>
        <a v-if="criar && !modal" v-bind:href="criar" class="btn btn-success  float-left">Criar</a>

        <modal-link v-if="criar && modal" nome="adicionar" titulo="Novo"></modal-link>

        <div class="form-inline float-right mb-3">
            <input type="search" class="form-control" placeholder="Buscar" v-model="buscar">
        </div>

        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th style="cursor:pointer;" v-on:click="ordenaColuna(index)" scope="col" v-for="(titulo,index) in titulos" :key="titulo.id">{{titulo}}</th>
                    <th scope="col" i-if="detalhe || editar || deletar">Ação</th>
                </tr>
            </thead> 
            <tbody >
                <tr v-for="(item,index) in lista" :key="item.id">
                    <td v-for="i in item" :key="i.id">{{i}}</td>
                    <td v-if="detalhe || editar || deletar">
                        <form v-bind:id="index" v-if="deletar && token" v-bind:action="deletar" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="token">
                            
                            <a v-if="detalhe" v-bind:href="detalhe" class="btn btn-outline-success btn-sm mx-1 float-left">Detalhe</a>
                            <a v-if="editar && !modal" v-bind:href="editar" class="btn btn-outline-primary btn-sm mx-1 float-lef">Editar</a>
                            <modal-link v-if="editar && modal" v-bind:item="item" nome="editar" titulo="Editar" css="btn btn-outline-primary btn-sm mx-1 float-lef"></modal-link>

                            <a href="#" class="btn btn-outline-danger btn-sm mx-1 float-lef" v-on:click="executaForm(index)">Deletar</a>
                        </form>

                        <span v-if="!token">
                            <a v-if="detalhe" v-bind:href="detalhe" class="btn btn-outline-success btn-sm mx-1">Detalhe</a>
                            <a v-if="editar && !modal" v-bind:href="editar" class="btn btn-outline-primary btn-sm mx-1">Editar</a>
                            <modal-link v-if="editar && modal" nome="editar" titulo="Editar" css="btn btn-outline-primary btn-sm mx-1"></modal-link>

                            <a v-if="deletar" v-bind:href="deletar" class="btn btn-outline-danger btn-sm mx-1">Deletar</a>
                        </span>

                        <span v-if="token && !deletar">
                            <a v-if="detalhe" v-bind:href="detalhe" class="btn btn-outline-success btn-sm mx-1">Detalhe</a>
                            <a v-if="editar && !modal" v-bind:href="editar" class="btn btn-outline-primary btn-sm mx-1">Editar</a>
                            <modal-link v-if="editar && modal" nome="editar" titulo="Editar" css="btn btn-outline-primary btn-sm mx-1"></modal-link>
                        </span>

                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
    export default {
        props:['titulos','itens','criar','detalhe','editar','deletar','token','ordem','ordemcol','modal'],
        data: function(){
            return{
                buscar:'',
                ordemAux: this.ordem || "asc",
                ordemAuxCol: this.ordemcol || 0
            }
        },
        methods:{
            executaForm: function(index){
                document.getElementById(index).submit();
            },
            ordenaColuna: function(coluna){
                this.ordemAuxCol = coluna;
                if(this.ordemAux.toLowerCase() == "asc"){
                    this.ordemAux = 'desc';
                }else{
                    this.ordemAux = 'asc';
                }
            }
        },
        computed:{
            lista: function(){
                
                let ordem = this.ordemAux;
                let ordemCol = this.ordemAuxCol;
                ordem = ordem.toLowerCase();
                ordemCol = parseInt(ordemCol);

                if(ordem == "asc"){
                    this.itens.sort(function(a,b){
                        if(Object.values(a)[ordemCol] > Object.values(b)[ordemCol]){ return 1; }
                        if(Object.values(a)[ordemCol] < Object.values(b)[ordemCol]){ return -1; }
                        return 0;
                    });
                }else{
                    this.itens.sort(function(a,b){
                        if(Object.values(a)[ordemCol] < Object.values(b)[ordemCol]){ return 1; }
                        if(Object.values(a)[ordemCol] > Object.values(b)[ordemCol]){ return -1; }
                        return 0;
                    });
                }

                if(this.busca){
                    return this.itens.filter(res => {
                        for(let k = 0; k < res.length; k++){
                            if((res[k] + "").toLowerCase().indexOf(this.buscar.toLowerCase()) >= 0){
                                return true;
                            }
                        }
                        return false;
                    });
                }
                return this.itens;
            }
        }
    }
</script>