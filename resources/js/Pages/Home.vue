<template>
    <div>
        <div>
            Home / <inertia-link href="/todos">Todos</inertia-link>
        </div>
        <div>
            <CreateTodoForm />
        </div>
    </div>
</template>

<script>
    import CreateTodoForm from "./Todos/CreateTodoForm";

    export default {
        components: {
            CreateTodoForm
        }
    }
</script>
