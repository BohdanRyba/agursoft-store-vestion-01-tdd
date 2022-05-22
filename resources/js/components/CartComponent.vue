<template>
    <div></div>
</template>
<script>
import {eventBus} from "../app";

export default {
    created() {
        eventBus.$on('addToCart', (productId, options) => {
            console.log('product id: ' + productId)
            console.log('product variant: ', options.variant)
        })
    }
}
</script>
    
