<template>
    <li @click="openCardModal" class="list-group-item mt-2" style="cursor: pointer">
        <div class="flex justify-content-between" style="border-radius: 3px; box-shadow: 0 1px 0 #091e4240; background-color:#fff">        
            <h6>{{cardItem.card_name}}</h6>
        </div>
    </li>
    <jet-dialog-modal :show="editingCard" @close="closeCardModal">
        <template #title>
            Редактировать карточку
            </template>

        <template #content>
            <div class="mt-4">
                <jet-input type="text" class="mt-1 block w-3/4" placeholder="Название карточки"
                            v-model="form.cardName"
                            @keyup.enter="updateCard" />

                <jet-input type="text" class="mt-1 block w-3/4" placeholder="Описание"
                            v-model="form.cardDescription"
                            @keyup.enter="updateCard" />
            </div>
        </template>

        <template #footer>
            <jet-secondary-button @click="closeCardModal">
                Cancel
            </jet-secondary-button>

            <jet-danger-button class="ml-3" @click="archiveCard" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                Archive
            </jet-danger-button>
        </template>
    </jet-dialog-modal>
</template>

<script>
import { defineComponent } from 'vue'
import JetDialogModal from '@/Jetstream/DialogModal.vue'
import JetDangerButton from '@/Jetstream/DangerButton.vue'
import JetInput from '@/Jetstream/Input.vue'
import JetSecondaryButton from '@/Jetstream/SecondaryButton.vue'

export default defineComponent({
    components: {
        JetDangerButton,
        JetDialogModal,
        JetInput,
        JetSecondaryButton,
    },
    props: {
        cardItem: Object
    },
    data() {
            return {
                editingCard: false,
                cardKey: 0,

            form: this.$inertia.form({
                cardName: this.cardItem.card_name,
                cardDescription: this.cardItem.card_description
            })
        }
    },
    methods: {
        openCardModal() {
            this.editingCard = true;
        },

        updateCard() {
            if (/\S/.test(this.form.cardName))
            {
                this.form.put(route('updateCard', this.cardItem.card_id));
                this.closeCardModal();

                //Для ререндеринга компонента нужно изменить его ключ.
                this.$.vnode.key += 1;
                this.form.reset();
            }
        },

        closeCardModal() {
            this.editingCard = false;

            this.form.reset();
        },

        archiveCard() {
            this.form.put(route('archiveCard', this.cardItem.card_id));
            this.closeCardModal();

            this.form.reset();
        }
    }
})
</script>
