<template>
    <Layout title="Todos">
        <div v-if="$page.flash.message" class="bg-blue-300 text-blue-900 rounded shadow p-3 mb-4">
            {{ $page.flash.message }}
        </div>
        <div v-if="todos.length === 0" class="text-center text-sm text-gray-700">
            Geen todos gevonden.
        </div>
        <div v-else v-for="todo in todos" :key="todo.id">
            <div class="bg-white shadow rounded-lg p-5 flex justify-between mb-4">
                <div>
                    <div :class="['text-sm', {'text-blue-800': !todo.overdue}, {'text-red-600': todo.overdue}]">
                        {{ formattedDate(todo.deadline) }}
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
import { DateTime } from "luxon";

export default {
    props: {
        todos: Array,
    },
    components: {
        ResolveTodoForm,
    },
    methods: {
        formattedDate(date) {
            const dt = DateTime.fromISO(date);
            return dt.setLocale("nl").toFormat("ccc d MMMM");
        }
    }
}
</script>
