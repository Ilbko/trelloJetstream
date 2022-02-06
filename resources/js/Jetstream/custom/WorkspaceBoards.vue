<template>
    <div class="p-2 mb-2" style="border-radius: 3px; box-shadow: 0 1px 0 #091e4240; background-color:#fff">
        <div>{{workspaceItem.workspace_name}}</div>
        <div class="flex flex-row flex-wrap">
            <board-icon v-for="boardItem in boards"
            v-bind:key="boardItem.board_id" v-bind:boardItem="boardItem"/>
            <add-board v-bind:workspaces="workspaces"/>
        </div>
    </div>
</template>

<script>
import { defineComponent } from 'vue'
import BoardIcon from '@/Jetstream/custom/BoardIcon.vue'
import AddBoard from '@/Jetstream/custom/AddBoard.vue'

export default defineComponent({
    components: {
        BoardIcon,
        AddBoard
    },
    props: {
        workspaceItem: Object,
        workspaces: Array, 
        boards: {type: Array, required: true}
    }
})
</script>
