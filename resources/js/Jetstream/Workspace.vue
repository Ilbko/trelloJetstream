<template>
    <div class="d-inline-flex ml-2 mt-2">
        <div class="card" style="height: 100px; width: 24%; background-color: #adff2f">
            <div class="card-body pt-2 mx-auto" style="width: 80%">
                <h5 class="card-title">{{workspaceItem.workspace_name}}</h5>
                    <!-- <div class="d-flex justify-content-between">
                        <a href="{{route('workspace', $workspace.workspace_id)}}">
                          <button class="btn btn-outline-success">Перейти</button>
                        </a> 
                        <a href="{{route('workspace-destroy', $workspace.workspace_id)}}">
                          <button class="btn btn-outline-danger">Удалить</button>
                        </a> 
                    </div> -->
            </div>
        </div>
    </div>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Link } from '@inertiajs/inertia-vue3'

    export default defineComponent({
        props: {
            workspaceItem: Object,
            Link
        }
    })    
</script>