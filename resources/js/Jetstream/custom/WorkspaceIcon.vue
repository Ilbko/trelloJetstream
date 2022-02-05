<template>
    <li class="list-group-item mt-2">
        <Link :href="route('workspace', workspaceItem.workspace_id)">
            <div class="flex justify-content-between" style="border-radius: 3px; box-shadow: 0 1px 0 #091e4240; background-color:#fff">        
                <h6>{{workspaceItem.workspace_name}}</h6>
            </div>
        </Link>
    </li>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Link } from '@inertiajs/inertia-vue3'

    export default defineComponent({
        components: {
            Link
        },
        props: {
            workspaceItem: Object,
        }
    })    
</script>