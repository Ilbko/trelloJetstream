<template>
    <app-layout title="Workspaces | Trello">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="flex flex-row max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="card" style="width: 25%">
                    <div class="card-body p-2">
                        <h5 class="card-title">Workspaces</h5>
                        <ul class="list-group list-group-flush mt-2">
                            <workspace-icon v-for="workspaceItem in workspaces"
                            v-bind:key="workspaceItem.workspace_id" v-bind:workspaceItem="workspaceItem"/>
                        </ul>
                    </div>
                </div>
                <div style="width: 75%">
                    <workspaceBoards v-for="workspaceItem in workspaces" 
                    v-bind:key="workspaceItem.workspace_id" v-bind:workspaceItem="workspaceItem"
                    v-bind:boards="selectedBoards(boards, workspaceItem.workspace_id)"/>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import WorkspaceBoards from '@/Jetstream/custom/WorkspaceBoards.vue'
    import WorkspaceIcon from '@/Jetstream/custom/WorkspaceIcon.vue'

    export default defineComponent({
        components: {
            AppLayout,
            WorkspaceBoards, 
            WorkspaceIcon
        },
        props: {
            workspaces: Array,
            boards: Array
        },
        methods: {
            selectedBoards(boards, id){
                return boards.filter(item => item.board_workspace_id == id);
            }
        }
    })
</script>
