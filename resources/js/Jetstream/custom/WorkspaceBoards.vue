<template>
    <div class="p-2">
        <div>{{workspaceItem.workspace_name}}</div>
        <div class="flex flex-row flex-wrap">
            <board-icon v-for="boardItem in boards"
            v-bind:key="boardItem.board_id" v-bind:boardItem="boardItem"/>
        </div>
    </div>
</template>

<script>
import { defineComponent } from 'vue'
import BoardIcon from '@/Jetstream/custom/BoardIcon.vue'

export default defineComponent({
    components: {
        BoardIcon
    },
    props: {
        workspaceItem: Object, 
        boards: {type: Array, required: true}
    }
})
</script>
