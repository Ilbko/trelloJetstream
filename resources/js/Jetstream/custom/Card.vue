<template>
    <li class="list-group-item mt-2">
        <div class="flex justify-content-between" style="border-radius: 3px; box-shadow: 0 1px 0 #091e4240; background-color:#fff">        
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
