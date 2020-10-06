<template>
    <Layout title="Todos - Done">
        <div class="bg-white shadow rounded-lg p-5 flex justify-between mb-4" v-for="todo in todos">
            <div class="text-gray-900">
                {{ todo.description }}
            </div>
            <div class="text-sm text-blue-800 flex items-center">
                <svg class="w-3 h-3 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                {{ formattedDate(todo.resolved_at) }}
            </div>
        </div>
    </Layout>
</template>

<script>
import { DateTime } from "luxon";

export default {
    props: {
        todos: Array,
    },
    methods: {
        formattedDate(date) {
            const dt = DateTime.fromSQL(date);
            return dt.setLocale("nl").toFormat("ccc d MMMM");
        }
    }
}
</script>

