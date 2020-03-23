<template>
    <span class="float-lef">
        <span v-if="item" class="float-lef">
            <button v-on:click="preencheFormulario()" type="button" v-bind:class="defineCss" data-toggle="modal" v-bind:data-target="'#' + nome">{{titulo}}</button>
        </span>
        <span v-if="!item" class="float-lef">
            <button type="button" v-bind:class="defineCss" data-toggle="modal" v-bind:data-target="'#' + nome">{{titulo}}</button>
        </span>
    </span>
</template>

<script>
    export default {
       props:['nome','titulo','css','item'],
       computed:{
            defineCss:function(){
                if(this.css){
                    return this.css;
                }else{
                    return "btn btn-primary";
                }
                
            }
        },
        methods:{
            preencheFormulario:function(){
                this.$store.commit('setItem',this.item);
            }
        }
    }
</script>
