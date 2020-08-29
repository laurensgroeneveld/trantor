<template>
    <form @submit.prevent="submit">
        <div class="relative">
            <textarea
                rows="2"
                maxlength="255"
                class="block border-2 border-gray-300 focus:border-blue-500 focus:shadow rounded p-4 outline-none text-gray-800 transition-all duration-200"
                v-model="form.comment"
            ></textarea>
            <button type="submit" class="absolute bottom-0 right-0 m-2 bg-gradient-to-r from-blue-500 to-indigo-700 hover:from-blue-600 hover:to-indigo-800 focus:from-blue-600 focus:to-indigo-800 px-3 py-2 rounded-full shadow hover:shadow-md focus:shadow-inner transition-all duration-200 text-blue-100">Done
            </button>
        </div>
    </form>
</template>

<script>
    export default {
        props: {
            todo: Object,
        },
        data() {
            return {
                form: {
                    comment: null,
                }
            }
        },
        methods: {
            submit() {
                this.$inertia.post(`/todos/${this.todo.id}/resolve`, this.form);
            }
        }
    }
</script>
