<script setup>
<<<<<<< HEAD
  import TheFormLogin from './components/TheFormLogin.vue';
  import TheChat from './components/TheChat.vue';
  console.log(BACK_DATA);
=======
  import { ref } from 'vue';
  const count = ref(0);
  fetch('/api/msg/get');

>>>>>>> b3a5878efb022bac6ecacbf94c5aaa262e0db76a
</script>

<template>
  <the-form-login></the-form-login>
  <the-chat></the-chat>
</template>

<style scoped>

</style>
