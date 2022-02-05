<template>
    <div class="flex flex-column ml-2 mt-2">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{columnItem.column_name}}</h5>
                <ul class="list-group list-group-flush mt-2">
                    <card v-for="cardItem in cards"
                    v-bind:key="cardItem.card_id" v-bind:cardItem="cardItem"/>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    import { defineComponent } from 'vue'
    import Card from '@/Jetstream/custom/Card'

    export default defineComponent({
        components: {
            Card
        },
        props: {
            columnItem: Object,
            cards: {type: Array, required: true}
        }
    })
</script>
