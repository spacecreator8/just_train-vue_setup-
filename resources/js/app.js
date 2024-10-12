import './bootstrap';
import { createApp } from 'vue';
import router from './router';
import store from './store';

const app = createApp({});

app.use(router);
app.use(store);

import ExampleComponent from './components/ExampleComponent.vue';
import UpdateWorkerComponent from "./components/UpdateWorkerComponent.vue";
import OneWorkerComponent from "./components/OneWorkerComponent.vue";
import WorkersComponent from "./components/WorkersComponent.vue";
import HomeComponent from "./components/HomeComponent.vue";
import FullTest from "./components/FullTest.vue";
import CreateWorkerComponent from "./components/CreateWorkerComponent.vue";

app.component('example-component', ExampleComponent);
app.component('workers-component', WorkersComponent);
app.component('update-worker-component', UpdateWorkerComponent);
app.component('one-worker-component', OneWorkerComponent);
app.component('home-component', HomeComponent);
app.component('test-component', FullTest);
app.component('create-worker-component', CreateWorkerComponent);


app.mount('#app');
