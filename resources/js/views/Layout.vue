<template>
  <div>
    <nav class="bg-white shadow py-6">
      <div class="container mx-auto text-center">
          <inertia-link href="/" class="text-blue-700 hover:text-blue-300 mr-6">Home</inertia-link>
          <inertia-link href="/todos" class="text-blue-700 hover:text-blue-300">Todos</inertia-link>
      </div>
    </nav>
    <div class="container mx-auto mt-6">
      <div class="w-1/2 mx-auto">
          <slot />
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    props: {
      title: String,
    },
    watch: {
      title: {
        immediate: true,
        handler(title) {
          document.title = `${title} - Trantor`
        },
      },
    },
  }
</script>
