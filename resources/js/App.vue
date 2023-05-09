<script setup>
  import { ref } from 'vue';
  const count = ref(0);
  fetch('/api/msg/get');

</script>

<template>
  <h1>Hello Vue</h1>
</template>

<style scoped>

</style>
