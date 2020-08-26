<template>
    <form @submit.prevent="submit">
        <textarea rows="3" class="block border border-gray-300 rounded" v-model="form.comment"></textarea>
        <button type="submit">Opslaan</button>
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

<style lang="scss" scoped>

</style>
