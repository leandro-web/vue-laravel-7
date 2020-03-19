<template>
    <div class="card">
        <div v-bind:class="defineCor">{{titulo}}</div>

        <div class="card-body">
            <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {
        props:['titulo','cor'],
        computed:{
            defineCor: function(){
                return "card-header text-white "+ (this.cor || "bg-primary");
            }
        }
    }
</script>
