<template>
    <div>
        <div v-if="todos.length === 0">
            Geen todos gevonden.
        </div>
        <div v-else v-for="todo in todos">
            {{ todo.description }}
        </div>
    </div>
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
