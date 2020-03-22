<template>
    <button type="button" class="btn btn-primary" data-toggle="modal" v-bind:data-target="'#' + nome">{{titulo}}</button>
</template>

<script>
    export default {
       props:['nome','titulo']
    }
</script>
