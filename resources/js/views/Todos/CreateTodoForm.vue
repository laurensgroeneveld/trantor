<template>
  <form @submit.prevent="submit">
    <h1 class="text-2xl font-bold mb-3">
        <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-red-500">
            Nieuwe todo
        </span>
    </h1>

    <label class="block mb-4">
        <span class="block text-xs text-blue-800 uppercase tracking-wide mb-1">Beschrijving</span>
        <textarea id="description" v-model="form.description" rows="3" class="w-full block border-2 border-gray-300 focus:border-blue-500 rounded outline-none focus:shadow p-2 text-blue-900 transition-all duration-200"></textarea>
        <div v-if="$page.errors.description" class="mt-1 text-sm text-red-700">{{ $page.errors.description[0] }}
        </div>
    </label>
    <label class="block mb-4">
        <span class="block text-xs text-blue-800 uppercase tracking-wide mb-1">Deadline</span>
        <input v-model="form.deadline" type="date" class="block border-2 border-gray-300 focus:border-blue-500 rounded outline-none focus:shadow p-2 text-blue-900 transition-all duration-200" />
        <div v-if="$page.errors.deadline" class="mt-1 text-sm text-red-700">{{ $page.errors.deadline[0] }}
        </div>
    </label>
    <button type="submit" class="bg-gradient-to-r from-blue-500 to-indigo-700 hover:from-blue-600 hover:to-indigo-800 focus:from-blue-600 focus:to-indigo-800 p-3 rounded-full shadow hover:shadow-md focus:shadow-inner transition-all duration-200 text-blue-100">
        Opslaan
    </button>
  </form>
</template>

<script>
export default {
  data() {
    return {
      form: {
        description: null,
        deadline: new Date().toISOString().substr(0, 10),
      },
    }
  },
  methods: {
    submit() {
      this.$inertia.post('/todos', this.form)
    },
  },
}
</script>
