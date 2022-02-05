<template>
    <div class="flex flex-column ml-2 mt-2" style="background-color: #eee; border-radius: 3px;">
        <div class="card" style="width: 18rem;">
            <div class="card-body p-2">
                <h5 class="card-title">{{columnItem.column_name}}</h5>
                <ul class="list-group list-group-flush mt-2">
                    <card v-for="cardItem in cards"
                    v-bind:key="cardItem.card_id" v-bind:cardItem="cardItem"/>
                    <add-card  v-bind:columnIdProp="columnItem.column_id"/>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Inertia } from '@inertiajs/inertia'
    import Card from '@/Jetstream/custom/Card'
    import AddCard from '@/Jetstream/custom/AddCard'

    export default defineComponent({
        components: {
            Card,
            AddCard
        },
        props: {
            columnItem: Object,
            cards: {type: Array, required: true}
        },
        methods: {
            // reloadCardsColumn() {
            //     console.log('reload');
            //     Inertia.reload({ only: ['cards'] });
            // }
        }
    })
</script>
