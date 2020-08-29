<template>
    <Layout title="Todos">
        <div v-if="$page.flash.message" class="alert">
            {{ $page.flash.message }}
        </div>
        <div v-if="todos.length === 0" class="text-center text-sm text-gray-700">
            Geen todos gevonden.
        </div>
        <div v-else v-for="todo in todos" :key="todo.id">
            <div class="bg-white shadow rounded-lg p-5 flex justify-between mb-4">
                <div>
                    <div class="text-sm text-blue-800">
                        {{ todo.deadline }}
                    </div>
                    <div class="text-gray-900">
                        {{ todo.description }}
                    </div>
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
