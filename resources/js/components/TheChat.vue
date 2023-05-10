<template>
  <div class="q-pa-md row justify-center">
    <div style="width: 100%; max-width: 400px">
      <q-chat-message
        name="me"
        :text="['hey, how are you?', 'hello']"
        stamp="17:00"
        sent
      />
      <q-chat-message
        name="Jane"
        :text="['doing fine, how r you?']"
      />
    </div>
  </div>
</template>