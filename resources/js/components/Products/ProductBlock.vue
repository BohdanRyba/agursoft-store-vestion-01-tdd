<template>
    <div class="container-indent">
        <div class="container container-fluid-custom-mobile-padding">
            <div class="tt-block-title">
                <h1 class="tt-title">{{ title }}</h1>
                <div class="tt-description">{{subtitle}}</div>
            </div>
            <list-component :products="JSON.parse(products)"></list-component>
        </div>
    </div>

</template>
<script>
import ListComponent from "./ListComponent";
export default {
    props:['title', 'subtitle', 'products'],
    mounted() {
        console.log()
    }
}
</script>
