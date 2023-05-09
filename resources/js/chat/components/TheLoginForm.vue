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
  <div class="q-pa-md" style="max-width: 400px">
    <q-form
      @submit="onSubmit"
      @reset="onReset"
      class="q-gutter-md"
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
        <q-btn label="Submit" type="submit" color="primary"/>
        <q-btn label="Reset" type="reset" color="primary" flat class="q-ml-sm" />
      </div>
    </q-form>
  </div>
</template>