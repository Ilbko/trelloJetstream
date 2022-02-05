<template>
    <li class="list-group-item">
        <div class="flex justify-content-between">        
            <h6>{{cardItem.card_name}}</h6>
        </div>
    </li>
</template>

<script>
import { defineComponent } from 'vue'

export default defineComponent({
    props: {
        cardItem: Object
    }
})
</script>
