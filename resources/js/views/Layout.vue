<template>
  <div>
    <nav>
      <inertia-link href="/">Home</inertia-link>
      <inertia-link href="/todos">Todos</inertia-link>
    </nav>
    <div>
      <slot />
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
