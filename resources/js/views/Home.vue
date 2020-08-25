<template>
    <Layout title="Home">
        <div>
            <CreateTodoForm />
        </div>
    </Layout>
</template>

<script>
    import CreateTodoForm from "./Todos/CreateTodoForm";

    export default {
        components: {
            CreateTodoForm
        }
    }
</script>
