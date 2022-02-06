<template>
    <li class="list-group-item mt-2">
        <div @click="openWorkspaceModal" class="flex justify-content-between" style="cursor: pointer; border-radius: 3px; box-shadow: 0 1px 0 #091e4240; background-color:#ddd">        
            <h6>+</h6>
        </div>
    </li>

    <jet-dialog-modal :show="addingWorkspace" @close="closeWorkspaceModal">
            <template #title>
                Добавить рабочее пространство
            </template>

            <template #content>
                <div class="mt-4">
                    <jet-input type="text" class="mt-1 block w-3/4" placeholder="Название рабочего пространства"
                                v-model="form.workspaceName" />
                    <jet-input-error :message="form.errors.filled" class="mt-2" />
                </div>
            </template>

            <template #footer>
                <jet-secondary-button @click="closeWorkspaceModal">
                    Отменить
                </jet-secondary-button>
                <jet-button class="ml-3" @click="storeWorkspace">
                    Добавить
                </jet-button>
            </template>
        </jet-dialog-modal>
</template>
<script>
import { defineComponent } from 'vue'
import JetDialogModal from '@/Jetstream/DialogModal.vue'
import JetSecondaryButton from '@/Jetstream/SecondaryButton.vue'
import JetInput from '@/Jetstream/Input.vue'
import JetInputError from '@/Jetstream/InputError.vue'
import JetButton from '@/Jetstream/Button.vue'

export default defineComponent({
    components: {
        JetSecondaryButton,
        JetDialogModal,
        JetInput,
        JetInputError,
        JetButton
    },
    data() {
            return {
                addingWorkspace: false,

            form: this.$inertia.form({
                workspaceName: '',
            })
        }
    },
    methods: {
        openWorkspaceModal() {
            this.addingWorkspace = true;
        },
        storeWorkspace() {
            console.log(this.form.workspaceName);
            this.form.post(route('storeWorkspace'));

            this.form.reset();
            this.addingWorkspace = false;
        },
        closeWorkspaceModal() {
            this.addingWorkspace = false;

            this.form.reset();
        }
    }
})
</script>
