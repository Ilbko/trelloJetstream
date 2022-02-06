<template>
    <Head title="Workspaces | Trello"/>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

       <div class="py-12">
            <div class="flex flex-row max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="card" style="width: 25%">
                    <!-- <div class="card-body p-2">
                        <h3 class="card-title">{{workspaceItem.workspace_name}}</h3>
                        <ul class="list-group list-group-flush mt-2">
                            <workspace-icon v-for="workspaceItem in workspaces"
                            v-bind:key="workspaceItem.workspace_id" v-bind:workspaceItem="workspaceItem"/>
                        </ul>
                    </div> -->
                </div>
                <div style="width: 75%">
                    <workspaceBoards v-bind:workspaceItem="workspaceItem"
                    v-bind:boards="boards"/>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Head } from '@inertiajs/inertia-vue3'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import WorkspaceIcon from '@/Jetstream/custom/WorkspaceIcon.vue'
    import WorkspaceBoards from '@/Jetstream/custom/WorkspaceBoards.vue'

    export default defineComponent({
        components: {
            Head,
            AppLayout,
            WorkspaceIcon,
            WorkspaceBoards
        },
        props: {
            workspaceItem: Object,
            boards: {type: Array, required: true}
        }
    })
</script>