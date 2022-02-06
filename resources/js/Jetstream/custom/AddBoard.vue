<template>
    <div class="mr-2 mt-2" style="width: 23%;">
        <div @click="openBoardModal" class="card" style="cursor: pointer; height: 100px; background-color: #ddd">
            <div class="card-body pt-2 mx-auto" style="width: 80%; text-align: center; vertical-align: middle;">
               Добавить доску
            </div>
        </div>

        <jet-dialog-modal :show="addingBoard" @close="closeBoardModal">
            <template #title>
                Добавить доску
                </template>

            <template #content>
                <div class="mt-4">
                    <jet-input type="text" class="mt-1 block w-3/4" placeholder="Название доски"
                                v-model="form.boardName" />
                    <jet-input-error :message="form.errors.filled" class="mt-2" />
                    <select v-model="form.workspaceId" class="form-select mt-2">
                        <option class="mt-2" v-for="workspaceItem in workspaces"
                        v-bind:key="workspaceItem.workspace_id" v-bind:value="workspaceItem.workspace_id">
                        {{workspaceItem.workspace_name}}</option>
                    </select>
                </div>
            </template>

            <template #footer>
                <jet-secondary-button @click="closeBoardModal">
                    Отменить
                </jet-secondary-button>
                <jet-button class="ml-3" @click="storeBoard">
                    Добавить
                </jet-button>
            </template>
        </jet-dialog-modal>
    </div>
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
    props: {
        workspaces: Array
    },
    data() {
            return {
                addingBoard: false,

            form: this.$inertia.form({
                boardName: '',
                workspaceId: this.workspaces[0].workspace_id
            })
        }
    },
    methods: {
        openBoardModal() {
            this.addingBoard = true;
        },
        storeBoard() {
            console.log(this.form.workspaceId);
            this.form.post(route('storeBoard'));

            this.form.reset();
            this.addingBoard = false;
        },
        closeBoardModal() {
            this.addingBoard = false;

            this.form.reset();
        }
    }
})
</script>
