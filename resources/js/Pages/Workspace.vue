<template>
    <Head title="Workspaces | Trello"/>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="d-flex flex-wrap ">
                    <workspace v-for="workspaceItem in workspaces" 
                    v-bind:key="workspaceItem.workspace_id" v-bind:workspaceItem="workspaceItem"/>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent, onMounted } from 'vue'
    import { Head } from '@inertiajs/inertia-vue3'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import WorkspaceIcon from '@/Jetstream/custom/WorkspaceIcon.vue'

    export default defineComponent({
        components: {
            Head,
            AppLayout,
            WorkspaceIcon
        },
        props: {
            workspace: Object,
            boards: {type: Array, required: true}
        }
    })
</script>