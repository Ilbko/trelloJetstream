<template>
    <div class="flex flex-column ml-2 mt-2" style="background-color: #eee; border-radius: 3px;">
        <div class="card" style="width: 18rem;">
            <div class="card-body p-2">
                <div class="flex flex-row justify-content-center">
                    <h5 class="card-title">{{columnItem.column_name}}</h5>
                    <jet-danger-button class="ml-3" @click="archiveColumn">
                        Archive
                    </jet-danger-button>
                </div>
                <ul class="list-group list-group-flush mt-2">
                    <card v-for="cardItem in cards"
                    v-bind:key="cardItem.card_id" v-bind:cardItem="cardItem"/>
                    <add-card v-bind:columnIdProp="columnItem.column_id"/>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    import { defineComponent } from 'vue'
    import Card from '@/Jetstream/custom/Card'
    import AddCard from '@/Jetstream/custom/AddCard'
    import JetDangerButton from '@/Jetstream/DangerButton.vue'

    export default defineComponent({
        components: {
            Card,
            AddCard,
            JetDangerButton
        },
        data() {
            return {
            form: this.$inertia.form({})
            }
        },
        props: {
            columnItem: Object,
            cards: {type: Array, required: true}
        },
        methods: {
            archiveColumn() {
            this.form.put(route('archiveColumn', this.columnItem.column_id));

            this.form.reset();
            }
        }
    })
</script>
