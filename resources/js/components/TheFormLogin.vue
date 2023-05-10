<script setup>
import { useQuasar } from 'quasar';
import { ref } from 'vue';

const name = ref(null);

function onSubmit () {
  console.log('Submitted!', name.value);
}

function onReset () {
  name.value = null
}
</script>

<template>
  <div class="column items-center">
    <h1 class="row text-h2">Chat IM</h1>
    <div class="row full-width justify-center">
      <q-form
        @submit="onSubmit"
        @reset="onReset"
        class="col-6 q-gutter-md"
      >
        <q-input
          filled
          v-model="name"
          label="Username *"
          hint="Your username for the chat"
          lazy-rules
          :rules="[ val => val && val.match(/^[a-z]+$/i) && val.length > 0 || 'Alphabetic characters only']"
        />

        <div>
          <q-btn label="Login" type="submit" color="primary"/>
          <q-btn label="Reset" type="reset" color="primary" flat class="q-ml-sm" />
        </div>
      </q-form>
    </div>
  </div>
</template>