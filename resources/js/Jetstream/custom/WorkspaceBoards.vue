<template>
    <div class="p-2 mb-2" style="border-radius: 3px; box-shadow: 0 1px 0 #091e4240; background-color:#fff">
        <div class="flex flex-row justify-content-center">
            <h5 class="mx-auto">{{workspaceItem.workspace_name}}</h5>
            <jet-danger-button class="pe-0" @click="destroyWorkspace">Удалить</jet-danger-button>
        </div>
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
import JetDangerButton from '@/Jetstream/DangerButton.vue'

export default defineComponent({
    components: {
        BoardIcon,
        AddBoard,
        JetDangerButton
    },
    props: {
        workspaceItem: Object,
        workspaces: {type: Array, required: true}, 
        boards: {type: Array, required: true}
    },
    methods: {
        destroyWorkspace() {
            if (confirm('Вы уверены, что хотите удалить это рабочее пространство?')) {
                this.$inertia.delete(route('destroyWorkspace'), this.workspaceItem);
            }
        }
    }
})
</script>
