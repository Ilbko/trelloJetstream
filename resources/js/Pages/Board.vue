<template>
    <Head title="{{boardItem.board_name}} | Trello"/>
    <app-layout title="Dashboard">
        <!-- <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template> -->

        <div class="max-w">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex flex overflow-scroll bg-white overflow-hidden shadow-sm sm:rounded-lg pb-2">
                    <column v-for="columnItem in columns" 
                    v-bind:key="columnItem.column_id" v-bind:columnItem="columnItem"
                    v-bind:cards="selectedCards(cards, columnItem.column_id)"/>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Head } from '@inertiajs/inertia-vue3'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import Column from '@/Jetstream/custom/Column.vue'

    export default defineComponent({
        components: {
            Head,
            AppLayout,
            Column
        },
        props: {
            boardItem: Object,
            columns: {type: Array, required: true},
            cards: {type: Array, required: true}
        },
        created() {
            console.log('test');
        },
        methods: {
            selectedCards(cards, id){
                console.log(cards);
                return cards.filter(item => item.card_column_id == id);
            }
        }
    })
</script>