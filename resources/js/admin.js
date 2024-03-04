import './bootstrap';
import '../css/app.css';

import { createApp } from 'vue';
import router from './router';

import Logout from "./Components/Logout.vue";

const app = createApp();

app.use(router);

app.component('Logout', Logout)
app.mount('#app');
