<template>
    <div>
         <a href="#" class="btn btn-success my-3">Criar</a>
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" v-for="titulo in titulos">{{titulo}}</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead> 
            <tbody >
                <tr v-for="item in itens">
                    <td v-for="i in item">{{i}}</td>
                    <td>
                        <a href="#" class="btn btn-outline-success btn-sm mx-1">Detalhe</a>
                        <a href="#" class="btn btn-outline-primary btn-sm mx-1">Editar</a>
                        <a href="#" class="btn btn-outline-danger btn-sm mx-1">Deletar</a>
                    </td>
                </tr>
                
                
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        props:['titulos','itens']
    }
</script>
