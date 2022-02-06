<template>
    <li class="list-group-item mt-2">
        <div class="flex justify-content-between" style="border-radius: 3px;">
            <div ref="toggleableFirst" style="display: block" class="w-auto mx-auto">
                <jet-button @click="toggleInput">
                    Добавить карточку
                </jet-button> 
            </div>     
            <div>
            <form @submit.prevent="onSubmit">
                <div ref="toggleableSecond" class="flex flex-row" style="display: none">
                    <input type="hidden" v-model="form.columnId">
                    <jet-input class="mx-auto" type="text" placeholder="Введите название..."
                    v-model="form.cardName"/>   
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
    </li>
</template>

<script>
import { defineComponent } from 'vue'
import JetInput from '@/Jetstream/Input.vue'
import JetButton from '@/Jetstream/Button.vue'
import JetSecondaryButton from '@/Jetstream/SecondaryButton.vue'

export default defineComponent({
    // setup() {
    //     const toggleable = ref(null)

    //     onMounted(() => {console.log(toggleable)})

    //     return { toggleable }
    // },

    components: {
        JetInput, 
        JetButton,
        JetSecondaryButton
    },
    props: {
        columnIdProp: Number
    },
    data() {
        return {
            form: this.$inertia.form({
            cardName: '',
            columnId: this.columnIdProp
            })
        }
    },
    methods: {
        toggleInput() {
            //Этот подход не работает, поскольку свойства данных элементов
            //будут меняться в каждом компоненте Vue.
            // var all = document.getElementsByClassName('toggleable');
            // console.log(all[0]);
            // for (var i = 0; i < all.length; i++){
            //     all[i].style.display === "none" ? all[i].style.display = "block" 
            //     : all[i].style.display = "none";
            // }

            //Во избежание этого используются $refs.
            if (this.$refs.toggleableFirst.style.display === "none")
            {
                this.$refs.toggleableFirst.style.display = "block";
                this.$refs.toggleableSecond.style.display = "none";
            }
            else
            {
                this.$refs.toggleableFirst.style.display = "none";
                this.$refs.toggleableSecond.style.display = "block";
            }           
            this.form.reset();
        },
        onSubmit() {
            if (/\S/.test(this.form.cardName))
            {
                this.form.post(route('storeCard'), {preserveScroll: true, resetOnSuccess: false});
                this.form.reset();     
                // this.$emit('reloadCards');
            }
        }
    }
})
</script>
