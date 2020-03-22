<template>
    <button type="button" v-bind:class="defineCss" data-toggle="modal" v-bind:data-target="'#' + nome">{{titulo}}</button>
</template>

<script>
    export default {
       props:['nome','titulo','css'],
       computed:{
            defineCss:function(){
                if(this.css){
                    return this.css;
                }else{
                    return "btn btn-primary";
                }
                
            }
        }
    }
</script>
