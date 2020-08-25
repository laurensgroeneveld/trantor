<template>
    <Layout title="Todos">
        <div v-if="$page.flash.message" class="alert">
            {{ $page.flash.message }}
        </div>
        <div v-if="todos.length === 0">
            Geen todos gevonden.
        </div>
        <div v-else v-for="todo in todos">
            {{ todo.description }}
        </div>
    </Layout>
</template>

<script>
    export default {
        props: {
            todos: Array,
        }
    }
</script>

<style lang="scss" scoped>

</style>
