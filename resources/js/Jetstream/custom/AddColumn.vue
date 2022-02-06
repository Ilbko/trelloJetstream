<template>
    <div class="mt-2 ml-2" style="border-radius: 3px;">
       <div class="flex justify-content-between" style="border-radius: 3px;">
            <div style="display: block" class="toggleable w-auto mx-auto">
                <jet-button @click="toggleInput">
                    Добавить колонку
                </jet-button> 
            </div>     
            <div style="width: 18rem;">
            <form @submit.prevent="onSubmit">
                <div class="toggleable flex flex-row" style="display: none">
                    <input type="hidden" v-model="form.boardId">
                    <jet-input class="mx-auto" type="text" placeholder="Введите название..."
                    v-model="form.columnName"/>   
                    <jet-button type="submit" class="w-auto mx-auto mr-2">
                        Добавить
                    </jet-button>
                    <jet-secondary-button @click="toggleInput" class="w-auto mx-auto m-2">
                        X
                    </jet-secondary-button>
                </div>
            </form>
            </div>
        </div> 
    </div>
</template>

<script>
import { defineComponent } from 'vue'
import JetInput from '@/Jetstream/Input.vue'
import JetButton from '@/Jetstream/Button.vue'
import JetSecondaryButton from '@/Jetstream/SecondaryButton.vue'

export default defineComponent({
    components: {
        JetInput, 
        JetButton,
        JetSecondaryButton
    },
    props: {
        boardIdProp: Number
    },
    data() {
        return {
            form: this.$inertia.form({
            columnName: '',
            boardId: this.boardIdProp
            })
        }
    },
    methods: {
        toggleInput() {
            var all = document.getElementsByClassName('toggleable');
            for (var i = 0; i < all.length; i++){
                all[i].style.display === "none" ? all[i].style.display = "block" 
                : all[i].style.display = "none";
            }

            this.form.reset();
        },
        onSubmit() {
            console.log('ping');
            if (/\S/.test(this.form.columnName))
            {
                console.log('ping');
                this.form.post(route('storeBoard'), {preserveScroll: true, resetOnSuccess: false});
                this.form.reset();     
                // this.$emit('reloadCards');
            }
        }
    }
})
</script>
