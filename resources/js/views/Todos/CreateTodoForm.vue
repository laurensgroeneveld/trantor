<template>
  <form @submit.prevent="submit">
    <label class="block">Description:
        <input id="description" v-model="form.description" class="border border-gray-300 rounded" />
        <div v-if="$page.errors.description">{{ $page.errors.description[0] }}</div>
    </label>
    <label class="block">Deadline:
        <input v-model="form.deadline" type="date" />
        <div v-if="$page.errors.deadline">{{ $page.errors.deadline[0] }}</div>
    </label>
    <button type="submit">
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
