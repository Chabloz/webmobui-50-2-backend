import { createApp } from 'vue';
import { Quasar } from 'quasar';
import '@quasar/extras/roboto-font/roboto-font.css';
import '@quasar/extras/material-icons/material-icons.css';
import 'quasar/dist/quasar.css';
import '../css/app.css';

import App from './App.vue';

const myApp = createApp(App);

myApp.use(Quasar, {
  plugins: {},
  config: {
    dark: 'auto',
    brand: {
      negative: 'tomato',
    }
  },
});

myApp.mount('#app');
