<template>
    <div class="small-box bg-aqua">
        <div class="inner">
            <h3>150</h3>
            <p>New Orders</p>
        </div>
        <div class="icon">
            <i class="fas fa-shopping-cart"></i>
        </div>
        <a href="#" class="small-box-footer">
            More info <i class="fas fa-arrow-circle-right"></i>
        </a>
    </div>
</template>

<script>
    export default {
       
    }
</script>

<style media="screen">
.bg-aqua{
    background-color: #00c0ef !important;
}
.small-box>.inner {
    padding: 10px;
    color: #fff !important;
}
.small-box h3 {
    font-size: 38px;
    font-weight: bold;
    margin: 0 0 10px 0;
    white-space: nowrap;
    padding: 0;
}
.small-box p {
    font-size: 15px;
}
.small-box .icon {
    -webkit-transition: all .3s linear;
    -o-transition: all .3s linear;
    transition: all .3s linear;
    position: absolute;
    top: -10px;
    right: 35px;
    z-index: 0;
    font-size: 90px;
    color: rgba(0,0,0,0.15);
}
.fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.small-box>.small-box-footer {
    position: relative;
    text-align: center;
    padding: 3px 0;
    color: #fff;
    color: rgba(255,255,255,0.8);
    display: block;
    z-index: 10;
    background: rgba(0,0,0,0.1);
    text-decoration: none;
}
.fa-arrow-circle-right:before {
    content: "\f0a9";
}
.fa-shopping-cart:before {
    content: "\f07a";
}
</style>