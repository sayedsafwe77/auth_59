<template>

<div v-if="data_render" >
    <div v-for='product in products' class="inline-block">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{product.n}}</h5>
            <p class="card-text">{{product.d}}</p>
            <a href="#" class="btn btn-primary">{{product.p}}</a>
        </div>
        </div>
    </div>
    <ul >
        <li class="list-item" v-for="page in meta.last_page"><span @click="fetchNewPage" :id="meta.links[page].url">{{page}}</span></li>
    </ul>
</div>
</template>
<script>
export default ({
    data(){
        return {
            products: [],
            data_render: false,
            meta: []
        }
    },
    mounted(){
        fetch('http://auth_59.test/api/products')
        .then(response => response.json())
        .then(data => {
            this.products = data.data;
            this.data_render=true;
                this.meta = data.meta
            })
    },
    methods:{
        fetchNewPage(e){
            fetch(e.target.id)
            .then(response => response.json())
            .then(data => {
                this.products = data.data;
                this.data_render=true;
                    this.meta = data.meta
                })
        }
    }
})
</script>
<style>
    .inline-block{
        display: inline-block;
        width: 25%;
    }
    ul{
        list-style-type: none;
    }
    .list-item{
        display: inline-block;
        background: rgb(168, 161, 161);
        padding: 10px;
        border: 1px solid black;
    }
</style>
