<template>
    <Layout title="Todos">
        <div v-if="$page.flash.message" class="alert">
            {{ $page.flash.message }}
        </div>
        <div v-if="todos.length === 0">
            Geen todos gevonden.
        </div>
        <div v-else v-for="todo in todos" :key="todo.id">
            <div class="flex justify-between mb-4">
                <div>
                    {{ todo.description }}
                    {{ todo.deadline }}
                </div>
                <div>
                    <ResolveTodoForm :todo="todo" />
                </div>
            </div>
        </div>
    </Layout>
</template>

<script>
    import ResolveTodoForm from "./ResolveTodoForm";
    export default {
        props: {
            todos: Array,
        },
        components: {
            ResolveTodoForm,
        },
    }
</script>
